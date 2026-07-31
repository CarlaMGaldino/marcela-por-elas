(function () {
  "use strict";

  var config = window.SITE_CONFIG || {};
  var header = document.querySelector(".header");
  var nav = document.querySelector(".nav");
  var navToggle = document.querySelector(".nav__toggle");
  var navLinks = document.querySelectorAll(".nav__link");
  var ctaDefine = document.querySelectorAll("[data-cta='define']");
  var ctaCuradoria = document.querySelectorAll("[data-cta='curadoria']");

  function applyCtaUrls() {
    ctaDefine.forEach(function (el) {
      el.href = config.ctaDefineUrl || "#";
    });
    ctaCuradoria.forEach(function (el) {
      el.href = config.ctaCuradoriaUrl || "#";
    });
  }

  function applyHeroBanner() {
    var heroBanner = document.getElementById("hero-banner");
    if (heroBanner && config.heroBannerImage) {
      heroBanner.src = config.heroBannerImage;
    }
  }

  function closeMobileNav() {
    if (!nav || !navToggle) return;
    nav.classList.remove("is-open");
    navToggle.setAttribute("aria-expanded", "false");
    document.body.style.overflow = "";
    if (header) {
      header.classList.remove("menu-is-open");
    }
  }

  function toggleMobileNav() {
    if (!nav || !navToggle) return;
    var isOpen = nav.classList.toggle("is-open");
    navToggle.setAttribute("aria-expanded", String(isOpen));
    document.body.style.overflow = isOpen ? "hidden" : "";
    if (header) {
      header.classList.toggle("menu-is-open", isOpen);
    }
  }

  function handleScroll() {
    if (!header) return;
    header.classList.toggle("is-scrolled", window.scrollY > 20);
    updateActiveNavLink();
  }

  function updateActiveNavLink() {
    var sections = document.querySelectorAll("main section[id]");
    var scrollPos = window.scrollY + header.offsetHeight + 80;

    sections.forEach(function (section) {
      var top = section.offsetTop;
      var height = section.offsetHeight;
      var id = section.getAttribute("id");

      if (scrollPos >= top && scrollPos < top + height) {
        navLinks.forEach(function (link) {
          link.classList.toggle("is-active", link.getAttribute("href") === "#" + id);
        });
      }
    });
  }

  function initSmoothScroll() {
    var anchorLinks = document.querySelectorAll(
      '.nav__link, .hero__actions a[href^="#"], .metodo__cta[href^="#"], .service-card__link[href^="#"], .footer__nav a[href^="#"]'
    );

    anchorLinks.forEach(function (link) {
      link.addEventListener("click", function (e) {
        var href = link.getAttribute("href");
        if (!href || href.charAt(0) !== "#") return;

        var target = document.querySelector(href);
        if (!target) return;

        e.preventDefault();
        closeMobileNav();

        var offset = header ? header.offsetHeight : 0;
        var top = target.getBoundingClientRect().top + window.scrollY - offset;

        window.scrollTo({ top: top, behavior: "smooth" });
        history.pushState(null, "", href);
      });
    });
  }

  function initReveal() {
    if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
      document.querySelectorAll(".reveal").forEach(function (el) {
        el.classList.add("is-visible");
      });
      return;
    }

    var observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add("is-visible");
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.12, rootMargin: "0px 0px -40px 0px" }
    );

    document.querySelectorAll(".reveal").forEach(function (el) {
      observer.observe(el);
    });
  }

  function initLazyVideos() {
    document.querySelectorAll("video[data-lazy]").forEach(function (video) {
      var observer = new IntersectionObserver(
        function (entries) {
          entries.forEach(function (entry) {
            if (!entry.isIntersecting) return;

            var sources = video.querySelectorAll("source[data-src]");
            sources.forEach(function (source) {
              source.src = source.getAttribute("data-src");
              source.removeAttribute("data-src");
            });

            video.load();
            video.removeAttribute("data-lazy");
            observer.unobserve(video);
          });
        },
        { rootMargin: "200px" }
      );

      observer.observe(video);
    });
  }

  if (navToggle) {
    navToggle.addEventListener("click", toggleMobileNav);
  }

  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") closeMobileNav();
  });

  window.addEventListener("scroll", handleScroll, { passive: true });
  window.addEventListener("resize", closeMobileNav);

  function initFaq() {
    var faqItems = document.querySelectorAll(".faq-item");
    faqItems.forEach(function (item) {
      var trigger = item.querySelector(".faq-trigger");
      if (!trigger) return;
      trigger.addEventListener("click", function () {
        var isOpen = item.classList.contains("is-open");
        faqItems.forEach(function (otherItem) {
          otherItem.classList.remove("is-open");
          var otherTrigger = otherItem.querySelector(".faq-trigger");
          if (otherTrigger) otherTrigger.setAttribute("aria-expanded", "false");
        });
        if (!isOpen) {
          item.classList.add("is-open");
          trigger.setAttribute("aria-expanded", "true");
        }
      });
    });
  }

  function initServicesCarousel() {
    document.querySelectorAll(".services-more-section").forEach(function (section) {
      initServicesCarouselSection(section);
    });
  }

  function initServicesCarouselSection(section) {
    var container = section.querySelector(".services-carousel-container");
    var track = section.querySelector(".services-carousel-track");
    var slides = section.querySelectorAll(".services-carousel-slide");
    var btnPrev = section.querySelector(".carousel-btn--prev");
    var btnNext = section.querySelector(".carousel-btn--next");
    if (!container || !track || !slides.length || !btnPrev || !btnNext) return;

    var currentIndex = 0;

    function getSlidesPerPage() {
      if (window.innerWidth >= 1200) {
        return 2.5; /* Deixa o terceiro slide parcialmente visível cortando na borda direita, como na referência */
      } else if (window.innerWidth >= 992) {
        return 2;
      } else if (window.innerWidth >= 576) {
        return 1.5; /* Corta sutilmente no mobile horizontal/tablet */
      } else {
        return 1;
      }
    }

    function getMaxIndex() {
      var slidesPerPage = getSlidesPerPage();
      return Math.max(0, slides.length - slidesPerPage);
    }

    function updateCarousel() {
      var slidesPerPage = getSlidesPerPage();
      var slideWidth = slides[0].getBoundingClientRect().width;
      
      // Encontra o gap computado
      var style = window.getComputedStyle(track);
      var gap = parseFloat(style.columnGap || style.gap) || 32;
      
      var maxIdx = getMaxIndex();
      if (currentIndex > maxIdx) {
        currentIndex = maxIdx;
      }
      
      var offset = currentIndex * (slideWidth + gap);
      track.style.transform = "translateX(-" + offset + "px)";

      // Ativa ou desativa os botões baseado nos limites
      btnPrev.style.opacity = currentIndex === 0 ? "0.3" : "1";
      btnPrev.style.pointerEvents = currentIndex === 0 ? "none" : "auto";
      
      btnNext.style.opacity = currentIndex === maxIdx ? "0.3" : "1";
      btnNext.style.pointerEvents = currentIndex === maxIdx ? "none" : "auto";
    }

    btnPrev.addEventListener("click", function (e) {
      e.preventDefault();
      if (currentIndex > 0) {
        currentIndex--;
        updateCarousel();
      }
    });

    btnNext.addEventListener("click", function (e) {
      e.preventDefault();
      if (currentIndex < getMaxIndex()) {
        currentIndex++;
        updateCarousel();
      }
    });

    // Eventos de toque para mobile (swipe)
    var startX = 0;
    var currentX = 0;
    var isSwiping = false;

    container.addEventListener("touchstart", function (e) {
      startX = e.touches[0].clientX;
      isSwiping = true;
    }, { passive: true });

    container.addEventListener("touchmove", function (e) {
      if (!isSwiping) return;
      currentX = e.touches[0].clientX;
    }, { passive: true });

    container.addEventListener("touchend", function () {
      if (!isSwiping) return;
      isSwiping = false;
      var diffX = startX - currentX;
      if (Math.abs(diffX) > 50) { // limite mínimo para swipe de 50px
        if (diffX > 0 && currentIndex < getMaxIndex()) {
          currentIndex++;
        } else if (diffX < 0 && currentIndex > 0) {
          currentIndex--;
        }
        updateCarousel();
      }
    });

    window.addEventListener("resize", function () {
      updateCarousel();
    });

    // Inicialização
    updateCarousel();
  }

  applyCtaUrls();
  applyHeroBanner();
  initSmoothScroll();
  initReveal();
  initLazyVideos();
  initFaq();
  initServicesCarousel();
  handleScroll();
})();
