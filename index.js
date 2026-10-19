document.addEventListener("DOMContentLoaded", () => {
  const newsManagerDialog = document.getElementById("newsManagerDialog");
  const openNewsManager = document.getElementById("openNewsManager");
  const closeNewsManager = document.getElementById("closeNewsManager");
  const cancelNewsManager = document.getElementById("cancelNewsManager");
  const newsThumbnailInput = document.getElementById("newsThumbnailInput");
  const newsThumbnailPreview = document.getElementById("newsThumbnailPreview");
  const newsThumbnailPreviewImage = document.getElementById(
    "newsThumbnailPreviewImage",
  );
  const newsThumbnailPreviewName = document.getElementById(
    "newsThumbnailPreviewName",
  );
  const newsForm = document.querySelector(".news-admin-form");
  const newsFormAction = document.getElementById("newsFormAction");
  const newsCardId = document.getElementById("newsCardId");
  const newsFormTitle = document.getElementById("newsManagerTitle");
  const submitNewsCard = document.getElementById("submitNewsCard");
  const editNewsCardButton = document.getElementById("editNewsCard");
  const newsSummaryInput = document.getElementById("newsSummaryInput");
  let newsThumbnailPreviewUrl = null;
  let activeNewsCard = null;

  const clearNewsThumbnailPreview = () => {
    if (newsThumbnailPreviewUrl) {
      URL.revokeObjectURL(newsThumbnailPreviewUrl);
      newsThumbnailPreviewUrl = null;
    }
    if (newsThumbnailPreview instanceof HTMLElement) {
      newsThumbnailPreview.hidden = true;
    }
    if (newsThumbnailPreviewImage instanceof HTMLImageElement) {
      newsThumbnailPreviewImage.removeAttribute("src");
    }
    if (newsThumbnailPreviewName instanceof HTMLElement) {
      newsThumbnailPreviewName.textContent = "";
    }
  };

  if (newsSummaryInput instanceof HTMLTextAreaElement) {
    const validateSummaryWordLimit = () => {
      const words =
        newsSummaryInput.value.match(
          /[\p{L}\p{N}]+(?:[’'-][\p{L}\p{N}]+)*/gu,
        ) || [];
      newsSummaryInput.setCustomValidity(
        words.length > 500
          ? "The short description must be 500 words or fewer."
          : "",
      );
    };

    newsSummaryInput.addEventListener("input", validateSummaryWordLimit);
    validateSummaryWordLimit();
  }

  if (
    newsManagerDialog instanceof HTMLDialogElement &&
    openNewsManager instanceof HTMLButtonElement &&
    closeNewsManager instanceof HTMLButtonElement &&
    cancelNewsManager instanceof HTMLButtonElement
  ) {
    openNewsManager.addEventListener("click", () => {
      if (
        newsForm instanceof HTMLFormElement &&
        newsFormAction instanceof HTMLInputElement &&
        newsCardId instanceof HTMLInputElement &&
        newsFormTitle instanceof HTMLElement &&
        submitNewsCard instanceof HTMLButtonElement &&
        newsThumbnailInput instanceof HTMLInputElement
      ) {
        newsForm.reset();
        newsFormAction.value = "create";
        newsCardId.value = "";
        newsFormTitle.textContent = "Add a News Card";
        submitNewsCard.textContent = "Add News Card";
        newsThumbnailInput.required = true;
        clearNewsThumbnailPreview();
      }
      newsManagerDialog.showModal();
    });

    [closeNewsManager, cancelNewsManager].forEach((button) => {
      button.addEventListener("click", () => newsManagerDialog.close());
    });

    newsManagerDialog.addEventListener("click", (event) => {
      if (event.target === newsManagerDialog) {
        newsManagerDialog.close();
      }
    });

    if (
      editNewsCardButton instanceof HTMLButtonElement &&
      newsForm instanceof HTMLFormElement &&
      newsFormAction instanceof HTMLInputElement &&
      newsCardId instanceof HTMLInputElement &&
      newsFormTitle instanceof HTMLElement &&
      submitNewsCard instanceof HTMLButtonElement &&
      newsThumbnailInput instanceof HTMLInputElement
    ) {
      editNewsCardButton.addEventListener("click", () => {
        if (!(activeNewsCard instanceof HTMLElement)) {
          return;
        }

        const cardFields = {
          title: newsForm.querySelector('[name="title"]'),
          location: newsForm.querySelector('[name="location"]'),
          publishedOn: newsForm.querySelector('[name="published_on"]'),
          summary: newsForm.querySelector('[name="summary"]'),
        };
        if (
          !(cardFields.title instanceof HTMLInputElement) ||
          !(cardFields.location instanceof HTMLInputElement) ||
          !(cardFields.publishedOn instanceof HTMLInputElement) ||
          !(cardFields.summary instanceof HTMLTextAreaElement)
        ) {
          return;
        }

        newsForm.reset();
        newsFormAction.value = "update";
        newsCardId.value = activeNewsCard.dataset.newsCardId ?? "";
        cardFields.title.value = activeNewsCard.dataset.newsTitle ?? "";
        cardFields.location.value = activeNewsCard.dataset.newsLocation ?? "";
        cardFields.publishedOn.value =
          activeNewsCard.dataset.newsPublishedOn ?? "";
        cardFields.summary.value = activeNewsCard.dataset.newsSummary ?? "";
        newsFormTitle.textContent = "Edit News Card";
        submitNewsCard.textContent = "Save Changes";
        newsThumbnailInput.required = false;
        newsThumbnailInput.value = "";

        clearNewsThumbnailPreview();
        if (
          newsThumbnailPreview instanceof HTMLElement &&
          newsThumbnailPreviewImage instanceof HTMLImageElement &&
          newsThumbnailPreviewName instanceof HTMLElement
        ) {
          newsThumbnailPreviewImage.src =
            activeNewsCard.dataset.newsThumbnail ?? "";
          newsThumbnailPreviewName.textContent = "Current thumbnail";
          newsThumbnailPreview.hidden = false;
        }

        if (cardDetailModal instanceof HTMLDialogElement) {
          cardDetailModal.close();
        }
        newsManagerDialog.showModal();
      });
    }

    if (newsManagerDialog.dataset.openOnLoad === "true") {
      newsManagerDialog.showModal();
    }
  }

  if (
    newsThumbnailInput instanceof HTMLInputElement &&
    newsThumbnailPreview instanceof HTMLElement &&
    newsThumbnailPreviewImage instanceof HTMLImageElement &&
    newsThumbnailPreviewName instanceof HTMLElement
  ) {
    newsThumbnailInput.addEventListener("change", () => {
      const selectedFile = newsThumbnailInput.files?.[0];
      if (!selectedFile || !selectedFile.type.startsWith("image/")) {
        clearNewsThumbnailPreview();
        return;
      }

      if (newsThumbnailPreviewUrl) {
        URL.revokeObjectURL(newsThumbnailPreviewUrl);
      }
      newsThumbnailPreviewUrl = URL.createObjectURL(selectedFile);
      newsThumbnailPreviewImage.src = newsThumbnailPreviewUrl;
      newsThumbnailPreviewName.textContent = selectedFile.name;
      newsThumbnailPreview.hidden = false;
    });
  }

  // Nav Bar Start
  const menuToggle = document.getElementById("menuToggle");
  const navLinks = document.querySelector(".navbar .nav-links");
  const signOutDialog = document.getElementById("signOutDialog");
  const cancelSignOut = document.getElementById("cancelSignOut");
  const confirmSignOut = document.getElementById("confirmSignOut");
  let signOutHref = null;

  if (menuToggle && navLinks) {
    menuToggle.addEventListener("click", () => {
      menuToggle.classList.toggle("active");
      navLinks.classList.toggle("active");
      menuToggle.setAttribute(
        "aria-expanded",
        String(menuToggle.classList.contains("active")),
      );
    });

    navLinks.querySelectorAll("a").forEach((link) => {
      link.addEventListener("click", (event) => {
        if (
          link.classList.contains("logout-link") &&
          signOutDialog instanceof HTMLDialogElement &&
          cancelSignOut instanceof HTMLButtonElement &&
          confirmSignOut instanceof HTMLButtonElement
        ) {
          event.preventDefault();
          signOutHref = link.href;
          menuToggle.classList.remove("active");
          navLinks.classList.remove("active");
          menuToggle.setAttribute("aria-expanded", "false");
          signOutDialog.showModal();
          return;
        }

        menuToggle.classList.remove("active");
        navLinks.classList.remove("active");
        menuToggle.setAttribute("aria-expanded", "false");
      });
    });
  }

  if (
    signOutDialog instanceof HTMLDialogElement &&
    cancelSignOut instanceof HTMLButtonElement &&
    confirmSignOut instanceof HTMLButtonElement
  ) {
    cancelSignOut.addEventListener("click", () => {
      signOutHref = null;
      signOutDialog.close();
    });

    confirmSignOut.addEventListener("click", () => {
      if (signOutHref) {
        window.location.assign(signOutHref);
      }
    });

    signOutDialog.addEventListener("click", (event) => {
      if (event.target === signOutDialog) {
        signOutHref = null;
        signOutDialog.close();
      }
    });

    signOutDialog.addEventListener("close", () => {
      signOutHref = null;
    });
  }
  // Nav Bar End

  const modalCards = document.querySelectorAll(
    ".solutions-card, .news-card, .products-card",
  );
  const cardDetailModal = document.getElementById("cardDetailModal");
  const cardDetailModalImage = cardDetailModal?.querySelector(
    ".card-detail-modal-image img",
  );
  const cardDetailModalDate = cardDetailModal?.querySelector(
    ".card-detail-modal-content .card-detail-modal-date",
  );
  const cardDetailModalTitle = document.getElementById("cardDetailModalTitle");
  const cardDetailModalSubtitle = cardDetailModal?.querySelector(
    ".card-detail-modal-subtitle",
  );
  const cardDetailModalText = cardDetailModal?.querySelector(
    ".card-detail-modal-content > p:not(.products-modal-description)",
  );
  const cardDetailProductDescription = cardDetailModal?.querySelector(
    ".products-modal-description",
  );

  if (
    cardDetailModal instanceof HTMLDialogElement &&
    cardDetailModalImage instanceof HTMLImageElement &&
    cardDetailModalDate instanceof HTMLElement &&
    cardDetailModalTitle instanceof HTMLElement &&
    cardDetailModalSubtitle instanceof HTMLElement &&
    cardDetailModalText instanceof HTMLParagraphElement
  ) {
    const closeButton = cardDetailModal.querySelector(".modal-close");
    let activeCard = null;

    const closeCardDetailModal = () => {
      if (cardDetailModal.open) {
        cardDetailModal.close();
      }
    };

    modalCards.forEach((card) => {
      card.setAttribute("role", "button");
      card.setAttribute("tabindex", "0");
      card.setAttribute("aria-haspopup", "dialog");
      card.setAttribute("aria-controls", "cardDetailModal");
      card.setAttribute("aria-expanded", "false");

      const openCardDetailModal = () => {
        const image = card.querySelector(
          ".solutions-card-thumb img, .news-card-thumb img, .products-card-thumb img",
        );
        const date = card.querySelector(
          ".solutions-card-date, .news-card-date, .products-card-category",
        );
        const title = card.querySelector(
          ".solutions-card-title, .news-card-title, .products-card-title",
        );
        const subtitle = card.querySelector(".solutions-card-subtitle");
        const text = card.querySelector(
          ".solutions-card-text, .news-card-text, .products-card-text",
        );

        if (
          !(image instanceof HTMLImageElement) ||
          !(date instanceof HTMLElement) ||
          !(title instanceof HTMLElement) ||
          !(text instanceof HTMLParagraphElement)
        ) {
          return;
        }

        cardDetailModalImage.src = image.getAttribute("src") ?? "";
        cardDetailModalImage.alt = image.alt || title.textContent.trim();
        cardDetailModalDate.textContent = date.textContent;
        cardDetailModalTitle.textContent = title.textContent;
        cardDetailModalSubtitle.textContent =
          subtitle instanceof HTMLElement ? subtitle.textContent.trim() : "";
        cardDetailModalText.replaceChildren();
        if (card.classList.contains("products-card")) {
          cardDetailModalText.classList.add("products-modal-features");
          const features = Array.from(text.querySelectorAll("span")).map(
            (feature) => feature.textContent.trim(),
          );
          features.forEach((feature) => {
            const featureBadge = document.createElement("span");
            featureBadge.textContent = feature;
            cardDetailModalText.append(featureBadge);
          });
          if (cardDetailProductDescription instanceof HTMLParagraphElement) {
            const featureSummary =
              features.length > 1
                ? `${features.slice(0, -1).join(", ")}, and ${features.at(-1)}`
                : features[0] ?? "";
            cardDetailProductDescription.textContent = featureSummary
              ? `Features include ${featureSummary}.`
              : "";
          }
        } else {
          cardDetailModalText.classList.remove("products-modal-features");
          cardDetailModalText.textContent = text.textContent.trim();
          if (cardDetailProductDescription instanceof HTMLParagraphElement) {
            cardDetailProductDescription.textContent = "";
          }
        }

        modalCards.forEach((modalCard) => {
          modalCard.setAttribute("aria-expanded", "false");
        });
        card.setAttribute("aria-expanded", "true");
        activeCard = card;
        activeNewsCard = card;
        if (editNewsCardButton instanceof HTMLButtonElement) {
          editNewsCardButton.hidden = !card.dataset.newsCardId;
        }
        cardDetailModal.showModal();
      };

      card.addEventListener("click", openCardDetailModal);
      card.addEventListener("keydown", (event) => {
        if (event.key === "Enter" || event.key === " ") {
          event.preventDefault();
          openCardDetailModal();
        }
      });
    });

    if (closeButton instanceof HTMLButtonElement) {
      closeButton.addEventListener("click", closeCardDetailModal);
    }

    cardDetailModal.addEventListener("click", (event) => {
      if (event.target === cardDetailModal) {
        closeCardDetailModal();
      }
    });

    cardDetailModal.addEventListener("cancel", (event) => {
      event.preventDefault();
      closeCardDetailModal();
    });

    cardDetailModal.addEventListener("close", () => {
      modalCards.forEach((card) => {
        card.setAttribute("aria-expanded", "false");
      });
      activeCard?.focus();
      activeCard = null;
    });
  }

  const backToTop = document.querySelector(".back-to-top");
  const pageSections = document.querySelectorAll("body > section");
  const revealSection = pageSections[Math.min(2, pageSections.length - 1)];

  if (backToTop) {
    backToTop.addEventListener("click", () => {
      const startPosition = window.scrollY;
      const duration = 500;
      const startTime = performance.now();

      const scrollStep = (currentTime) => {
        const elapsed = Math.min((currentTime - startTime) / duration, 1);
        const easedProgress = 1 - (1 - elapsed) ** 3;
        window.scrollTo(0, startPosition * (1 - easedProgress));

        if (elapsed < 1) {
          window.requestAnimationFrame(scrollStep);
        }
      };

      window.requestAnimationFrame(scrollStep);
    });
  }

  if (backToTop && revealSection) {
    const updateBackToTopVisibility = () => {
      const sectionRect = revealSection.getBoundingClientRect();
      const sectionMidpoint = sectionRect.top + sectionRect.height / 2;
      backToTop.classList.toggle(
        "is-visible",
        sectionMidpoint <= window.innerHeight / 2,
      );
    };

    window.addEventListener("scroll", updateBackToTopVisibility, {
      passive: true,
    });
    window.addEventListener("resize", updateBackToTopVisibility);
    updateBackToTopVisibility();
  }

  // Showcase Slideshow Start

  const slides = document.querySelectorAll(".slide-container");
  const showcase = document.querySelector(".main-showcase");
  let currentIndex = 0;
  let slideTimer;

  if (slides.length > 1) {
    function showNextSlide() {
      slides[currentIndex].classList.remove("active");
      currentIndex = (currentIndex + 1) % slides.length;
      slides[currentIndex].classList.add("active");
    }

    function startAutoplay() {
      slideTimer = setInterval(showNextSlide, 5000);
    }

    function stopAutoplay() {
      clearInterval(slideTimer);
    }

    startAutoplay();
  }
  // Showcase Slideshow End

  const termsModal = document.getElementById("termsModal");
  const openTermsBtn = document.getElementById("openTermsLink");
  const closeTermsBtn = document.getElementById("closeTermsBtn");

  if (termsModal && openTermsBtn && closeTermsBtn) {
    openTermsBtn.addEventListener("click", (e) => {
      e.preventDefault();
      termsModal.showModal();
    });

    closeTermsBtn.addEventListener("click", () => {
      termsModal.close();
    });

    termsModal.addEventListener("click", (e) => {
      if (e.target === termsModal) {
        termsModal.close();
      }
    });
  }
  // ToS Modal End

  // Privacy Modal Start
  const privacyModal = document.getElementById("privacyModal");
  const openPrivacyBtn = document.getElementById("openPrivacyLink");
  const closePrivacyBtn = document.getElementById("closePrivacyBtn");

  if (privacyModal && openPrivacyBtn && closePrivacyBtn) {
    openPrivacyBtn.addEventListener("click", (e) => {
      e.preventDefault();
      privacyModal.showModal();
    });
    closePrivacyBtn.addEventListener("click", () => privacyModal.close());
    privacyModal.addEventListener("click", (e) => {
      if (e.target === privacyModal) privacyModal.close();
    });
  }
  // Privacy Modal End

  document
    .querySelectorAll(".partners-logos [data-partner-dialog]")
    .forEach((button) => {
      button.addEventListener("click", () => {
        const dialogId = button.dataset.partnerDialog;
        const partnerDialog = dialogId
          ? document.getElementById(dialogId)
          : null;

        if (partnerDialog instanceof HTMLDialogElement) {
          partnerDialog.showModal();
        }
      });
    });

  document.querySelectorAll(".partner-modal").forEach((partnerDialog) => {
    const closeButton = partnerDialog.querySelector(".modal-close");

    if (closeButton) {
      closeButton.addEventListener("click", () => partnerDialog.close());
    }

    partnerDialog.addEventListener("click", (e) => {
      if (e.target === partnerDialog) {
        partnerDialog.close();
      }
    });
  });
});

// Showcase Portfolio Slideshow Start

const slides = document.querySelectorAll(".portfolio-slide-container");
const showcase = document.querySelector(".portfolio-main-showcase");
let currentIndex = 0;
let slideTimer;

if (slides.length > 1) {
  function showNextSlide() {
    slides[currentIndex].classList.remove("active");
    currentIndex = (currentIndex + 1) % slides.length;
    slides[currentIndex].classList.add("active");
  }

  function startAutoplay() {
    slideTimer = setInterval(showNextSlide, 5000);
  }

  function stopAutoplay() {
    clearInterval(slideTimer);
  }

  startAutoplay();
}
// Showcase Portfolio Slideshow End

// News and Products Card Show/Hide Start
document.addEventListener("DOMContentLoaded", () => {
  const showMoreNewsBtn = document.getElementById("showMoreNewsBtn");
  const hiddenCards = document.querySelectorAll(
    ".news-card.hidden-card, .products-card.hidden-card",
  );
  const btnText = showMoreNewsBtn
    ? showMoreNewsBtn.querySelector(".btn-text")
    : null;
  const arrowPolyline = document.getElementById("arrowPolyline");

  // Coordinate Definitions
  const ARROW_DOWN = "6 9 12 15 18 9";
  const ARROW_UP = "18 15 12 9 6 15";

  let isNewsExpanded = false;

  if (showMoreNewsBtn && hiddenCards.length > 0) {
    showMoreNewsBtn.addEventListener("click", () => {
      isNewsExpanded = !isNewsExpanded;

      // 1. Show / Hide extra cards
      hiddenCards.forEach((card) => {
        card.style.display = isNewsExpanded ? "flex" : "none";
      });

      // 2. Toggle text
      if (btnText) {
        btnText.textContent = isNewsExpanded ? "Show Less" : "Show More";
      }

      // 3. Swap arrow direction via JS
      if (arrowPolyline) {
        arrowPolyline.setAttribute(
          "points",
          isNewsExpanded ? ARROW_UP : ARROW_DOWN,
        );
      }

      showMoreNewsBtn.classList.toggle("active", isNewsExpanded);
    });
  }
});
// News and Products Card Show/Hide End

document.addEventListener("DOMContentLoaded", () => {
  const showMoreWorkBtn = document.getElementById("showMoreWorkBtn");
  const hiddenCards = document.querySelectorAll(".solutions-card.hidden-card");
  const btnText = showMoreWorkBtn
    ? showMoreWorkBtn.querySelector(".btn-text")
    : null;
  const arrowPolyline = document.getElementById("arrowPolyline");

  // Coordinate Definitions
  const ARROW_DOWN = "6 9 12 15 18 9";
  const ARROW_UP = "18 15 12 9 6 15";

  let isWorkExpanded = false;

  if (showMoreWorkBtn && hiddenCards.length > 0) {
    showMoreWorkBtn.addEventListener("click", () => {
      isWorkExpanded = !isWorkExpanded;

      // 1. Show / Hide extra cards
      hiddenCards.forEach((card) => {
        card.style.display = isWorkExpanded ? "flex" : "none";
      });

      // 2. Toggle text
      if (btnText) {
        btnText.textContent = isWorkExpanded ? "Show Less" : "Show More";
      }

      // 3. Swap arrow direction via JS
      if (arrowPolyline) {
        arrowPolyline.setAttribute(
          "points",
          isWorkExpanded ? ARROW_UP : ARROW_DOWN,
        );
      }

      showMoreWorkBtn.classList.toggle("active", isWorkExpanded);
    });
  }
});
