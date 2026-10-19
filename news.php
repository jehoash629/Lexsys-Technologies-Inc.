<?php require_once __DIR__ . '/includes/session.php';
require_once __DIR__ . '/includes/SiteComponents.php';
require_once __DIR__ . '/includes/NewsManager.php';
require_once __DIR__ . '/db.php';

$isAdmin = ($_SESSION['is_admin'] ?? false) === true;
$newsError = '';
$newsNotice = '';
$formValues = [];
$editingCardId = null;
$formAction = 'create';

if (isset($_SESSION['news_notice']) && is_string($_SESSION['news_notice'])) {
    $newsNotice = $_SESSION['news_notice'];
    unset($_SESSION['news_notice']);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!$isAdmin) {
        http_response_code(403);
        $newsError = 'Only an administrator can add news.';
    } else {
        foreach (['title', 'location', 'published_on', 'summary'] as $field) {
            if (isset($_POST[$field]) && is_string($_POST[$field])) {
                $formValues[$field] = $_POST[$field];
            }
        }
        $requestedAction = $_POST['form_action'] ?? 'create';
        $formAction = is_string($requestedAction) ? $requestedAction : 'invalid';
        $postedCardId = $_POST['news_card_id'] ?? null;
        if (
            $formAction === 'update' &&
            is_string($postedCardId) &&
            ctype_digit($postedCardId) &&
            (int) $postedCardId > 0
        ) {
            $editingCardId = (int) $postedCardId;
        }

        $submittedToken = $_POST['csrf_token'] ?? null;
        $sessionToken = $_SESSION['news_csrf_token'] ?? null;
        if (
            !is_string($submittedToken) ||
            !is_string($sessionToken) ||
            !hash_equals($sessionToken, $submittedToken)
        ) {
            http_response_code(400);
            $newsError = 'Your form session expired. Reload the page and try again.';
        } else {
            try {
                if ($formAction === 'update') {
                    if ($editingCardId === null) {
                        throw new InvalidArgumentException('Select a valid news card to edit.');
                    }
                    NewsManager::update($pdo, $editingCardId, $_POST, $_FILES['thumbnail'] ?? []);
                    $_SESSION['news_notice'] = 'News card updated successfully.';
                } elseif ($formAction === 'create') {
                    NewsManager::create($pdo, $_POST, $_FILES['thumbnail'] ?? []);
                    $_SESSION['news_notice'] = 'News card added successfully.';
                } else {
                    throw new InvalidArgumentException('The news card action is invalid.');
                }
                header('Location: news.php', true, 303);
                exit;
            } catch (InvalidArgumentException $exception) {
                $newsError = $exception->getMessage();
            } catch (PDOException $exception) {
                error_log('News card could not be saved: ' . $exception->getMessage());
                $newsError = 'The news card could not be saved. Please try again later.';
            } catch (RuntimeException $exception) {
                error_log('News thumbnail could not be saved: ' . $exception->getMessage());
                $newsError = 'The thumbnail could not be saved. Please try again later.';
            } catch (Random\RandomException $exception) {
                error_log('News thumbnail filename could not be generated: ' . $exception->getMessage());
                $newsError = 'The thumbnail could not be saved. Please try again later.';
            }
        }
    }
}

if ($isAdmin && !isset($_SESSION['news_csrf_token'])) {
    $_SESSION['news_csrf_token'] = bin2hex(random_bytes(32));
}

try {
    $newsCards = NewsManager::latest($pdo);
} catch (PDOException $exception) {
    error_log('News cards could not be loaded: ' . $exception->getMessage());
    $newsCards = [];
    $newsLoadError = 'News cards are temporarily unavailable.';
}

$existingCards = NewsManager::existingCards();
$existingCardsByKey = [];
foreach ($existingCards as $existingCard) {
    $existingCardsByKey[$existingCard['source_key']] = $existingCard;
}

$adminNewsCards = [];
foreach ($newsCards as $newsCard) {
    $sourceKey = $newsCard['source_key'] ?? null;
    if (is_string($sourceKey) && array_key_exists($sourceKey, $existingCardsByKey)) {
        $existingCardsByKey[$sourceKey] = $newsCard;
    } else {
        $adminNewsCards[] = $newsCard;
    }
}
$newsCards = array_merge(array_values($existingCardsByKey), $adminNewsCards);
usort(
    $newsCards,
    static fn(array $left, array $right): int => strcmp(
        (string) $right['published_on'],
        (string) $left['published_on']
    )
);

