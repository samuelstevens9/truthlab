<?php
/**
 * Template Name: Research Module
 */

get_header(); ?>

    <section class="hero-cta"
             style="background-image: url('<?= get_stylesheet_directory_uri() . '/assets/img/research-module/hero-bg.png'; ?>')">
        <video poster="<?= get_stylesheet_directory_uri() . '/assets/img/research-module/hero-bg.png'; ?>"
               id="hero-bg-vid"
               playsinline
               autoplay
               muted
               loop>
            <source src="<?= get_stylesheet_directory_uri() . '/assets/img/research-module/hero-bg.mp4'; ?>"
                    type="video/mp4">
            <source src="<?= get_stylesheet_directory_uri() . '/assets/img/research-module/hero-bg.webm'; ?>"
                    type="video/webm">
        </video>
        <div class="container-fluid">
            <div class="content-wrapper">
                <h1>
                    CX Leaders Grow<br>
                    Substantially Faster than Laggards
                </h1>
                <p>
                    From 2010 to 2015, the Compound Average Revenue Growth<br>
                    rate for CX Leaders was 17% compared to 4% for Laggards.<br>
                    <span class="quote-source">*Source: “Customer Experience Drives Revenue Growth,” June 2016, Forrester Research</span>
                </p>
            </div>
        </div>
    </section>
    <section class="cta-demo">
        <div class="container-fluid">
            <a href="#" data-toggle="modal" data-target="#appointment-calendar">Schedule Demo</a>
        </div>
    </section>

    <section class="page-about">
        <div class="content-wrapper container" data-aos="fade-up">
            <h2 class="red">Truthlab Research Module</h2>
            <p class="red sub-header">Automatically Extract Insights and Act Upon Them</p>
            <p>The Truthlab Research Module enables your team to begin immediately receiving actionable insights from
                your qualitative and historical customer data, including videos, audio and text.</p>
            <p>The Research Module consists of three sections:</p>
        </div>
    </section>

    <section class="product-demo">
        <div class="ellipsis-1"></div>
        <div class="ellipsis-2"></div>
        <div class="ellipsis-3"></div>
        <div class="ellipsis-4"></div>

        <div class="container slider-container">
            <ul class="product-demo__slider-pages">
                <li class="active">Panel</li>
                <li>Research</li>
                <li>Insights</li>
            </ul>
            <div class="product-demo__slider">
                <div class="row">
                    <div class="visible-xs-block">
                        <img src="<?= get_stylesheet_directory_uri() . '/assets/img/research-module/panel_mac.png' ?>" alt="Truthlab, B2B customer experience platform dashboard" />
                    </div>
                    <div class="col-sm-5" data-aos="fade-right">
                        <h3>Panel</h3>
                        <p>Manage  your  own  participants  and  customer  advisory  boards </p>
                        <p>Filter panelists and create static or smart lists</p>
                        <p>Smart audience lists automatically add and remove panelists based on your filter settings</p>
                        <p>Easy onboarding of any tester including employees or contractors either by name or leveraging
                            existing collaboration tools (i.e., Slack, Yammer, Chatter)</p>
                    </div>
                    <div class="col-sm-7 hidden-xs" data-aos="fade-left">
                        <img src="<?= get_stylesheet_directory_uri() . '/assets/img/research-module/panel_mac.png' ?>" alt="Truthlab, B2B customer experience platform dashboard">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-7">
                        <img src="<?= get_stylesheet_directory_uri() . '/assets/img/research-module/research_mac.png' ?>" alt="Truthlab, B2B customer experience platform research" />
                    </div>
                    <div class="col-sm-5">
                        <h3>Research</h3>
                        <p>Configure and automate testing of digital properties (live or prototypes)</p>
                        <p>Does not require any custom integration</p>
                        <p>Distribute to panelists by link or Smart Audiences</p>
                        <p>Define success criteria for Success/Failure testing</p>
                        <p>Conduct moderated and/or unmoderated research in a matter of minutes.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="visible-xs-block">
                        <img src="<?= get_stylesheet_directory_uri() . '/assets/img/research-module/videoPlayer_MacBook.png' ?>" alt="Truthlab, B2B customer experience platform insights" />
                    </div>
                    <div class="col-sm-5">
                        <h3>Insights</h3>
                        <p>Watch live moderated and unmoderated user test sessions in an interactive platform.</p>
                        <p>Work with full video transcript and video clipping to make actionable observations and share them in seconds</p>
                        <p>Upload historical studies to get them transcribed and generate insights immediately.</p>
                        <p>Quickly issue spot and gain qualitative understanding to improve negative experiences</p>
                    </div>
                    <div class="col-sm-7 hidden-xs">
                        <img src="<?= get_stylesheet_directory_uri() . '/assets/img/research-module/videoPlayer_MacBook.png' ?>" alt="Truthlab, B2B customer experience platform insights" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product-quote">
        <div class="ellipsis-1"></div>
        <div class="ellipsis-2"></div>
        <div class="ellipsis-3"></div>
        <div class="ellipsis-4"></div>
        <div class="bg-bottom"></div>
        <div class="bg-top"></div>
        <div id="quote-arrows" class="bg-arrows"></div>

        <div class="content-wrapper">
            <div class="quote-text">
                <h2>89%</h2>
                <p>of companies believe that customer experience will be their primary basis for competition in 2016
                    versus
                    36% four years ago.</p>
                <p class="quote-author">—Gartner Research</p>
            </div>
        </div>
    </section>

    <section class="why-us">
        <div class="container">
            <div class="content-wrapper text-center" data-aos="fade-up">
                <h2 class="red">Why Truthlab?</h2>
                <p class="red sub-header">We have a solution for every member of your team</p>
            </div>
            <div class="content-wrapper why-us__facts">
                <div class="row">
                    <div class="col-sm-4" data-aos="fade-right" data-aos-delay="250">
                        <h3>UX/UI Researchers</h3>
                        <p>Insights at a fraction of the time and cost</p>
                        <p>Aggregated reporting to show success/ failure stats</p>
                        <p>Spend less time gathering data and more time making decisions</p>
                    </div>
                    <div class="col-sm-4" data-aos="fade-up" data-aos-delay="250">
                        <h3>UX Designers</h3>
                        <p>See clips of users interacting with your product</p>
                        <p>Quickly identify design pain points</p>
                        <p>Instantly share feedback with your team</p>
                    </div>
                    <div class="col-sm-4" data-aos="fade-left" data-aos-delay="250">
                        <h3>Product Managers</h3>
                        <p>On-demand insights keep you ahead of release cycles</p>
                        <p>Discover the ‘why’ behind your quantitative data</p>
                        <p>Receive feedback from real users</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="truth-fact">
        <div class="ellipsis-1"></div>
        <div class="ellipsis-2"></div>
        <div class="ellipsis-3"></div>
        <div class="ellipsis-4"></div>

        <div class="container">
            <div class="content-wrapper">
                <h2>60%</h2>
                <p>of your time can be saved by collecting and processing qualitative data with Truthlab.</p>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="container">
            <div class="content-wrapper testimonials-wrapper">
                <div class="testimonial" data-aos="fade-right">
                    <p>Truthlab’s UX research platform automatically creates highlight reels of my customer videos so I
                        can get to the most important parts without watching hours of videos.</p>
                    <p>UI/UX Manager<br>
                        Fortune 500 Tech Company</p>
                    <img class="testimonial__client-logo"
                         src="<?= get_stylesheet_directory_uri() . '/assets/img/research-module/500-logo.png'; ?>" alt="Fortune 500 Company" />
                </div>
                <div class="testimonial" data-aos="fade-left">
                    <p>There’s value in watching each user complete a task using our product, but my team and I don’t
                        have time to watch all those videos.</p>
                    <p>Kevin Boodtama | Senior Designer</p>
                    <img class="testimonial__client-logo"
                         src="<?= get_stylesheet_directory_uri() . '/assets/img/research-module/grubhub-logo.png'; ?>" alt="GRUBHUB logo" />
                </div>
            </div>
        </div>
    </section>

    <section id="cta" data-aos="slide-up" data-aos-offset="0">
        <div class="container-fluid">
            <div class="row row--padded cta__red">
                <div class="col-xs-12">
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
                                <a href="#" class="button button--white" data-toggle="modal"
                                   data-target="#appointment-calendar">Schedule Demo</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        var vid = document.getElementById("hero-bg-vid");

        if (window.matchMedia('(prefers-reduced-motion)').matches) {
            vid.removeAttribute("autoplay");
            vid.pause();
        }

        jQuery(document).ready(function ($) {
            $(window).on('resize', function () {
                $('body').css('padding-bottom', $('section.cta-demo').outerHeight());
            }).trigger('resize');

            var controller = new ScrollMagic.Controller();
            var blockTween = new TweenMax.from('#quote-arrows', 1, {
                backgroundPositionY: '150%, 153%, 142%, 130%, 134%, 136%, 131%, 136%, 127%, 120%, 114%, 117%, 133%'
            });
            var containerScene = new ScrollMagic.Scene({
                triggerElement: '#quote-arrows',
                duration: 500,
                offset: -50
            })
                .setTween(blockTween)
                .addTo(controller);
        });
    </script>
<?php
get_footer();
