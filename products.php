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
    <?php SiteComponents::renderNavbar('products'); ?>

    <section class="main-showcase products-showcase">
      <div class="slide-container active">
        <div class="slide-content">
          <span class="slide-subtitle">
            ACCESS REAL-TIME INSIGHTS ON EMERGENCIES, CONDITIONS, AND MORE â€” ALL
            IN ONE PLATFORM.
          </span>
          <h1 class="slide-title">
            <span class="products-title-line">electronic Government</span>
            <span class="products-title-line">Application System</span>
            <span class="products-title-line">
              (<span class="highlight">eGAPS</span>)
            </span>
          </h1>
        </div>
      </div>
    </section>

    <!-- Products Section Start -->
    <section class="products-section">
      <span class="products-section-tag">OUR SYSTEMS</span>
      <h2 class="products-section-title">
        <span class="highlight">Products</span> & Services
      </h2>
      <p class="products-section-desc">
        Discover how our innovative technology solutions are transforming
        communities and empowering businesses across the Philippines.
      </p>

      <div class="products-cards-grid">
        <div class="products-card">
          <div class="products-card-thumb">
            <img src="images/calamba-web.png" alt="" />
            <span class="products-card-category">RPTAS</span>
          </div>
          <div class="products-card-body">
            <h3 class="products-card-title">
              Real Property Tax Assessment System
            </h3>
            <p class="products-card-text">
              <span>Property valuation</span>
              <span>Tax assessment</span>
              <span>Property records</span>
            </p>
          </div>
        </div>

        <div class="products-card">
          <div class="products-card-thumb">
            <img src="images/calamba-web.png" alt="" />
            <span class="products-card-category">RPTMBS</span>
          </div>
          <div class="products-card-body">
            <h3 class="products-card-title">
              Real Property Tax Management and Billing System
            </h3>
            <p class="products-card-text">
              <span>Tax billing</span>
              <span>Account management</span>
              <span>Payment tracking</span>
            </p>
          </div>
        </div>

        <div class="products-card">
          <div class="products-card-thumb">
            <img src="images/calamba-web.png" alt="" />
            <span class="products-card-category">BPLS</span>
          </div>
          <div class="products-card-body">
            <h3 class="products-card-title">
              Business Permit &amp; License System
            </h3>
            <p class="products-card-text">
              <span>Business permits</span>
              <span>License renewals</span>
              <span>Compliance approvals</span>
            </p>
          </div>
        </div>

        <div class="products-card">
          <div class="products-card-thumb">
            <img src="images/calamba-web.png" alt="" />
            <span class="products-card-category">BPS</span>
          </div>
          <div class="products-card-body">
            <h3 class="products-card-title">Building Permit System</h3>
            <p class="products-card-text">
              <span>Building applications</span>
              <span>Inspections</span>
              <span>Permit issuance</span>
            </p>
          </div>
        </div>

        <div class="products-card">
          <div class="products-card-thumb">
            <img src="images/calamba-web.png" alt="" />
            <span class="products-card-category">POPS</span>
          </div>
          <div class="products-card-body">
            <h3 class="products-card-title">Point of Payment System</h3>
            <p class="products-card-text">
              <span>Tax payments</span>
              <span>Government fees</span>
              <span>Payment receipts</span>
            </p>
          </div>
        </div>

        <div class="products-card hidden-card">
          <div class="products-card-thumb">
            <img src="images/calamba-web.png" alt="" />
            <span class="products-card-category">CCS</span>
          </div>
          <div class="products-card-body">
            <h3 class="products-card-title">Cash Collection System</h3>
            <p class="products-card-text">
              <span>Cash collections</span>
              <span>Receipts</span>
              <span>Reconciliation</span>
            </p>
          </div>
        </div>

        <div class="products-card hidden-card">
          <div class="products-card-thumb">
            <img src="images/calamba-web.png" alt="" />
            <span class="products-card-category">CDS</span>
          </div>
          <div class="products-card-body">
            <h3 class="products-card-title">Cash Disbursement System</h3>
            <p class="products-card-text">
              <span>Disbursements</span>
              <span>Authorized payments</span>
              <span>Audit records</span>
            </p>
          </div>
        </div>

        <div class="products-card hidden-card">
          <div class="products-card-thumb">
            <img src="images/calamba-web.png" alt="" />
            <span class="products-card-category">BMS</span>
          </div>
          <div class="products-card-body">
            <h3 class="products-card-title">Budget Monitoring System</h3>
            <p class="products-card-text">
              <span>Budget allocations</span>
              <span>Expenditures</span>
              <span>Balance monitoring</span>
            </p>
          </div>
        </div>

        <div class="products-card hidden-card">
          <div class="products-card-thumb">
            <img src="images/calamba-web.png" alt="" />
            <span class="products-card-category">NGAS</span>
          </div>
          <div class="products-card-body">
            <h3 class="products-card-title">
              New Government Accounting System
            </h3>
            <p class="products-card-text">
              <span>Government accounting</span>
              <span>Financial transactions</span>
              <span>Reports</span>
            </p>
          </div>
        </div>

        <div class="products-card hidden-card">
          <div class="products-card-thumb">
            <img src="images/calamba-web.png" alt="" />
            <span class="products-card-category">PMIS</span>
          </div>
          <div class="products-card-body">
            <h3 class="products-card-title">
              Personnel Management and Information System
            </h3>
            <p class="products-card-text">
              <span>Employee records</span>
              <span>Position management</span>
              <span>Personnel data</span>
            </p>
          </div>
        </div>

        <div class="products-card hidden-card">
          <div class="products-card-thumb">
            <img src="images/calamba-web.png" alt="" />
            <span class="products-card-category">ALMS</span>
          </div>
          <div class="products-card-body">
            <h3 class="products-card-title">
              Attendance and Leave Monitoring System
            </h3>
            <p class="products-card-text">
              <span>Attendance tracking</span>
              <span>Leave management</span>
              <span>Approvals</span>
            </p>
          </div>
        </div>

        <div class="products-card hidden-card">
          <div class="products-card-thumb">
            <img src="images/calamba-web.png" alt="" />
            <span class="products-card-category">GPS</span>
          </div>
          <div class="products-card-body">
            <h3 class="products-card-title">Government Payroll System</h3>
            <p class="products-card-text">
              <span>Payroll calculation</span>
              <span>Compensation</span>
              <span>Payment records</span>
            </p>
          </div>
        </div>

        <div class="products-card hidden-card">
          <div class="products-card-thumb">
            <img src="images/calamba-web.png" alt="" />
            <span class="products-card-category">ORPTBPS</span>
          </div>
          <div class="products-card-body">
            <h3 class="products-card-title">
              Online Real Property Tax Billing and Payment System
            </h3>
            <p class="products-card-text">
              <span>Online tax bills</span>
              <span>Property payments</span>
              <span>Digital services</span>
            </p>
          </div>
        </div>

        <div class="products-card hidden-card">
          <div class="products-card-thumb">
            <img src="images/calamba-web.png" alt="" />
            <span class="products-card-category">PASPAS PERMIT</span>
          </div>
          <div class="products-card-body">
            <h3 class="products-card-title">
              Online Assessment and Payment for Business Permit System (PASPAS
              PERMIT)
            </h3>
            <p class="products-card-text">
              <span>Business permit assessment</span>
              <span>Online applications</span>
              <span>Digital payments</span>
            </p>
          </div>
        </div>

        <div class="products-card hidden-card">
          <div class="products-card-thumb">
            <img src="images/calamba-web.png" alt="" />
            <span class="products-card-category">OBPAPS</span>
          </div>
          <div class="products-card-body">
            <h3 class="products-card-title">
              Online Building Permit, Application and Payment System
            </h3>
            <p class="products-card-text">
              <span>Building permit applications</span>
              <span>Fee assessment</span>
              <span>Online payments</span>
            </p>
          </div>
        </div>

        <div class="products-card hidden-card">
          <div class="products-card-thumb">
            <img src="images/calamba-web.png" alt="" />
            <span class="products-card-category">HMIS</span>
          </div>
          <div class="products-card-body">
            <h3 class="products-card-title">
              Hospital Management &amp; Information System
            </h3>
            <p class="products-card-text">
              <span>Hospital operations</span>
              <span>Patient services</span>
              <span>Medical records</span>
            </p>
          </div>
        </div>

        <div class="products-card hidden-card">
          <div class="products-card-thumb">
            <img src="images/calamba-web.png" alt="" />
            <span class="products-card-category">PPMS</span>
          </div>
          <div class="products-card-body">
            <h3 class="products-card-title">
              Procurement and Property Management System
            </h3>
            <p class="products-card-text">
              <span>Procurement</span>
              <span>Inventory</span>
              <span>Asset management</span>
            </p>
          </div>
        </div>

        <div class="products-card hidden-card">
          <div class="products-card-thumb">
            <img src="images/calamba-web.png" alt="" />
            <span class="products-card-category">OBRCICS</span>
          </div>
          <div class="products-card-body">
            <h3 class="products-card-title">
              Online Barangay Residence Certificate Issuance and Collection
              System
            </h3>
            <p class="products-card-text">
              <span>Barangay certificates</span>
              <span>Online requests</span>
              <span>Issuance tracking</span>
            </p>
          </div>
        </div>

        <div class="products-card hidden-card">
          <div class="products-card-thumb">
            <img src="images/calamba-web.png" alt="" />
            <span class="products-card-category">OCR-CTCC</span>
          </div>
          <div class="products-card-body">
            <h3 class="products-card-title">
              Online Civil Registry (Certified True Copy of Certification)
            </h3>
            <p class="products-card-text">
              <span>Civil registry</span>
              <span>Certified copies</span>
              <span>Online requests</span>
            </p>
          </div>
        </div>

        <div class="products-card hidden-card">
          <div class="products-card-thumb">
            <img src="images/calamba-web.png" alt="" />
            <span class="products-card-category">OAS-ETOP</span>
          </div>
          <div class="products-card-body">
            <h3 class="products-card-title">
              Online Assessor's Office Services - Electronic Tax Order of
              Payment
            </h3>
            <p class="products-card-text">
              <span>Tax orders</span>
              <span>Assessor services</span>
              <span>Electronic payments</span>
            </p>
          </div>
        </div>
        <div class="products-card hidden-card">
          <div class="products-card-thumb">
            <img src="images/calamba-web.png" alt="" />
            <span class="products-card-category">BPASS</span>
          </div>
          <div class="products-card-body">
            <h3 class="products-card-title">
              Building Permit Application Submission System (BPASS) - Kiosk
            </h3>
            <p class="products-card-text">
              <span>Building permit applications</span>
              <span>Kiosk submission</span>
              <span>Supporting documents</span>
            </p>
          </div>
        </div>

        <div class="products-card hidden-card">
          <div class="products-card-thumb">
            <img src="images/calamba-web.png" alt="" />
            <span class="products-card-category">PECWS</span>
          </div>
          <div class="products-card-body">
            <h3 class="products-card-title">
              PhilHealth E-Claims Web Service (PECWS)
            </h3>
            <p class="products-card-text">
              <span>PhilHealth claims</span>
              <span>Electronic submissions</span>
              <span>Web service</span>
            </p>
          </div>
        </div>

        <div class="products-card hidden-card">
          <div class="products-card-thumb">
            <img src="images/calamba-web.png" alt="" />
            <span class="products-card-category">MCS-RCS</span>
          </div>
          <div class="products-card-body">
            <h3 class="products-card-title">
              Miscellaneous Collection System &amp; Residence Certificate System
            </h3>
            <p class="products-card-text">
              <span>Miscellaneous payments</span>
              <span>Residence certificates</span>
              <span>Collections</span>
            </p>
          </div>
        </div>

        <div class="products-card hidden-card">
          <div class="products-card-thumb">
            <img src="images/calamba-web.png" alt="" />
            <span class="products-card-category">TFDS</span>
          </div>
          <div class="products-card-body">
            <h3 class="products-card-title">Task Force Disiplina System</h3>
            <p class="products-card-text">
              <span>Discipline monitoring</span>
              <span>Incident reports</span>
              <span>Task force operations</span>
            </p>
          </div>
        </div>

        <div class="products-card hidden-card">
          <div class="products-card-thumb">
            <img src="images/calamba-web.png" alt="" />
            <span class="products-card-category">SAMS</span>
          </div>
          <div class="products-card-body">
            <h3 class="products-card-title">
              School Administration and Management System
            </h3>
            <p class="products-card-text">
              <span>School administration</span>
              <span>Education management</span>
              <span>Daily operations</span>
            </p>
          </div>
        </div>
      </div>

      <div class="products-show-more-btn-wrapper">
        <button
          type="button"
          class="products-btn-show-more"
          id="showMoreNewsBtn"
        >
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
    </section>
    <!-- Products Section End -->

    <dialog
      id="cardDetailModal"
      class="modal card-detail-modal"
      aria-labelledby="cardDetailModalTitle"
    >
      <div class="card-detail-modal-box">
        <button
          type="button"
          class="modal-close"
          aria-label="Close product details"
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
          <p class="products-modal-description"></p>
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