$escape = static fn(string $value): string => htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>LEXSYS TECHNOLOGIES, INC.</title>
  </head>
  <body id="top">
    <?php SiteComponents::renderNavbar('news'); ?>

    <!-- News Page Banner Start -->
    <section class="news-page-banner-section">
      <div class="news-page-banner-container">
        <div class="news-page-banner-text">
          <span class="section-tag">&nbsp;</span>
          <h2 class="section-title">
            <span class="highlight">NEWS</span> <br />
            & UPDATES
          </h2>
          <p class="news-page-banner-section-desc">
            Get to know the latest news and updates on <br />
            Lexsys Community
          </p>
        </div>
      </div>
    </section>
    <!-- News Page Banner End -->

    <!-- Page header for the news and updates landing section -->
    <section class="news-section">
      <?php SiteComponents::renderSectionIntro(
          'news',
          'NEWS ARTICLES',
          ['', 'LEXSYS', ' on the News'],
          [
              'Discover how our innovative technology solutions are transforming communities and empowering businesses across the Philippines.',
          ]
      ); ?>

      <?php if ($isAdmin): ?>
        <div class="news-admin-actions">
          <button type="button" class="news-admin-open" id="openNewsManager">Add a News Card</button>
          <?php if ($newsNotice !== ''): ?>
            <p class="news-admin-message news-admin-success" role="status"><?= $escape($newsNotice) ?></p>
          <?php endif; ?>
          <?php if (isset($newsLoadError)): ?>
            <p class="news-admin-message news-admin-error" role="alert"><?= $escape($newsLoadError) ?> Apply the database setup in <code>database/news-cards.sql</code>.</p>
          <?php endif; ?>
        </div>
        <dialog
          class="news-manager-dialog"
          id="newsManagerDialog"
          aria-labelledby="newsManagerTitle"
          data-open-on-load="<?= $newsError !== '' ? 'true' : 'false' ?>"
        >
          <div class="news-manager-dialog-content">
            <button type="button" class="news-manager-close" id="closeNewsManager" aria-label="Close news manager">&times;</button>
            <form class="news-admin-form" method="POST" action="news.php" enctype="multipart/form-data">
              <h3 id="newsManagerTitle"><?= $formAction === 'update' ? 'Edit News Card' : 'Add a News Card' ?></h3>
              <p>Publish a news item to the cards below.</p>
              <?php if ($newsError !== ''): ?>
                <p class="news-admin-message news-admin-error" role="alert"><?= $escape($newsError) ?></p>
              <?php endif; ?>
              <input type="hidden" name="csrf_token" value="<?= $escape($_SESSION['news_csrf_token']) ?>">
              <input type="hidden" name="form_action" id="newsFormAction" value="<?= $escape($formAction) ?>">
              <input type="hidden" name="news_card_id" id="newsCardId" value="<?= $editingCardId !== null ? $editingCardId : '' ?>">
              <label>
                <span>Headline</span>
                <input type="text" name="title" maxlength="150" value="<?= $escape($formValues['title'] ?? '') ?>" required>
              </label>
              <label>
                <span>Location or category</span>
                <input type="text" name="location" maxlength="100" value="<?= $escape($formValues['location'] ?? '') ?>" required>
              </label>
              <label>
                <span>Publication date</span>
                <input type="date" name="published_on" value="<?= $escape($formValues['published_on'] ?? '') ?>" required>
              </label>
              <label>
                <span>Short description</span>
                <textarea name="summary" id="newsSummaryInput" rows="4" required><?= $escape($formValues['summary'] ?? '') ?></textarea>
              </label>
              <label>
                <span>Thumbnail (JPG, PNG, or WebP; up to 5 MB)</span>
                <input type="file" name="thumbnail" id="newsThumbnailInput" accept="image/jpeg,image/png,image/webp" <?= $formAction === 'create' ? 'required' : '' ?>>
              </label>
              <div class="news-thumbnail-preview" id="newsThumbnailPreview" hidden>
                <img id="newsThumbnailPreviewImage" alt="Selected news thumbnail preview">
                <span id="newsThumbnailPreviewName"></span>
              </div>
              <div class="news-manager-actions">
                <button type="button" class="news-manager-cancel" id="cancelNewsManager">Cancel</button>
                <button type="submit" id="submitNewsCard"><?= $formAction === 'update' ? 'Save Changes' : 'Add News Card' ?></button>
              </div>
            </form>
          </div>
        </dialog>
      <?php endif; ?>

      <!-- Keep all news cards inside this grid container. -->
      <div class="news-cards-grid">
        <?php foreach ($newsCards as $index => $newsCard): ?>
          <article
            class="news-card<?= $index >= 5 ? ' hidden-card' : '' ?>"
            <?php if ($newsCard['id'] !== null): ?>
              data-news-card-id="<?= $escape((string) $newsCard['id']) ?>"
              data-news-title="<?= $escape($newsCard['title']) ?>"
              data-news-location="<?= $escape($newsCard['location']) ?>"
              data-news-published-on="<?= $escape($newsCard['published_on']) ?>"
              data-news-summary="<?= $escape($newsCard['summary']) ?>"
              data-news-thumbnail="<?= $escape($newsCard['thumbnail_path']) ?>"
            <?php endif; ?>
          >
            <div class="news-card-thumb">
              <img src="<?= $escape($newsCard['thumbnail_path']) ?>" alt="<?= $escape($newsCard['title']) ?>">
              <?php if ($newsCard['location'] !== ''): ?>
                <span class="news-card-badge"><?= $escape($newsCard['location']) ?></span>
              <?php endif; ?>
            </div>
            <div class="news-card-body">
              <span class="news-card-date"><?= $escape(date('Y', strtotime($newsCard['published_on']))) ?></span>
              <h3 class="news-card-title"><?= $escape($newsCard['title']) ?></h3>
              <p class="news-card-text"><?= $escape($newsCard['summary']) ?></p>
            </div>
          </article>
        <?php endforeach; ?>

      </div>



      <!-- Button Wrapper Sits Under the Grid -->
      <?php if (count($newsCards) > 5): ?>
        <div class="show-more-btn-wrapper">
          <button type="button" class="btn-show-more" id="showMoreNewsBtn">
            <span class="btn-text">Show More</span>
            <svg
              class="arrow-icon"
              width="16"
              height="16"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2.5"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <polyline id="arrowPolyline" points="6 9 12 15 18 9"></polyline>
            </svg>
          </button>
        </div>
      <?php endif; ?>
    </section>
    <!-- News Section End -->

    <dialog
      id="cardDetailModal"
      class="modal card-detail-modal"
      aria-labelledby="cardDetailModalTitle"
    >
      <div class="card-detail-modal-box">
        <button
          type="button"
          class="modal-close"
          aria-label="Close solution details"
        >
          &times;
        </button>
        <div class="card-detail-modal-image">
          <img src="" alt="" />
        </div>
        <div class="card-detail-modal-content">
          <span class="card-detail-modal-date"></span>
          <h2 id="cardDetailModalTitle"></h2>
          <h3 class="card-detail-modal-subtitle"></h3>
          <p></p>
          <?php if ($isAdmin): ?>
            <button type="button" class="card-detail-edit" id="editNewsCard" aria-label="Edit News Card" hidden>
              <svg aria-hidden="true" viewBox="0 0 24 24" focusable="false">
                <path d="M12 20h9" />
                <path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L8 18l-4 1 1-4Z" />
              </svg>
              <span>Edit News Card</span>
            </button>
          <?php endif; ?>
        </div>
      </div>
    </dialog>

    <!-- Footer Start -->
    <?php SiteComponents::renderFooter('lexsys_technologies@yahoo.com'); ?>
    <!-- Footer End -->
    <button type="button" class="back-to-top" aria-label="Back to top">
      <svg
        aria-hidden="true"
        width="22"
        height="22"
        viewBox="0 0 24 24"
        fill="none"
        stroke="currentColor"
        stroke-width="3.5"
        stroke-linecap="round"
        stroke-linejoin="round"
      >
        <path d="M12 19V5"></path>
        <path d="m5 12 7-7 7 7"></path>
      </svg>
    </button>

    <!-- Shared front-end interactions: menu toggles, modals, and page behavior -->
    <script src="index.js"></script>
  </body>
</html>
