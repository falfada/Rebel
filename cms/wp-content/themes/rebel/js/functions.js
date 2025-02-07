$(document).ready(function () {
  /**
   * Portfolio Animation.
   */
  gsap.registerPlugin(ScrollTrigger);

  document.querySelectorAll(".portfolio-item").forEach((item) => {
    const mask = item.querySelector(".mask");
    gsap.to(mask, {
      y: "-100%",
      duration: 1.5,
      ease: "power4.out",
      stagger: 0.2,
      scrollTrigger: {
        trigger: item,
        start: "top 90%",
        toggleActions: "play none none none",
      },
    });
  });
 document.querySelectorAll(".content").forEach((item) => {
  gsap.to(item, {
    duration: 1.5,
    y: 0,
    opacity: 1,
    ease: "power3.out",
    stagger: 0.3,
    scrollTrigger: {
      trigger: item,
      start: "top 90%",
      toggleActions: "play none none none",
    },
  });
 });
  /**
   * Form Input.
   */
  $("#fileInput").change(function () {
    let parentContainer = $(this).parent();
    let labelForFile = parentContainer.siblings("label");
    let textToDisplay = $("#fileInput")[0].files[0].name;
    let newParagraph = `<p class="fileName">${textToDisplay}</p>`;
    labelForFile.after(newParagraph);
  });

  /**
   * Lottie Animation.
   */

  $(window).on("load", function () {
    if ($("body.home").length) {

      const showPage = function() {
        document.getElementById("pageLoader").style.display = "none";
        document.getElementById("pageContent").style.display = "block";
      };
      let myVar = setTimeout(showPage, 3000);
    
    }
  });

  /**
   * Other Option Form.
   */

  $(".wpcf7-form-control-wrap select").on("change", function () {
    const triggerValue = $(this).val();
    const grandparentContainer = $(this).closest("p");
    if (triggerValue === "Other") {
      let otherOptionContainer = grandparentContainer
        .next()
        .css({ display: "block" });
    } else {
      let otherOptionContainer = grandparentContainer
        .next()
        .css({ display: "none" });
    }
  });

  /**
   * Form Stepper.
   */
  const steps = Array.from(document.querySelectorAll(".step"));
  const stepNumbers = Array.from(document.querySelectorAll(".step-number"));
  const nextButtons = Array.from(document.querySelectorAll(".next-button"));
  const prevButtons = Array.from(document.querySelectorAll(".prev-button"));

  let currentStep = 0;

  function updateProgress() {
    stepNumbers.forEach((number, index) => {
      if (index === currentStep) {
        number.classList.add("active");
      } else {
        number.classList.remove("active");
      }
    });
  }

  function showStep(step) {
    steps.forEach((s, index) => {
      if (index === step) {
        s.style.display = "block";
      } else {
        s.style.display = "none";
      }
    });
  }

  // Initially, show the first step
  showStep(currentStep);
  updateProgress();

  nextButtons.forEach((button, index) => {
    button.addEventListener("click", (e) => {
      e.preventDefault();
      currentStep++;
      if (currentStep >= steps.length) {
        currentStep = steps.length - 1;
      }
      showStep(currentStep);
      updateProgress();
    });
  });

  prevButtons.forEach((button, index) => {
    button.addEventListener("click", (e) => {
      e.preventDefault();
      currentStep--;
      if (currentStep < 0) {
        currentStep = 0;
      }
      showStep(currentStep);
      updateProgress();
    });
  });

  /**
   * Table slider mobile.
   */
  var tableMobile = new Swiper(".table.mobile.mySwiper", {});
  /**
   * Highlight Animation.
   */

  function startAnimation(entries, observer) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("animate");
        observer.unobserve(entry.target);
      }
    });
  }

  const markElements = document.querySelectorAll(".mark");

  markElements.forEach((markElement) => {
    const observer = new IntersectionObserver(startAnimation, {
      root: null,
      threshold: 0.5,
    });

    observer.observe(markElement);
  });

  /**
   * Clients Logos.
   */
  let swiperLogos = {
    loop: true,
    autoplay: {
      delay: 1,
      disableOnInteraction: false,
    },
    slidesPerView: "auto",
    speed: 6000,
    grabCursor: true,
    spaceBetween: 24,
    //mousewheelControl: true,
    //keyboardControl: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  };

  let swiperLogosSlider = new Swiper(
    ".clients-logos.swiper-container",
    swiperLogos
  );
  /**
   * Menu Burger.
   */
  $(".burger").click(function () {
    $(this).toggleClass("rotate");
    $(".mobile-menu").slideToggle();
  });

  /**
   * Clients Slider 1.
   */
  const splideContainers = document.querySelectorAll(".splide");

  splideContainers.forEach((container) => {
    if (container.classList.contains("videos")) {
      new Splide(container, {
        type: "loop",
        focus: "center",
        pagination: false,
        updateOnMove: true,
        autoWidth: true,
        start: 1,
      }).mount(window.splide.Extensions);

      document.addEventListener("click", (event) => {
        if (event.target.tagName === "VIDEO") {
          let video = event.target;
          if (video.paused) {
            video.play();
          } else {
            video.pause();
          }
        }
      });
      /**
       * Clients Slider 2.
       */
    } else if (container.classList.contains("testimonials")) {
      new Splide(container, {
        type: "loop",
        autoWidth: true,
        autoplay: true,
        interval: 0,
        drag: false,
        speed: 200000,
        arrows: false,
        pagination: false,
        gap: "2rem",
        breakpoints: {
          768: {
            perPage: 2,
            autoWidth: false,
          },
          640: {
            perPage: 1,
          },
        },
      }).mount();
    }
  });

  /**
   * Scroll Animation.
   */
  AOS.init();
  /**
   * Video.
   */
  $(".showVideo").on("click", function () {
    const videoUrl = $(this).data("video-url");

    $("#videoPlayer source").attr("src", videoUrl);

    $("#videoPlayer")[0].load();
    $("#videoPlayer")[0].play();

    $("#videoModal").css("display", "block");
  });

  $("#closeModal").on("click", function () {
    $("#videoPlayer")[0].pause();

    $("#videoModal").css("display", "none");
  });
  /**
   * Pricing.
   */
  $(".pricing-options input").change(function () {
    let interval = $(this).val();
    if ($(".pricing-options").hasClass("monthly")) {
      $(".pricing-options").removeClass("monthly");
      $(".pricing-options").addClass(interval);
      $(".price .monthly").removeClass("selected");
      $(".price .quaterly").addClass("selected");
    } else {
      $(".pricing-options").removeClass("quaterly");
      $(".pricing-options").addClass(interval);
      $(".price .quaterly").removeClass("selected");
      $(".price .monthly").addClass("selected");
    }
  });

  /**
   * Pricing List.
   */
  let isTextVisible = true;
  $(".pricing-more").on("click", function () {
    if (isTextVisible) {
      $(this).find(":eq(0)").text("Hide");
    } else {
      $(this).find(":eq(0)").text("View more");
    }

    isTextVisible = !isTextVisible;
    $(this).toggleClass("show");
    $(this).next().slideToggle();
  });

  /**
   * Frequently Asked Questions.
   */
  $(".faq-trigger").on("click", function () {
    $(this).next().toggleClass("show");
    $(this).find(".faq-icon").toggleClass("rotate");
  });

  /**
   * Header.
   */
  const header = document.querySelector(".header");

  window.addEventListener("scroll", () => {
    if (window.scrollY > 100) {
      header.classList.add("scrolled");
    } else {
      header.classList.remove("scrolled");
    }
  });
});
