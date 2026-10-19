<?php 

require_once __DIR__ . '/includes/session.php';
require_once __DIR__ . '/includes/SiteComponents.php'; 

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
    <?php SiteComponents::renderNavbar('home'); ?>

    <!-- Showcase Section Start -->
    <section class="main-showcase">
      <div class="slide-container active">
        <div class="main-visual">
          <div class="main-screen">
            <img src="images/antipolo-egaps-dashboard.png" alt="eGAPS Slide" />
          </div>
          <div class="sub-screen">
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
          <div class="slide-action">
            <a href="products.php" class="btn-learn-more">Learn More</a>
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="slide-container">
        <div class="main-visual">
          <div class="main-screen">
            <img src="images/calamba-pos.png" alt="POS System" />
          </div>
          <div class="sub-screen">
            <img src="images/calamba-web.png" alt="Web Preview" />
          </div>
        </div>
        <div class="slide-content">
          <span class="slide-subtitle">
            STREAMLINED POINT-OF-SALE & ONLINE ORDER MANAGEMENT.
          </span>
          <h1 class="slide-title">
            <h1 class="slide-title">
              <span class="highlight">P</span>oint <br />
              <span class="highlight">O</span>f <br />
              <span class="highlight">P</span>ayment <br />
              <span class="highlight">S</span>ystem (POPS)
            </h1>
          </h1>
          <div class="slide-action">
            <a href="#learn-more" class="btn-learn-more">Learn More</a>
          </div>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="slide-container">
        <div class="main-visual">
          <div class="main-screen">
            <img src="images/calamba.png" alt="City Portal" />
          </div>
          <div class="sub-screen">
            <img src="images/calamba.png" alt="Citizen Mobile App" />
          </div>
        </div>
        <div class="slide-content">
          <span class="slide-subtitle">
            DIGITAL CITIZEN ENGAGEMENT AND PUBLIC SERVICES PORTAL.
          </span>
          <h1 class="slide-title">
            <h1 class="slide-title">
              <span class="highlight">R</span>eal <br />
              <span class="highlight">P</span>roperty
              <span class="highlight">A</span>ssessment
              <span class="highlight">S</span>ystem (RPAS)
            </h1>
          </h1>
          <div class="slide-action">
            <a href="#learn-more" class="btn-learn-more">Learn More</a>
          </div>
        </div>
      </div>

      <!-- Slide 4 -->
      <div class="slide-container">
        <div class="main-visual">
          <div class="main-screen">
            <img src="images/calamba.png" alt="City Portal" />
          </div>
          <div class="sub-screen">
            <img
              src="images/antipolo-egaps-dashboard.png"
              alt="Citizen Mobile App"
            />
          </div>
        </div>
        <div class="slide-content">
          <span class="slide-subtitle">
            DIGITAL CITIZEN ENGAGEMENT AND PUBLIC SERVICES PORTAL.
          </span>
          <h1 class="slide-title">
            <h1 class="slide-title">
              <span class="highlight">B</span>usiness <br />
              <span class="highlight">P</span>ermit and <br />
              <span class="highlight">L</span>icense <br />
              <span class="highlight">S</span>ystem (BPLS)
            </h1>
          </h1>
          <div class="slide-action">
            <a href="#learn-more" class="btn-learn-more">Learn More</a>
          </div>
        </div>
      </div>
      <!-- Slide 5 -->
      <div class="slide-container">
        <div class="main-visual">
          <div class="main-screen">
            <img src="images/calamba.png" alt="City Portal" />
          </div>
          <div class="sub-screen">
            <img src="images/antipolo-egaps.png" alt="Citizen Mobile App" />
          </div>
        </div>
        <div class="slide-content">
          <span class="slide-subtitle">
            DIGITAL CITIZEN ENGAGEMENT AND PUBLIC SERVICES PORTAL.
          </span>
          <h1 class="slide-title">
            <h1 class="slide-title">
              <span class="highlight">N</span>ew <br />
              <span class="highlight">G</span>overnment <br />
              <span class="highlight">A</span>ccounting <br />
              <span class="highlight">S</span>ystem (NGAS)
            </h1>
          </h1>
          <div class="slide-action">
            <a href="#learn-more" class="btn-learn-more">Learn More</a>
          </div>
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

      <!-- Edit project descriptions here; the modal uses each card's text. -->
      <div class="solutions-cards-grid">
        <div
          class="solutions-card"
          role="button"
          tabindex="0"
          aria-haspopup="dialog"
          aria-controls="cardDetailModal"
          aria-expanded="false"
        >
          <div class="solutions-card-thumb">
            <img src="images/calamba-web.png" alt="PASIG eGAPS" />
          </div>
          <div class="solutions-card-body">
            <span class="solutions-card-date">2025</span>
            <h3 class="solutions-card-title">PASIG eGAPS</h3>
            <p class="solutions-card-subtitle">
              Pasig Cityâ€™s New Process of Paying Tax
            </p>
            <p class="solutions-card-text">
              Revolutionary AI-powered document management and intelligent
              queueing...
            </p>
          </div>
        </div>

        <div
          class="solutions-card"
          role="button"
          tabindex="0"
          aria-haspopup="dialog"
          aria-controls="cardDetailModal"
          aria-expanded="false"
        >
          <div class="solutions-card-thumb">
            <img src="images/calamba-web.png" alt="CALACA eGAPS" />
          </div>
          <div class="solutions-card-body">
            <span class="solutions-card-date">2025</span>
            <h3 class="solutions-card-title">CALACA eGAPS</h3>
            <p class="solutions-card-subtitle">Travel Clearance for Minors</p>
            <p class="solutions-card-text">
              The DSWD's MTA system regulates travel clearance for minors
              going...
            </p>
          </div>
        </div>

        <div
          class="solutions-card"
          role="button"
          tabindex="0"
          aria-haspopup="dialog"
          aria-controls="cardDetailModal"
          aria-expanded="false"
        >
          <div class="solutions-card-thumb">
            <img src="images/calamba-web.png" alt="JALAJALA eGAPS" />
          </div>
          <div class="solutions-card-body">
            <span class="solutions-card-date">2025</span>
            <h3 class="solutions-card-title">JALAJALA eGAPS</h3>
            <p class="solutions-card-subtitle">
              Digital Education for JalaJala
            </p>
            <p class="solutions-card-text">
              A digital education platform for lesson planning, grading,
              attendance, and...
            </p>
          </div>
        </div>

        <div
          class="solutions-card"
          role="button"
          tabindex="0"
          aria-haspopup="dialog"
          aria-controls="cardDetailModal"
          aria-expanded="false"
        >
          <div class="solutions-card-thumb">
            <img src="images/calamba-web.png" alt="TAGUM eGAPS" />
          </div>
          <div class="solutions-card-body">
            <span class="solutions-card-date">2025</span>
            <h3 class="solutions-card-title">TAGUM eGAPS</h3>
            <p class="solutions-card-subtitle">
              Integrated Digital Learning for Teachers
            </p>
            <p class="solutions-card-text">
              An integrated platform for teachers in Valenzuela City enabling
              digital lesson...
            </p>
          </div>
        </div>

        <div
          class="solutions-card"
          role="button"
          tabindex="0"
          aria-haspopup="dialog"
          aria-controls="cardDetailModal"
          aria-expanded="false"
        >
          <div class="solutions-card-thumb">
            <img src="images/calamba-web.png" alt="VALENZUELA eGAPS" />
          </div>
          <div class="solutions-card-body">
            <span class="solutions-card-date">2025</span>
            <h3 class="solutions-card-title">VALENZUELA eGAPS</h3>
            <p class="solutions-card-subtitle">
              ValPets: Supporting Local Pet Owners
            </p>
            <p class="solutions-card-text">
              ValPets, a new initiative in Valenzuela City designed to help pet
              owners locat...
            </p>
          </div>
        </div>
      </div>
      <div class="show-more-btn-wrapper">
        <a href="portfolio.php" class="btn-show-more">
          <span>Show More</span>
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
            <polyline points="9 18 15 12 9 6"></polyline>
          </svg>
        </a>
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

    <!-- News Section Start -->
    <section class="news-section">
      <?php SiteComponents::renderSectionIntro(
          'news',
          'NEWS ARTICLES',
          ['', 'LEXSYS', ' on the News'],
          [
              'Discover how our innovative technology solutions are transforming communities and empowering businesses across the Philippines. Each project represents our commitment to excellence and sustainable impact.',
          ]
      ); ?>

      <div class="news-cards-grid">
        <div class="news-card">
          <div class="news-card-thumb">
            <img src="images/calamba-web.png" alt="PASIG eGAPS" />
            <span class="news-card-badge">Pasig City</span>
          </div>
          <div class="news-card-body">
            <span class="news-card-date">2025</span>
            <h3 class="news-card-title">PASIG eGAPS</h3>
            <p class="news-card-text">
              Revolutionary AI-powered document management and intelligent
              queueing...
            </p>
          </div>
        </div>

        <div class="news-card">
          <div class="news-card-thumb">
            <img src="images/calamba-web.png" alt="CALACA eGAPS" />
            <span class="news-card-badge">Calaca City</span>
          </div>
          <div class="news-card-body">
            <span class="news-card-date">2025</span>
            <h3 class="news-card-title">CALACA eGAPS</h3>
            <p class="news-card-text">
              The DSWD's MTA system regulates travel clearance for minors
              going...
            </p>
          </div>
        </div>

        <div class="news-card">
          <div class="news-card-thumb">
            <img src="images/calamba-web.png" alt="JALAJALA eGAPS" />
            <span class="news-card-badge">JalaJala, Rizal</span>
          </div>
          <div class="news-card-body">
            <span class="news-card-date">2025</span>
            <h3 class="news-card-title">JALAJALA eGAPS</h3>
            <p class="news-card-text">
              A digital education platform for lesson planning, grading,
              attendance, and...
            </p>
          </div>
        </div>

        <div class="news-card">
          <div class="news-card-thumb">
            <img src="images/calamba-web.png" alt="TAGUM eGAPS" />
            <span class="news-card-badge">Tagum City</span>
          </div>
          <div class="news-card-body">
            <span class="news-card-date">2025</span>
            <h3 class="news-card-title">TAGUM eGAPS</h3>
            <p class="news-card-text">
              An integrated platform for teachers in Valenzuela City enabling
              digital lesson...
            </p>
          </div>
        </div>

        <div class="news-card">
          <div class="news-card-thumb">
            <img src="images/calamba-web.png" alt="VALENZUELA eGAPS" />
            <span class="news-card-badge">Valenzuela City</span>
          </div>
          <div class="news-card-body">
            <span class="news-card-date">2025</span>
            <h3 class="news-card-title">VALENZUELA eGAPS</h3>
            <p class="news-card-text">
              ValPets, a new initiative in Valenzuela City designed to help pet
              owners locat...
            </p>
          </div>
        </div>
      </div>

      <div class="show-more-btn-wrapper">
        <a href="news.php" class="btn-show-more">
          <span>More News</span>
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
            <polyline points="9 18 15 12 9 6"></polyline>
          </svg>
        </a>
      </div>
    </section>
    <!-- News Section End -->

    <!-- Partners Section Start-->
    <section class="partners-section">
      <div class="partners-container">
        <div class="partners-text">
          <span class="section-tag">Clients & Partners</span>
          <h2 class="section-title">
            <span class="highlight">Trusted</span> by Leading Organizations
          </h2>
          <p class="section-desc">
            Discover how our innovative technology solutions are transforming
            communities and empowering businesses across the Philippines. Each
            project represents our commitment to excellence and sustainable
            impact.
          </p>
        </div>

        <div class="partners-logos">
          <button
            type="button"
            class="logo-card"
            data-partner-dialog="partner-batanes"
            aria-label="View Batanes details"
          >
            <img src="images/Batanes.png" alt="Batanes" />
          </button>
          <button
            type="button"
            class="logo-card"
            data-partner-dialog="partner-calaca"
            aria-label="View Calaca details"
          >
            <img src="images/Calaca.png" alt="Calaca" />
          </button>
          <button
            type="button"
            class="logo-card"
            data-partner-dialog="partner-calamba"
            aria-label="View Calamba details"
          >
            <img src="images/Calamba.jpeg" alt="Calamba" />
          </button>
          <button
            type="button"
            class="logo-card"
            data-partner-dialog="partner-jalajala"
            aria-label="View JalaJala details"
          >
            <img src="images/JalaJala.jpeg" alt="JalaJala" />
          </button>
          <button
            type="button"
            class="logo-card"
            data-partner-dialog="partner-malasiqui"
            aria-label="View Malasiqui details"
          >
            <img src="images/Malasiqui.png" alt="Malasiqui" />
          </button>
          <button
            type="button"
            class="logo-card"
            data-partner-dialog="partner-mandaluyong"
            aria-label="View Mandaluyong details"
          >
            <img src="images/Mandaluyong.jpeg" alt="Mandaluyong" />
          </button>
          <button
            type="button"
            class="logo-card"
            data-partner-dialog="partner-marikina"
            aria-label="View Marikina details"
          >
            <img src="images/Marikina.jpeg" alt="Marikina" />
          </button>
          <button
            type="button"
            class="logo-card"
            data-partner-dialog="partner-pasig"
            aria-label="View Pasig details"
          >
            <img src="images/Pasig.png" alt="Pasig" />
          </button>
          <button
            type="button"
            class="logo-card"
            data-partner-dialog="partner-tagum"
            aria-label="View Tagum details"
          >
            <img src="images/Tagum.png" alt="Tagum" />
          </button>
          <button
            type="button"
            class="logo-card"
            data-partner-dialog="partner-taytay"
            aria-label="View Taytay details"
          >
            <img src="images/Taytay.png" alt="Taytay" />
          </button>
          <button
            type="button"
            class="logo-card"
            data-partner-dialog="partner-valenzuela"
            aria-label="View Valenzuela details"
          >
            <img src="images/Valenzuela.jpeg" alt="Valenzuela" />
          </button>
        </div>
      </div>
    </section>
    <!-- Partners Section End-->

    <dialog id="partner-batanes" class="modal partner-modal">
      <div class="modal-box">
        <button
          type="button"
          class="modal-close"
          aria-label="Close partner details"
        >
          &times;
        </button>
        <div class="modal-content">
          <img
            class="partner-modal-logo"
            src="images/Batanes.png"
            alt="Batanes logo"
          />
          <h2>Municipality of Batanes</h2>
          <ol>
            <li>
              Batanes is featured among Lexsys Technologies' clients and
              partners.
            </li>
            <li>
              Lexsys works with organizations to deliver technology solutions
              that support their needs.
            </li>
          </ol>
        </div>
      </div>
    </dialog>
    <dialog id="partner-calaca" class="modal partner-modal">
      <div class="modal-box">
        <button
          type="button"
          class="modal-close"
          aria-label="Close partner details"
        >
          &times;
        </button>
        <div class="modal-content">
          <img
            class="partner-modal-logo"
            src="images/Calaca.png"
            alt="Calaca logo"
          />
          <h2>City of Calaca, Batangas</h2>
          <ol>
            <li>
              Calaca is featured among Lexsys Technologies' clients and
              partners.
            </li>
            <li>
              Lexsys works with organizations to deliver technology solutions
              that support their needs.
            </li>
          </ol>
        </div>
      </div>
    </dialog>
    <dialog id="partner-calamba" class="modal partner-modal">
      <div class="modal-box">
        <button
          type="button"
          class="modal-close"
          aria-label="Close partner details"
        >
          &times;
        </button>
        <div class="modal-content">
          <img
            class="partner-modal-logo"
            src="images/Calamba.jpeg"
            alt="Calamba logo"
          />
          <h2>City of Calamba, Laguna</h2>
          <ol>
            <li>
              Calamba is featured among Lexsys Technologies' clients and
              partners.
            </li>
            <li>
              Lexsys works with organizations to deliver technology solutions
              that support their needs.
            </li>
          </ol>
        </div>
      </div>
    </dialog>
    <dialog id="partner-jalajala" class="modal partner-modal">
      <div class="modal-box">
        <button
          type="button"
          class="modal-close"
          aria-label="Close partner details"
        >
          &times;
        </button>
        <div class="modal-content">
          <img
            class="partner-modal-logo"
            src="images/JalaJala.jpeg"
            alt="JalaJala logo"
          />
          <h2>Municipality of Jala-Jala, Rizal</h2>
          <ol>
            <li>
              JalaJala is featured among Lexsys Technologies' clients and
              partners.
            </li>
            <li>
              Lexsys works with organizations to deliver technology solutions
              that support their needs.
            </li>
          </ol>
        </div>
      </div>
    </dialog>
    <dialog id="partner-malasiqui" class="modal partner-modal">
      <div class="modal-box">
        <button
          type="button"
          class="modal-close"
          aria-label="Close partner details"
        >
          &times;
        </button>
        <div class="modal-content">
          <img
            class="partner-modal-logo"
            src="images/Malasiqui.png"
            alt="Malasiqui logo"
          />
          <h2>Municipality of Malasiqui, Pangasinan</h2>
          <ol>
            <li>
              Malasiqui is featured among Lexsys Technologies' clients and
              partners.
            </li>
            <li>
              Lexsys works with organizations to deliver technology solutions
              that support their needs.
            </li>
          </ol>
        </div>
      </div>
    </dialog>
    <dialog id="partner-marikina" class="modal partner-modal">
      <div class="modal-box">
        <button
          type="button"
          class="modal-close"
          aria-label="Close partner details"
        >
          &times;
        </button>
        <div class="modal-content">
          <img
            class="partner-modal-logo"
            src="images/Marikina.jpeg"
            alt="Marikina logo"
          />
          <h2>City of Marikina, Metro Manila</h2>
          <p class="partner-modal-since">Since 2008</p>
          <ol>
            <li>Real Property Tax Assessment System</li>
            <li>Real Property Tax Management and Billing System</li>
            <li>Business Permit &amp; License System</li>
            <li>Point of Payment System</li>
            <li>Cash Collection System</li>
            <li>Online Real Property Tax Billing and Payment System</li>
            <li>
              Online Assessment and Payment for Business Permit System (PASPAS
              PERMIT)
            </li>
            <li>
              Miscellaneous Collection System &amp; Residence Certificate System
            </li>
          </ol>
        </div>
      </div>
    </dialog>
    <dialog id="partner-mandaluyong" class="modal partner-modal">
      <div class="modal-box">
        <button
          type="button"
          class="modal-close"
          aria-label="Close partner details"
        >
          &times;
        </button>
        <div class="modal-content">
          <img
            class="partner-modal-logo"
            src="images/Mandaluyong.jpeg"
            alt="Mandaluyong logo"
          />
          <h2>City of Mandaluyong, Metro Manila</h2>
          <ol>
            <li>
              Mandaluyong is featured among Lexsys Technologies' clients and
              partners.
            </li>
            <li>
              Lexsys works with organizations to deliver technology solutions
              that support their needs.
            </li>
          </ol>
        </div>
      </div>
    </dialog>
    <dialog id="partner-pasig" class="modal partner-modal">
      <div class="modal-box">
        <button
          type="button"
          class="modal-close"
          aria-label="Close partner details"
        >
          &times;
        </button>
        <div class="modal-content">
          <img
            class="partner-modal-logo"
            src="images/Pasig.png"
            alt="Pasig logo"
          />
          <h2>City of Pasig, Metro Manila</h2>
          <p class="partner-modal-since">Since 2015</p>
          <ol>
            <li>Real Property Tax Assessment System</li>
            <li>Real Property Tax Management and Billing System</li>
            <li>Business Permit &amp; License System</li>
            <li>Market Administration System</li>
            <li>
              Tricycle Operations Monitoring and Traffic Management System
            </li>
            <li>Point of Payment System</li>
            <li>Cash Collection System</li>
            <li>Cash Disbursement System</li>
            <li>Budget Monitoring System</li>
            <li>New Government Accounting System</li>
            <li>Personnel Management and Information System</li>
            <li>Attendance and Leave Monitoring System</li>
            <li>Government Payroll System</li>
            <li>Online Real Property Tax Billing and Payment System</li>
            <li>
              Online Assessment and Payment for Business Permit System (PASPAS
              PERMIT)
            </li>
            <li>Online Building Permit, Application and Payment System</li>
            <li>
              Legislative Management, Tracking, Codification &amp; Information
              System
            </li>
            <li>Procurement and Property Management System</li>
            <li>Local Civil Registry System</li>
            <li>
              Miscellaneous Collection System &amp; Residence Certificate System
            </li>
            <li>Hospital Management &amp; Information System</li>
            <li>Executive Information System</li>
            <li>PhilHealth E-Claims Web Service (PECWS)</li>
          </ol>
        </div>
      </div>
    </dialog>
    <dialog id="partner-tagum" class="modal partner-modal">
      <div class="modal-box">
        <button
          type="button"
          class="modal-close"
          aria-label="Close partner details"
        >
          &times;
        </button>
        <div class="modal-content">
          <img
            class="partner-modal-logo"
            src="images/Tagum.png"
            alt="Tagum logo"
          />
          <h2>City of Tagum, Davao del Norte</h2>
          <ol>
            <li>
              Tagum is featured among Lexsys Technologies' clients and partners.
            </li>
            <li>
              Lexsys works with organizations to deliver technology solutions
              that support their needs.
            </li>
          </ol>
        </div>
      </div>
    </dialog>
    <dialog id="partner-taytay" class="modal partner-modal">
      <div class="modal-box">
        <button
          type="button"
          class="modal-close"
          aria-label="Close partner details"
        >
          &times;
        </button>
        <div class="modal-content">
          <img
            class="partner-modal-logo"
            src="images/Taytay.png"
            alt="Taytay logo"
          />
          <h2>Municipality of Taytay, Rizal</h2>
          <ol>
            <li>
              Taytay is featured among Lexsys Technologies' clients and
              partners.
            </li>
            <li>
              Lexsys works with organizations to deliver technology solutions
              that support their needs.
            </li>
          </ol>
        </div>
      </div>
    </dialog>
    <dialog id="partner-valenzuela" class="modal partner-modal">
      <div class="modal-box">
        <button
          type="button"
          class="modal-close"
          aria-label="Close partner details"
        >
          &times;
        </button>
        <div class="modal-content">
          <img
            class="partner-modal-logo"
            src="images/Valenzuela.jpeg"
            alt="Valenzuela logo"
          />
          <h2>City of Valenzuela, Metro Manila</h2>
          <p class="partner-modal-since">Since 2004</p>
          <ol>
            <li>Real Property Tax Assessment System</li>
            <li>Real Property Tax Management and Billing System</li>
            <li>Business Permit &amp; License System</li>
            <li>Building Permit System</li>
            <li>Point of Payment System</li>
            <li>Cash Collection System</li>
            <li>Cash Disbursement System</li>
            <li>Budget Monitoring System</li>
            <li>New Government Accounting System</li>
            <li>Personnel Management and Information System</li>
            <li>Attendance and Leave Monitoring System</li>
            <li>Government Payroll System</li>
            <li>Online Real Property Tax Billing and Payment System</li>
            <li>
              Online Assessment and Payment for Business Permit System (PASPAS
              PERMIT)
            </li>
            <li>Online Building Permit, Application and Payment System</li>
            <li>Hospital Management &amp; Information System</li>
            <li>Procurement and Property Management System</li>
            <li>
              Online Barangay Residence Certificate Issuance and Collection
              System
            </li>
            <li>
              Online Civil Registry (Certified True Copy of Certification)
            </li>
            <li>
              Online Assessorâ€™s Office Services - Electronic Tax Order of
              Payment
            </li>
            <li>
              Building Permit Application Submission System (BPASS) â€“ Kiosk
            </li>
            <li>PhilHealth E-Claims Web Service (PECWS)</li>
            <li>
              Miscellaneous Collection System &amp; Residence Certificate System
            </li>
            <li>Task Force Disiplina System</li>
            <li>School Administration and Management System</li>
          </ol>
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
