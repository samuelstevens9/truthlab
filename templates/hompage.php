<?php

/**
 * Template Name: Homepage
 *<li class="request-toggle"><a href="#" class="button button--red">Request a Demo</a></li>
 * @package Truthlab
 */

get_header();
?>
    <section id="homepage-hero">
        <div class="video-wrapper">
            <video poster="<?= get_stylesheet_directory_uri() . '/assets/img/home/hero-poster.png'; ?>"
                   id="hero-bg-vid" class="hidden-xs" playsinline autoplay muted>
                <source src="<?= get_stylesheet_directory_uri() . '/assets/img/home/hero-vid.mp4'; ?>" type="video/mp4">
                <source src="<?= get_stylesheet_directory_uri() . '/assets/img/home/hero-vid.webm'; ?>"
                        type="video/webm">
            </video>
            <video poster="<?= get_stylesheet_directory_uri() . '/assets/img/home/hero-poster-mobile.png'; ?>"
                   id="hero-bg-vid" class="visible-xs" playsinline autoplay muted>
                <source src="<?= get_stylesheet_directory_uri() . '/assets/img/home/hero-vid.mp4'; ?>" type="video/mp4">
                <source src="<?= get_stylesheet_directory_uri() . '/assets/img/home/hero-vid.webm'; ?>"
                        type="video/webm">
            </video>
            <div class="hero-cta">
                <div class="cta-line">
                    Understand &amp; Improve Your
                </div>
                <br>
                <div class="cta-line">
                    Customer Experience
                </div>
                <br>
                <div class="cta-line cta-line--small">
                    <p>Map, validate, collaborate and improve your customer experience with Truthlab.</p>
                    <p>
                        <a href="#middle">Learn More &gt;&gt;</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="slider-drop-shadow"></div>
    </section>

    <script>
        var vid = document.getElementById("hero-bg-vid");

        if (window.matchMedia('(prefers-reduced-motion)').matches) {
            vid.removeAttribute("autoplay");
            vid.pause();
        }
    </script>

    <section id="about">
        <div class="row--padded">
            <div class="container">
                <div class="row" data-aos="slide-up">
                    <div class="col-md-8 col-md-offset-2 text-center heading page-overview">
                        <div class="page-overview__wrapper">
                            <h1>Walk in Your Customers' Shoes</h1>
                            <p>
                                Take your first step toward truly understanding the customer journey with the Truthlab
                                platform.
                            </p>
                            <p>
                                Our powerful Customer Experience Management (CXM) platform helps B2B companies deliver
                                consistently amazing experiences throughout their customer journey that drive
                                satisfaction, retention and advocacy.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="middle">
        <div class="row--padded top-row">
            <img class="row-bg-triangle"
                 src="<?php echo get_template_directory_uri() ?>/assets/img/home/home-bg-triangle-01.svg"/>
            <div class="container">
                <div class="row vcenter" data-aos="slide-left" data-aos-offset="300">
                    <div class="col-md-8 col-sm-7 image">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/home/map.png"
                             data-gif-src="<?php echo get_template_directory_uri() ?>/assets/img/home/map.gif" alt="Truthlab, B2B customer experience platform" />
                    </div>
                    <div class="col-md-4 col-sm-5 copy">
                        <h2>Map</h2>
                        <p>
                            Map your customer journey to identify the moments of truth that define your relationship
                            with your customers.
                        </p>
                        <a href="https://mailchi.mp/b4542bd1f679/easy-powerful-complete-truthlab-demo" class="button button--blue-outline">Schedule Demo</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="vector-lines-container">
            <div class="container">
                <div id="vector-lines" class="row--padded blank" style="z-index:-1;">
                </div>
            </div>
        </div>

        <div class="row--padded bottom-row">
            <img class="row-bg-triangle"
                 src="<?php echo get_template_directory_uri() ?>/assets/img/home/home-bg-triangle-02.svg"/>
            <div class="container" data-aos="slide-right" data-aos-offset="300">
                <div class="row vcenter">
                    <div class="col-md-8 col-sm-7 col-md-push-4 col-sm-push-5 text-right image">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/home/validate.png"
                             data-gif-src="<?php echo get_template_directory_uri() ?>/assets/img/home/validate.gif" alt="Truthlab, B2B customer experience software" />
                    </div>
                    <div class="col-md-4 col-sm-5 col-md-pull-8 col-sm-pull-7 text-left copy">
                        <h2>Validate</h2>
                        <p>
                            Validate experiences with real customers to ensure you are meeting their needs every step of
                            the way.
                        </p>
                        <a href="https://youtu.be/Ivcev-o93t0?rel=0&amp;autoplay=1" rel="wp-video-lightbox"
                           class="button button--blue-outline">Watch Video</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="panel-management">
        <div class="row--padded">
            <div class="container take-action">
                <div class="row" data-aos="slide-left" data-aos-offset="300">
                    <div class="col-md-9 col-sm-6 image">
                        <div class="texture-bg texture-bg--left">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home/texture_left.svg"/>
                        </div>
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/home/collaborate.png"
                             data-gif-src="<?php echo get_template_directory_uri() ?>/assets/img/home/collaborate.gif" alt="Truthlab, B2B customer experience journey" />
                        <div class="bg-image-red"
                             data-background-src="<?php echo get_template_directory_uri() ?>/assets/img/home/red-line.svg"
                             style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/home/red-line.svg');">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 text-left copy">
                        <h2>Collaborate</h2>
                        <p>
                            Collaborate cross-functionally to build a shared understanding of your customer experience.
                        </p>
                        <a href="/solutions/" class="button button--no-outline">See our solutions</a>
                    </div>
                </div>
            </div>
            <div class="container analyze">
                <div class="row" data-aos="slide-right" data-aos-offset="300">
                    <div class="col-md-9 col-sm-6 visible-xs image">
                        <div class="texture-bg texture-bg--left">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home/texture_left.svg"/>
                        </div>
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/home/improve.png"
                             data-gif-src="<?php echo get_template_directory_uri() ?>/assets/img/home/improve.gif" alt="Truthlab, B2B customer journey mapping software" />
                        <div class="bg-image-blue"
                             data-background-src="<?php echo get_template_directory_uri() ?>/assets/img/home/blue-line.svg"
                             style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/home/blue-line.svg');"></div>
                    </div>
                    <div class="col-md-3 col-sm-6 text-left copy">
                        <h2>Improve</h2>
                        <p>
                            Improve your experiences by helping your customers achieve their goals at each stage of
                            their journey.
                        </p>
                        <a href="#" class="button button--no-outline"
                           onclick="jQuery('.talk-to-expert').slideToggle(); return false;">Talk to an
                            expert</a>
						<?php get_template_part( 'partials/home-talk-expert' ); ?>
                    </div>
                    <div class="col-md-9 col-sm-6 hidden-xs pull-right image">
                        <div class="texture-bg texture-bg--right">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home/texture_right.svg"/>
                        </div>
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/home/improve.png"
                             data-gif-src="<?php echo get_template_directory_uri() ?>/assets/img/home/improve.gif" alt="Truthlab, B2B customer journey mapping software" />
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_template_part( 'partials/home-talk-expert' ); ?>

    <section id="clients" data-aos="slide-up">
        <div class="row--padded">
            <div class="container-fluid text-center">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="quotes">
                                        <h2>We work with great people</h2>
                                        <h5>Hear what some say about us</h5>
                                        <div id="tcb-testimonial-carousel" class="carousel slide" data-ride="carousel">
                                            <!-- Indicators -->
                                            <ol class="carousel-indicators">
                                                <li data-target="#tcb-testimonial-carousel" data-slide-to="0"
                                                    class="active"></li>
                                                <li data-target="#tcb-testimonial-carousel" data-slide-to="1"></li>
                                                <li data-target="#tcb-testimonial-carousel" data-slide-to="2"></li>
                                            </ol>
                                            <!-- Wrapper for slides -->
                                            <div class="carousel-inner">
                                                <div class="item active">
                                                    <div class="row row--padded">
                                                        <div class="col-xs-8 col-xs-offset-2 col-md-5 col-md-offset-1 text-left">
                                                            We are in the experience economy. Organizations must adopt a
                                                            technology, process and a customer centric culture to avoid
                                                            being left behind. In three short months, Truthlab has
                                                            identified more actions to take than we had identified
                                                            in the three prior years!
                                                        </div>
                                                        <div class="col-xs-8 col-xs-offset-2 col-md-4 col-md-offset-1 testimonial__author">
                                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home/t_dell.png" alt="DELL logo"/>
                                                            <div>
                                                                Maryanne P.<br/>
                                                                Dir. Customer Experience<br/>
                                                                Dell<br/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="row row--padded">
                                                        <div class="col-xs-8 col-xs-offset-2 col-md-5 col-md-offset-1 text-left">
                                                            Every part of our business influences our Customer
                                                            Experience. Truthlab gives us the insight to understand
                                                            which experiences need to improve.
                                                        </div>
                                                        <div class="col-xs-8 col-xs-offset-2 col-md-4 col-md-offset-1 testimonial__author">
                                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home/t_microsoft.png" alt="Microsoft Windows logo" />
                                                            <div>
                                                                Mark M. <br/>
                                                                Customer Experience Researcher<br/>
                                                                Microsoft<br/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="row row--padded">
                                                        <div class="col-xs-8 col-xs-offset-2 col-md-5 col-md-offset-1 text-left">
                                                            Here at Cisco, we have always put the customer first.
                                                            Truthlab allows us to leverage our existing process and
                                                            methodology
                                                            within
                                                            their
                                                            platform to close the gaps that were previously identified.
                                                        </div>
                                                        <div class="col-xs-8 col-xs-offset-2 col-md-4 col-md-offset-1 testimonial__author">
                                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home/t_cisco.png" alt="Cisco logo" />
                                                            <div>
                                                                Bill T. <br/>
                                                                Dir. Customer Marketing<br/>
                                                                Cisco<br/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="left carousel-control" href="#tcb-testimonial-carousel"
                                               data-slide="prev"><img
                                                        src="<?php echo get_template_directory_uri() ?>/assets/img/home/blue-chevron-left.svg"/></a>
                                            <a class="right carousel-control" href="#tcb-testimonial-carousel"
                                               data-slide="next"><img
                                                        src="<?php echo get_template_directory_uri() ?>/assets/img/home/blue-chevron-right.svg"/></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="cta" data-aos="slide-up">
        <div class="container-fluid">
            <div class="row row--padded cta__red">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <h2>Create Better Customer Experiences</h2>
                            <div class="white"></div>
                            <p>Learn how Truthlab can help you track, measure and improve every aspect of your
                                customers’
                                journey.</p>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-4 text-right">
                            <a href="https://mailchi.mp/b4542bd1f679/easy-powerful-complete-truthlab-demo" class="button button--white" >Schedule a Demo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function whichTransitionEvent() {
            var t;
            var el = document.createElement('fakeelement');
            var transitions = {
                'transition': 'transitionend',
                'OTransition': 'oTransitionEnd',
                'MozTransition': 'transitionend',
                'WebkitTransition': 'webkitTransitionEnd'
            };

            for (t in transitions) {
                if (el.style[t] !== undefined) {
                    return transitions[t];
                }
            }
        }

        jQuery(document).ready(function ($) {
            var $img_gif = $('[data-gif-src]');
            if (getViewportWidth() >= 768) {
                $img_gif.closest('[data-aos]').one(whichTransitionEvent(), function () {
                    var $img = $(this).find('[data-gif-src]');
                    $img.prop('src', $img.data('gif-src'));
                })
            } else {
                $img_gif.each(function () {
                    $(this).prop('src', $(this).data('gif-src'));
                });
            }
        });
    </script>

<?php get_footer();
