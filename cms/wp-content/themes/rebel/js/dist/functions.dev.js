"use strict";

$(document).ready(function () {
  /**
   * Portfolio Animation.
   */
  gsap.registerPlugin(ScrollTrigger);
  document.querySelectorAll(".portfolio-item").forEach(function (item) {
    var mask = item.querySelector(".mask");
    gsap.to(mask, {
      y: "-100%",
      duration: 1.5,
      ease: "power4.out",
      stagger: 0.2,
      scrollTrigger: {
        trigger: item,
        start: "top 90%",
        toggleActions: "play none none none"
      }
    });
  });
  gsap.to(".content", {
    duration: 1.5,
    y: 0,
    opacity: 1,
    ease: "power3.out",
    stagger: 0.3
  });
  /**
   * Form Input.
   */

  $("#fileInput").change(function () {
    var parentContainer = $(this).parent();
    var labelForFile = parentContainer.siblings("label");
    var textToDisplay = $("#fileInput")[0].files[0].name;
    var newParagraph = "<p class=\"fileName\">".concat(textToDisplay, "</p>");
    labelForFile.after(newParagraph);
  });
  /**
   * Lottie Animation.
   */

  $(window).on("load", function () {
    if ($("body.home").length) {
      var showPage = function showPage() {
        document.getElementById("pageLoader").style.display = "none";
        document.getElementById("pageContent").style.display = "block";
      };

      var myVar = setTimeout(showPage, 3000);
    }
  });
  /**
   * Other Option Form.
   */

  $(".wpcf7-form-control-wrap select").on("change", function () {
    var triggerValue = $(this).val();
    var grandparentContainer = $(this).closest("p");

    if (triggerValue === "Other") {
      var otherOptionContainer = grandparentContainer.next().css({
        display: "block"
      });
    } else {
      var _otherOptionContainer = grandparentContainer.next().css({
        display: "none"
      });
    }
  });
  /**
   * Form Stepper.
   */

  var steps = Array.from(document.querySelectorAll(".step"));
  var stepNumbers = Array.from(document.querySelectorAll(".step-number"));
  var nextButtons = Array.from(document.querySelectorAll(".next-button"));
  var prevButtons = Array.from(document.querySelectorAll(".prev-button"));
  var currentStep = 0;

  function updateProgress() {
    stepNumbers.forEach(function (number, index) {
      if (index === currentStep) {
        number.classList.add("active");
      } else {
        number.classList.remove("active");
      }
    });
  }

  function showStep(step) {
    steps.forEach(function (s, index) {
      if (index === step) {
        s.style.display = "block";
      } else {
        s.style.display = "none";
      }
    });
  } // Initially, show the first step


  showStep(currentStep);
  updateProgress();
  nextButtons.forEach(function (button, index) {
    button.addEventListener("click", function (e) {
      e.preventDefault();
      currentStep++;

      if (currentStep >= steps.length) {
        currentStep = steps.length - 1;
      }

      showStep(currentStep);
      updateProgress();
    });
  });
  prevButtons.forEach(function (button, index) {
    button.addEventListener("click", function (e) {
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
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add("animate");
        observer.unobserve(entry.target);
      }
    });
  }

  var markElements = document.querySelectorAll(".mark");
  markElements.forEach(function (markElement) {
    var observer = new IntersectionObserver(startAnimation, {
      root: null,
      threshold: 0.5
    });
    observer.observe(markElement);
  });
  /**
   * Clients Logos.
   */

  var swiperLogos = {
    loop: true,
    autoplay: {
      delay: 1,
      disableOnInteraction: false
    },
    slidesPerView: "auto",
    speed: 6000,
    grabCursor: true,
    spaceBetween: 24,
    //mousewheelControl: true,
    //keyboardControl: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    }
  };
  var swiperLogosSlider = new Swiper(".clients-logos.swiper-container", swiperLogos);
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

  var splideContainer = document.querySelector(".splide");

  if (splideContainer) {
    var splide = new Splide(".splide", {
      type: "loop",
      gap: "0rem",
      focus: "center",
      arrows: true,
      isNavigation: true,
      pagination: false,
      updateOnMove: true,
      autoWidth: true,
      video: {
        loop: true
      }
    });
    splide.mount(window.splide.Extensions);
    document.addEventListener("click", function (event) {
      if (event.target.tagName === "VIDEO") {
        var video = event.target;

        if (video.paused) {
          video.play();
        } else {
          video.pause();
        }
      }
    });
  }
  /**
   * Clients Slider 2.
   */


  var swiperClients2 = {
    loop: true,
    autoplay: {
      delay: 1,
      disableOnInteraction: false
    },
    slidesPerView: "auto",
    speed: 10000,
    grabCursor: true,
    spaceBetween: 16,
    //mousewheelControl: true,
    //keyboardControl: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    }
  };
  var swiper2 = new Swiper(".testimonials.two.swiper-container", swiperClients2);
  $(".testimonials.two.swiper-container").hover(function () {
    swiper.autoplay.stop();
  }, function () {
    swiper.autoplay.start();
  });
  /**
   * Scroll Animation.
   */

  AOS.init();
  /**
   * Video.
   */

  $(".showVideo").on("click", function () {
    var videoUrl = $(this).data("video-url");
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
    var interval = $(this).val();

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

  var isTextVisible = true;
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

  var header = document.querySelector(".header");
  window.addEventListener("scroll", function () {
    if (window.scrollY > 100) {
      header.classList.add("scrolled");
    } else {
      header.classList.remove("scrolled");
    }
  });
});