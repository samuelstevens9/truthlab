/**
 * Custom JS.
 *
 * Custom JS scripts.
 *
 * @since 1.0.0
 */

/* Minimize navigation */
jQuery(window).scroll(function() {
  if (jQuery(document).scrollTop() > 50) {
    jQuery('nav').addClass('shrink');
    jQuery('.add').hide();
  } else {
    jQuery('nav').removeClass('shrink');
    jQuery('.add').show();

  }
});

/* Hero Slider */
//jQuery(document).hover(nextSlide);
//jQuery(document).on('click',nextSlide);
//setInterval(nextSlide, 1000);
function nextSlide(){
  console.log(jQuery('.active + .slide-header').length);
  if (jQuery('.active + .slide-header').length > 0){
    jQuery('.active + .slide-header').addClass('active');
    jQuery(jQuery('.slider .active')[0]).removeClass('active');
  } else{
    jQuery('.slider .active').removeClass('active');
    jQuery('.slide-header:nth-child(1)').addClass('active');
  }
}




jQuery(document).ready(function() {
  /* Search Dropdown */
  jQuery('.search-toggle').click(function () {
      jQuery('.search-dropdown').slideToggle();
  });

  /* Subscribe Dropdown */
  jQuery('.subscribe-toggle').click(function () {
      jQuery('.subscribe-dropdown').slideToggle();
  });

  /* Request Dropdown */
  jQuery('.request-toggle').click(function () {
      jQuery('.request-dropdown').slideToggle();
  });

  /* Logo Slider */
  jQuery('.customer-logos').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 1000,
      arrows: false,
      dots: false,
      pauseOnHover: false,
      responsive: [{
          breakpoint: 768,
          settings: {
              slidesToShow: 4
          }
      }, {
          breakpoint: 520,
          settings: {
              slidesToShow: 2,
              arrows: true
          }
      }]
  });

  /* Testimonial Slider */
  jQuery('.carousel').carousel({
    interval: 6000
  });

});
