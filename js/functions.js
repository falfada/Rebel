$(document).ready(function(){
  /**
 * Popup video.
 */
  $('.open-popup').on('click', function() {
    $('.popup-overlay').fadeIn();
  });


  $('.close-popup').on('click', function() {
    $('.popup-overlay').fadeOut();
  });
  /**
 * Clients slider.
 */
  // $('.clients-slider').slick({
  //   slidesToShow: 5,
  //   slidesToScroll: 1,
  //   infinite: true,
  //   easing: 'linear',
  // });
  /**
 * Our Work/Testimonials.
 */
  // $('.variable-width').slick({
  //   slidesToShow: 3,
  //   slidesToScroll: 1,
  //   infinite: true,
  //   easing: 'linear',
  // });
  
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: "auto",
    spaceBetween: 30,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
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
/**
 * Animations.
 */
const observer = new IntersectionObserver ((entries) => {
  entries.forEach((entry) => {
    if(entry.isIntersecting){
      entry.target.classList.add('show');
    } else{
      entry.target.classList.remove('show');
    }
  });
});


const hiddenElements = document.querySelectorAll('.hidden');
hiddenElements.forEach((el) => observer.observe(el));
});
