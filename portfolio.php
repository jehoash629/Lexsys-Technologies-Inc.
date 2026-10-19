<?php require_once __DIR__ . '/includes/session.php';
require_once __DIR__ . '/includes/SiteComponents.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>LEXSYS TECHNOLOGIES, INC.</title>
  </head>
  <body id="top">
    <?php SiteComponents::renderNavbar('portfolio'); ?>

    <!-- Showcase Section Start -->
    <section class="portfolio-main-showcase">
      <div class="portfolio-slide-container active">
        <div class="portfolio-main-visual">
          <div class="portfolio-main-screen">
            <img src="images/antipolo-egaps-dashboard.png" alt="eGAPS Slide" />
          </div>
          <div class="portfolio-sub-screen">
            <img src="images/antipolo-egaps.png" alt="App Preview" />
          </div>
        </div>
        <div class="slide-content">
          <span class="slide-subtitle">
            ACCESS REAL-TIME INSIGHTS ON EMERGENCIES, CONDITIONS, AND MORE â€” ALL
            IN ONE PLATFORM.
          </span>
          <h1 class="slide-title">
            <span class="highlight">e</span>lectronic
            <span class="highlight">G</span>overnment
            <span class="highlight">AP</span>plication <br />
            <span class="highlight">S</span>ystem (eGAPS)
          </h1>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="portfolio-slide-container">
        <div class="portfolio-main-visual">
          <div class="portfolio-main-screen">
            <img src="images/calamba-pos.png" alt="POS System" />
          </div>
          <div class="portfolio-sub-screen">
            <img src="images/calamba-web.png" alt="Web Preview" />
          </div>
        </div>
        <div class="portfolio-slide-content">
          <span class="portfolio-slide-subtitle">
            STREAMLINED POINT-OF-SALE & ONLINE ORDER MANAGEMENT.
          </span>
          <h1 class="portfolio-slide-title">
            <h1 class="portfolio-slide-title">
              <span class="highlight">P</span>oint <br />
              <span class="highlight">O</span>f <br />
              <span class="highlight">P</span>ayment <br />
              <span class="highlight">S</span>ystem (POPS)
            </h1>
          </h1>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="portfolio-slide-container">
        <div class="portfolio-main-visual">
          <div class="portfolio-main-screen">
            <img src="images/calamba.png" alt="City Portal" />
          </div>
          <div class="portfolio-sub-screen">
            <img src="images/calamba.png" alt="Citizen Mobile App" />
          </div>
        </div>
        <div class="portfolio-slide-content">
          <span class="portfolio-slide-subtitle">
            DIGITAL CITIZEN ENGAGEMENT AND PUBLIC SERVICES PORTAL.
          </span>
          <h1 class="portfolio-slide-title">
            <h1 class="portfolio-slide-title">
              <span class="highlight">R</span>eal <br />
              <span class="highlight">P</span>roperty
              <span class="highlight">A</span>ssessment
              <span class="highlight">S</span>ystem (RPAS)
            </h1>
          </h1>
        </div>
      </div>

      <!-- Slide 4 -->
      <div class="portfolio-slide-container">
        <div class="portfolio-main-visual">
          <div class="portfolio-main-screen">
            <img src="images/calamba.png" alt="City Portal" />
          </div>
          <div class="portfolio-sub-screen">
            <img
              src="images/antipolo-egaps-dashboard.png"
              alt="Citizen Mobile App"
            />
          </div>
        </div>
        <div class="portfolio-slide-content">
          <span class="portfolio-slide-subtitle">
            DIGITAL CITIZEN ENGAGEMENT AND PUBLIC SERVICES PORTAL.
          </span>
          <h1 class="portfolio-slide-title">
            <h1 class="portfolio-slide-title">
              <span class="highlight">B</span>usiness <br />
              <span class="highlight">P</span>ermit and <br />
              <span class="highlight">L</span>icense <br />
              <span class="highlight">S</span>ystem (BPLS)
            </h1>
          </h1>
        </div>
      </div>
      <!-- Slide 5 -->
      <div class="portfolio-slide-container">
        <div class="portfolio-main-visual">
          <div class="portfolio-main-screen">
            <img src="images/calamba.png" alt="City Portal" />
          </div>
          <div class="portfolio-sub-screen">
            <img src="images/antipolo-egaps.png" alt="Citizen Mobile App" />
          </div>
        </div>
        <div class="portfolio-slide-content">
          <span class="slide-subtitle">
            DIGITAL CITIZEN ENGAGEMENT AND PUBLIC SERVICES PORTAL.
          </span>
          <h1 class="portfolio-slide-title">
            <h1 class="portfolio-slide-title">
              <span class="highlight">N</span>ew <br />
              <span class="highlight">G</span>overnment <br />
              <span class="highlight">A</span>ccounting <br />
              <span class="highlight">S</span>ystem (NGAS)
            </h1>
          </h1>
        </div>
      </div>
    </section>
    <!-- Showcase Section End -->

    <!-- Solutions Section Start-->
    <section class="solutions-section">
      <?php SiteComponents::renderSectionIntro(
          'solutions',
          'RECENT PROJECTS',
          ['Our Solutions in ', 'Action', ''],
          [
              'Discover how our innovative technology solutions are transforming communities and empowering businesses across the Philippines.',
              'Each project represents our commitment to excellence and sustainable impact.',
          ],
          true
      ); ?>

      <div class="solutions-cards-grid">
        <div class="solutions-card">
          <div class="solutions-card-thumb">
            <img src="images/calamba-web.png" alt="PASIG eGAPS" />
          </div>
          <div class="solutions-card-body">
            <span class="solutions-card-date">2025</span>
            <h3 class="solutions-card-title">PASIG eGAPS</h3>
            <p class="solutions-card-text">
              Revolutionary AI-powered document management and intelligent
              queueing...
            </p>
          </div>
        </div>

        <div class="solutions-card">
          <div class="solutions-card-thumb">
            <img src="images/calamba-web.png" alt="CALACA eGAPS" />
          </div>
          <div class="solutions-card-body">
            <span class="solutions-card-date">2025</span>
            <h3 class="solutions-card-title">CALACA eGAPS</h3>
            <p class="solutions-card-text">
              The DSWD's MTA system regulates travel clearance for minors
              going...
            </p>
          </div>
        </div>

        <div class="solutions-card">
          <div class="solutions-card-thumb">
            <img src="images/calamba-web.png" alt="JALAJALA eGAPS" />
          </div>
          <div class="solutions-card-body">
            <span class="solutions-card-date">2025</span>
            <h3 class="solutions-card-title">JALAJALA eGAPS</h3>
            <p class="solutions-card-text">
              A digital education platform for lesson planning, grading,
              attendance, and...
            </p>
          </div>
        </div>

        <div class="solutions-card">
          <div class="solutions-card-thumb">
            <img src="images/calamba-web.png" alt="TAGUM eGAPS" />
          </div>
          <div class="solutions-card-body">
            <span class="solutions-card-date">2025</span>
            <h3 class="solutions-card-title">TAGUM eGAPS</h3>
            <p class="solutions-card-text">
              An integrated platform for teachers in Valenzuela City enabling
              digital lesson...
            </p>
          </div>
        </div>

        <div class="solutions-card">
          <div class="solutions-card-thumb">
            <img src="images/calamba-web.png" alt="VALENZUELA eGAPS" />
          </div>
          <div class="solutions-card-body">
            <span class="solutions-card-date">2025</span>
            <h3 class="solutions-card-title">VALENZUELA eGAPS</h3>
            <p class="solutions-card-text">
              ValPets, a new initiative in Valenzuela City designed to help pet
              owners locat...
            </p>
          </div>
        </div>
        <div class="solutions-card hidden-card">
          <div class="solutions-card-thumb">
            <img src="images/calamba-web.png" alt="CALAMBA POS" />
            <span class="solutions-card-badge">Calamba City</span>
          </div>
          <div class="solutions-card-body">
            <span class="solutions-card-date">2025</span>
            <h3 class="solutions-card-title">CALAMBA POS</h3>
            <p class="solutions-card-text">
              Point-of-sale commerce and local revenue automation...
            </p>
          </div>
        </div>
        <div class="solutions-card hidden-card">
          <div class="solutions-card-thumb">
            <img src="images/calamba-web.png" alt="CALAMBA POS" />
            <span class="solutions-card-badge">Calamba City</span>
          </div>
          <div class="solutions-card-body">
            <span class="solutions-card-date">2025</span>
            <h3 class="solutions-card-title">CALAMBA POS</h3>
            <p class="solutions-card-text">
              Point-of-sale commerce and local revenue automation...
            </p>
          </div>
        </div>
        <div class="solutions-card hidden-card">
          <div class="solutions-card-thumb">
            <img src="images/calamba-web.png" alt="CALAMBA POS" />
            <span class="solutions-card-badge">Calamba City</span>
          </div>
          <div class="solutions-card-body">
            <span class="solutions-card-date">2025</span>
            <h3 class="solutions-card-title">CALAMBA POS</h3>
            <p class="solutions-card-text">
              Point-of-sale commerce and local revenue automation...
            </p>
          </div>
        </div>
        <div class="solutions-card hidden-card">
          <div class="solutions-card-thumb">
            <img src="images/calamba-web.png" alt="CALAMBA POS" />
            <span class="solutions-card-badge">Calamba City</span>
          </div>
          <div class="solutions-card-body">
            <span class="solutions-card-date">2025</span>
            <h3 class="solutions-card-title">CALAMBA POS</h3>
            <p class="solutions-card-text">
              Point-of-sale commerce and local revenue automation...
            </p>
          </div>
        </div>
        <div class="solutions-card hidden-card">
          <div class="solutions-card-thumb">
            <img src="images/calamba-web.png" alt="CALAMBA POS" />
            <span class="solutions-card-badge">Calamba City</span>
          </div>
          <div class="solutions-card-body">
            <span class="solutions-card-date">2025</span>
            <h3 class="solutions-card-title">CALAMBA POS</h3>
            <p class="solutions-card-text">
              Point-of-sale commerce and local revenue automation...
            </p>
          </div>
        </div>
        <div class="solutions-card hidden-card">
          <div class="solutions-card-thumb">
            <img src="images/calamba-web.png" alt="CALAMBA POS" />
            <span class="solutions-card-badge">Calamba City</span>
          </div>
          <div class="solutions-card-body">
            <span class="solutions-card-date">2025</span>
            <h3 class="solutions-card-title">CALAMBA POS</h3>
            <p class="solutions-card-text">
              Point-of-sale commerce and local revenue automation...
            </p>
          </div>
        </div>
        <div class="solutions-card hidden-card">
          <div class="solutions-card-thumb">
            <img src="images/calamba-web.png" alt="CALAMBA POS" />
            <span class="solutions-card-badge">Calamba City</span>
          </div>
          <div class="solutions-card-body">
            <span class="solutions-card-date">2025</span>
            <h3 class="solutions-card-title">CALAMBA POS</h3>
            <p class="solutions-card-text">
              Point-of-sale commerce and local revenue automation...
            </p>
          </div>
        </div>
        <div class="solutions-card hidden-card">
          <div class="solutions-card-thumb">
            <img src="images/calamba-web.png" alt="CALAMBA POS" />
            <span class="solutions-card-badge">Calamba City</span>
          </div>
          <div class="solutions-card-body">
            <span class="solutions-card-date">2025</span>
            <h3 class="solutions-card-title">CALAMBA POS</h3>
            <p class="solutions-card-text">
              Point-of-sale commerce and local revenue automation...
            </p>
          </div>
        </div>
        <div class="solutions-card hidden-card">
          <div class="solutions-card-thumb">
            <img src="images/calamba-web.png" alt="CALAMBA POS" />
            <span class="solutions-card-badge">Calamba City</span>
          </div>
          <div class="solutions-card-body">
            <span class="solutions-card-date">2025</span>
            <h3 class="solutions-card-title">CALAMBA POS</h3>
            <p class="solutions-card-text">
              Point-of-sale commerce and local revenue automation...
            </p>
          </div>
        </div>
        <div class="solutions-card hidden-card">
          <div class="solutions-card-thumb">
            <img src="images/calamba-web.png" alt="CALAMBA POS" />
            <span class="solutions-card-badge">Calamba City</span>
          </div>
          <div class="solutions-card-body">
            <span class="solutions-card-date">2025</span>
            <h3 class="solutions-card-title">CALAMBA POS</h3>
            <p class="solutions-card-text">
              Point-of-sale commerce and local revenue automation...
            </p>
          </div>
        </div>
      </div>
      
      </div>

      <div class="show-more-btn-wrapper">
        <button type="button" class="btn-show-more" id="showMoreWorkBtn">
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
            <polyline
              id="arrowPolyline"
              points="6 9 12 15 18 9"
            ></polyline>
          </svg>
        </button>
      </div>
    </section>
    <!-- Solutions Section End-->

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
    <script src="index.js"></script>
  </body>
</html>
