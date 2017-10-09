/**
 * Custom JS.
 *
 * Custom JS scripts.
 *
 * @since 1.0.0
 */

/* Minimize navigation */
jQuery(window).scroll(function () {
    if (jQuery(document).scrollTop() > 50) {
        jQuery('nav').addClass('shrink');
        jQuery('.add').hide();
    } else {
        jQuery('nav').removeClass('shrink');
        jQuery('.add').show();

    }
});

jQuery(document).ready(function ($) {

    var offset = 250;
    var duration = 300;

    $(window).scroll(function () {

        if ($(this).scrollTop() > offset) {
            $('#back-to-top').fadeIn(duration);
        } else {
            $('#back-to-top').fadeOut(duration);
        }

    });

    $('#back-to-top').click(function (event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0}, duration);
    })

});

function isOverflown(element) {
    return element.scrollHeight - 6 > element.clientHeight || element.scrollWidth > element.clientWidth;
}

/* Hero Slider */
//jQuery(document).hover(nextSlide);
//jQuery(document).on('click',nextSlide);
//setInterval(nextSlide, 1000);
function nextSlide() {
    //console.log(jQuery('.active + .slide-header').length);
    if (jQuery('.active + .slide-header').length > 0) {
        jQuery('.active + .slide-header').addClass('active');
        jQuery(jQuery('.slider .active')[0]).removeClass('active');
    } else {
        jQuery('.slider .active').removeClass('active');
        jQuery('.slide-header:nth-child(1)').addClass('active');
    }
}

jQuery(function () {
    jQuery(".row-tester").hide();
    jQuery(".user, .tester").bind("click", function () {
        jQuery(".row-users, .row-tester").hide();
        if (jQuery(this).attr("class") == "user") {
            jQuery(".row-users").show();
        }
        else {
            jQuery(".row-tester").show();
        }
    });
});


jQuery(document).ready(function ($) {
    jQuery('.accordion-toggle').on('click', '.button,a', function (e) {
        e.stopPropagation();
    });

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
        interval: false
    });

    // Select all links with hashes
    jQuery('a[href*="#"]')
    // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function (event) {
            // On-page links
            if (
                location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '')
                &&
                location.hostname === this.hostname
            ) {
                // Figure out element to scroll to
                var target = jQuery(this.hash);
                target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    jQuery('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000, function () {
                        // Callback after animation
                        // Must change focus!
                        var jQuerytarget = jQuery(target);
                        jQuerytarget.focus();
                        if (jQuerytarget.is(":focus")) { // Checking if the target was focused
                            return false;
                        } else {
                            jQuerytarget.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                            jQuerytarget.focus(); // Set focus again
                        }
                    });
                }
            }
        });

    //blog archive post category filter

    function load_more_posts(filter_val, paged, append_html) {

        $('#blog-posts').data('filter', filter_val).data('paged', paged);

        var author_id = $('#blog-posts').data('author');

        $.blockUI({
            message: '<i class="fa fa-spin fa-spinner" aria-hidden="true"></i>',
            css: {
                padding: 0,
                margin: 0,
                width: '30%',
                top: '40%',
                left: '35%',
                textAlign: 'center',
                color: '#07074e',
                border: 'none',
                backgroundColor: 'transparent',
                cursor: 'wait'
            },
            overlayCSS: {
                backgroundColor: '#FFF',
                opacity: 0.9,
                cursor: 'wait'
            }
        });

        $.post(ajaxurl, {
            action: 'blog_filtered_posts',
            category: filter_val,
            paged: paged,
            author_id: author_id
        }, function (data) {
            $.unblockUI();

            if (data) {
                if (append_html)
                    $('#blog-posts').find('.courses').append(data.html);
                else
                    $('#blog-posts').find('.courses').html(data.html);

                if (data.has_more) {
                    $('.load-more__wrapper').show();
                } else {
                    $('.load-more__wrapper').hide();
                }
            }
        }, 'json');
    }

    if ($('.blog-filter--category').length > 0) {

        $blog_cat_filters = $('.blog-filter--category');

        $blog_cat_filters.click(function (event) {
            event.preventDefault();

            $blog_cat_filters.parent('li').removeClass('active');

            $(this).parent('li').addClass('active');

            var filter_val = $(this).data('filter');
            var paged = 1;

            load_more_posts(filter_val, paged, false);

        });

        $('#js--load-more-posts').click(function (event) {
            event.preventDefault();

            var $blog_posts = $('#blog-posts');
            var filter_val = $blog_posts.data('filter');
            var paged = parseInt($blog_posts.data('paged'));

            load_more_posts(filter_val, paged + 1, true);
        });
    }

});
