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
jQuery(document).on('click',nextSlide);
function nextSlide(){
  console.log(jQuery('.active + .slide').length);
  if (jQuery('.active + .slide-header').length > 0){
    jQuery('.active + .slide-header').addClass('active');
    jQuery(jQuery('.active')[0]).removeClass('active');
  } else{
    jQuery('.active').removeClass('active');
    jQuery('.slide-header:nth-child(1)').addClass('active');
  }
}

/* Carousel Auto-Cycle */
jQuery(document).ready(function() {
  jQuery('.carousel').carousel({
    interval: 6000
  })
});
