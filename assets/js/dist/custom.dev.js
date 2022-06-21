"use strict";

$('.brands-logo').owlCarousel({
  loop: true,
  margin: 10,
  responsiveClass: true,
  navigator: false,
  navContainer: false,
  dots: false,
  nav: false,
  responsive: {
    0: {
      items: 2,
      nav: true
    },
    600: {
      items: 3,
      nav: false
    },
    1000: {
      items: 5,
      nav: true,
      loop: false
    }
  }
});
$('.testimonial-slider').owlCarousel({
  loop: true,
  margin: 10,
  responsiveClass: true,
  navigator: true,
  navContainer: false,
  dots: false,
  nav: true,
  items: 1,
  responsive: {
    0: {
      items: 1,
      nav: true
    },
    700: {
      items: 2,
      nav: false
    },
    900: {
      items: 1,
      nav: true,
      loop: false
    }
  }
});