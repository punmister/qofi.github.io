

// owl-carousel
$(document).ready(function () {
    if ($(".card-simple-slide").length) {
      $(".card-simple-slide").owlCarousel({
        loop: true,
        margin: 40,
        responsiveClass: true,
        dots: false,
        responsive: {
          0: {
            items: 1,
            nav: false,
            dots: true,
          },
          600: {
            items: 2,
            nav: false,
            dots: true,
          },
          1000: {
            items: 3,
            nav: false,
            loop: false,
          },
        },
      });
    }
});


// owl-carousel
$(document).ready(function () {
    if ($(".testimonial-slide").length) {
      $(".testimonial-slide").owlCarousel({
        items: 1,
        loop: true,
        dots: true,
        autoplay: false,
        autoplayTimeout: 3000,
        autoplayHoverPause: false,
      });
    }
});


// owl-carousel
$(document).ready(function () {
    if ($(".features-slide").length) {
      $(".features-slide").owlCarousel({
        items: 1,
        loop: true,
        dots: false,
        nav: true,
        autoplay: false,
        autoplayTimeout: 3000,
        autoplayHoverPause: false,
      });
    }
});


// owl-carousel
$(document).ready(function () {
    if ($(".features-slide2").length) {
      $(".features-slide2").owlCarousel({
        items: 1,
        loop: true,
        dots: false,
        nav: true,
        margin: 38,
        autoplay: false,
        autoplayTimeout: 3000,
        autoplayHoverPause: false,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: true,
            dots: false,
            margin: 0,
          },
          600: {
            items: 2,
            nav: true,
            dots: false,
          },
          1000: {
            items: 3,
            nav: false,
            loop: false,
          },
        },
      });
    }
});
