<?php require_once __DIR__ . '/includes/session.php';
require_once __DIR__ . '/includes/SiteComponents.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Contact Us | LEXSYS TECHNOLOGIES, INC.</title>
  </head>
  <body id="top">
    <?php SiteComponents::renderNavbar('contact'); ?>

    <main>
      <section class="contact-hero" aria-labelledby="contact-page-title">
        <div class="contact-hero-inner">
          <div class="contact-intro">
            <h1 id="contact-page-title">Contact <span>Us</span></h1>
            <p>
              Email, call, or complete the form to learn how Lexsys can help
              bring your ideas to life.
            </p>
            <a href="mailto:hipolito.markjoseph@gmail.com"
              >hipolito.markjoseph@gmail.com</a
            >
            <a href="tel:0277565293">(02) 7756 5293</a>
            <a href="mailto:hipolito.markjoseph@gmail.com">Customer Support</a>

            <div class="contact-help-grid">
              <div>
                <h2>Customer Support</h2>
                <p>
                  Our team is available to help with product questions and
                  technical support.
                </p>
              </div>
              <div>
                <h2>Feedback and Suggestions</h2>
                <p>
                  Share your feedback and suggestions to help us improve our
                  services.
                </p>
              </div>
              <div>
                <h2>Media Inquiries</h2>
                <p>For media-related questions, contact us by email.</p>
              </div>
            </div>
          </div>

          <form class="contact-form" action="send-contact.php" method="POST">
            <h2>Get in Touch</h2>
            <p>You can reach us anytime</p>
            <div class="contact-form-name">
              <label>
                <span>First name</span>
                <input
                  type="text"
                  name="first_name"
                  autocomplete="given-name"
                  maxlength="100"
                  required
                />
              </label>
              <label>
                <span>Last name</span>
                <input
                  type="text"
                  name="last_name"
                  autocomplete="family-name"
                  maxlength="100"
                  required
                />
              </label>
            </div>
            <label>
              <span>Email</span>
              <input
                type="email"
                name="email"
                autocomplete="email"
                maxlength="254"
                required
              />
            </label>
            <label>
              <span>Phone number</span>
              <input
                type="tel"
                name="phone"
                autocomplete="tel"
                maxlength="40"
              />
            </label>
            <label>
              <span>How can we help?</span>
              <textarea
                name="message"
                rows="5"
                maxlength="5000"
                required
              ></textarea>
            </label>
            <div class="contact-form-honeypot" aria-hidden="true">
              <label>
                Leave this field empty
                <input name="website" tabindex="-1" autocomplete="off" />
              </label>
            </div>
            <button type="submit">Submit</button>
            <small>
              By contacting us, you agree to our <br />
              <a class="contact-terms-link" href="#openTermsLink"
                >Terms of Service</a
              >
              and
              <a class="contact-privacy-link" href="#openPrivacyLink"
                >Privacy Statement</a
              >.
            </small>
          </form>
        </div>
      </section>

      <section
        class="contact-location"
        aria-labelledby="contact-location-title"
      >
        <div class="contact-location-inner">
          <div class="contact-map">
            <iframe
              title="Map to Lexsys Technologies, Inc. office"
              src="https://maps.google.com/maps?q=Future%20Point%20Plaza%20III%2C%20111%20Panay%20Avenue%2C%20Quezon%20City&t=&z=15&ie=UTF8&iwloc=&output=embed"
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
          <div class="contact-location-copy">
            <span>Our Location</span>
            <h2 id="contact-location-title">Connecting Near and Far</h2>
            <h3>Headquarters</h3>
            <address>
              Unit 6-LM, 6th Floor, Future Point Plaza III,<br />
              111 Panay Avenue, South Triangle,<br />
              Quezon City 1103, Philippines
            </address>
            <a
              href="https://maps.google.com/?q=Future+Point+Plaza+III,+111+Panay+Avenue,+Quezon+City"
              target="_blank"
              rel="noopener noreferrer"
              >Open in Google Maps</a
            >
          </div>
        </div>
      </section>
    </main>

    <!-- Footer Start -->
    <?php SiteComponents::renderFooter('mailto:hipolito.markjoseph@gmail.com'); ?>
    <!-- Footer End -->
    <script src="index.js"></script>
  </body>
</html>
