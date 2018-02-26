<?php

/**
 * Template Name: Homepage
 *<li class="request-toggle"><a href="#" class="button button--red">Request a Demo</a></li>
 * @package Truthlab
 */

get_header();
$user_agent = $_SERVER[ 'HTTP_USER_AGENT' ];
$is_ie      = preg_match( '/Edge/i', $user_agent ) || preg_match( '/Trident/i', $user_agent );
?>
<?php if ( $is_ie ): ?>
    <section id="simple-home-hero">
        <div class="">
			<?php echo do_shortcode( '[rev_slider alias="home_page"]' ); ?>
        </div>
    </section>
<?php else: ?>
    <section id="curtain-slider">
        <div id="slider-wrapper">
            <div id="btn-wrapper"></div>
            <div class="slider">
                <div class="slide-header active">
                    <div class="panel">
                        <div class="top" data-back="BUILD"></div>
                        <div class="bottom" data-back="BUILD"></div>
                    </div>
                    <div class="center">
                        <h1 style="font-size: 10vh !important;">Build Your Panel</h1>
                        <a href="http://truthlab.com/research-module/" class="button button--white" style="padding-top:100px">
                            Learn more
                        </a>
                        <a href="http://truthlab.com/research-module/" class="down-chevron">
                            <img style="width:30px;height:30px;"
                                 src="<?php echo get_template_directory_uri() ?>/assets/img/home/white-chevron-down.svg"/>
                        </a>
                    </div>
                </div>
                <div class="slide-header">
                    <div class="panel">
                        <div class="top" data-back="CAPTURE"></div>
                        <div class="bottom" data-back="CAPTURE"></div>
                    </div>
                    <div class="center">
                        <h1 style="font-size: 6vh !important;" >Capture Customer Experiences</h1>
                        <a href="http://truthlab.com/research-module/" class="button button--white" style="padding-top:100px">
                            Learn more
                        </a>
                        <a href="http://truthlab.com/research-module/" class="down-chevron">
                            <img style="width:30px;height:30px;"
                                 src="<?php echo get_template_directory_uri() ?>/assets/img/home/white-chevron-down.svg"/>
                        </a>
                    </div>
                </div>
                <div class="slide-header">
                    <div class="panel">
                        <div class="top" data-back="DRIVE"></div>
                        <div class="bottom" data-back="DRIVE"></div>
                    </div>
                    <div class="center">
                        <h1 style="font-size: 6vh !important;">Drive Deeper Collaboration</h1>
                        <a href="http://truthlab.com/research-module/" class="button button--white" style="padding-top:100px">
                            Learn more
                        </a>
                        <a href="http://truthlab.com/research-module/" class="down-chevron">
                            <img style="width:30px;height:30px;"
                                 src="<?php echo get_template_directory_uri() ?>/assets/img/home/white-chevron-down.svg"/>
                        </a>
                    </div>
                </div>
                <div class="slide-header">
                    <div class="panel">
                        <div class="top" data-back="VISIBILITY"></div>
                        <div class="bottom" data-back="VISIBILITY"></div>
                    </div>
                    <div class="center">
                        <h1 style="font-size: 10vh !important;">Boost UX Visibility</h1>
                        <a href="http://truthlab.com/research-module/" class="button button--white" style="padding-top:100px">
                            Learn more
                        </a>
                        <a href="http://truthlab.com/research-module/" class="down-chevron">
                            <img style="width:30px;height:30px;"
                                 src="<?php echo get_template_directory_uri() ?>/assets/img/home/white-chevron-down.svg"/>
                        </a>
                    </div>
                </div>
                <div class="slide-header">
                    <div class="panel">
                        <div class="top" data-back="TRUTHLAB"></div>
                        <div class="bottom" data-back="TRUTHLAB"></div>
                    </div>
                    <div class="center">
                        <h1 style="font-size: 10vh !important;">with Truthlab</h1>
                        <a href="http://truthlab.com/research-module/" class="button button--white" style="padding-top:100px">
                            Learn more
                        </a>
                        <a href="http://truthlab.com/research-module/" class="down-chevron">
                            <img style="width:30px;height:30px;"
                                 src="<?php echo get_template_directory_uri() ?>/assets/img/home/white-chevron-down.svg"/>
                        </a>
                    </div>
                </div>
            </div>
            <div class="slider-drop-shadow"></div>
        </div>
    </section>
    <script>setInterval(nextSlide, 3 * 1000);</script>
<?php endif; ?>

    <section id="about">
        <div class="row--padded">
            <div class="container">
                <div class="row" data-aos="slide-up">
                    <div class="col-md-8 col-md-offset-2 text-center heading page-overview">
                        <div class="page-overview__wrapper">
                            <h1>Truthlab is a<br/>Customer Experience Management (CXM) company</h1>
                            <p>
                                Our proven solutions help B2B companies to deliver consistently amazing customer
                                experiences
                                that drive satisfaction, retention and advocacy.
                            </p>
                            <p>
                                We enable companies to orchestrate and analyze customer data, insights and interactions
                                –
                                all on one powerful CXM platform.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="middle">
        <div class="row--padded top-row">
            <div class="container">
                <div class="row" data-aos="slide-left" data-aos-offset="300">
                    <div class="col-md-8 col-sm-7 image">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/home/get-immediate-insights.png"/>
                    </div>
                    <div class="col-md-4 col-sm-5 text-right copy">
                        <h2>Get Immediate Insights</h2>
                        <p>Instantly extract quantitative and qualitative insights that allow you to make educated
                            customer experience decisions. No more watching hundreds of videos to get what you need.</p>
                        <a href="/solutions/" class="button button--blue-outline">Learn More</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div id="vector-lines" class="row--padded blank" style="z-index:-1;">
            </div>
        </div>

        <div class="row--padded bottom-row">
            <div class="container" data-aos="slide-right" data-aos-offset="300">
                <div class="row">
                    <div class="col-md-8 col-sm-7 col-md-push-4 col-sm-push-5 text-right image">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/home/watch-highlight-reels.png"/>
                    </div>
                    <div class="col-md-4 col-sm-5 col-md-pull-8 col-sm-pull-7 text-left copy">
                        <h2>Watch Highlight Reels</h2>
                        <p>The Truthlab platform instantly generates highlight reels of your videos, whether they were
                            created on the platform or elsewhere. No more expensive professional service costs to create
                            actionable insights.</p>
                        <a href="https://vimeo.com/232169127?width=640&amp;height=480" rel="wp-video-lightbox"
                           class="button button--blue-outline">Watch Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="panel-management">
        <div class="row--padded">
            <div class="container take-action">
                <div class="row" data-aos="slide-left" data-aos-offset="300">
                    <div class="col-md-8 col-sm-6 image">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/home/panel-management.png"/>
                        <div class="bg-image-red">
                            <svg>
                                <g>
                                    <path class="st0"
                                          d="M3785.4,487.5l1198.4,2075.7L3785.4,4639H1388.6L190.1,2563.2L1388.6,487.5H3785.4 M3802.8,457.5H1371.2 L155.5,2563.2L1371.2,4669h2431.5l1215.8-2105.7L3802.8,457.5L3802.8,457.5z"></path>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 text-left copy">
                        <h2>Take Action with Panel Management</h2>
                        <p>Easily invite, register and onboard your testers via email, Slack, IM and message boards,
                            without training or IT involvement. No more professional testers from panel companies.</p>
                        <a href="/solutions/" class="button button--blue-outline">Find Out How</a>
                    </div>
                </div>
            </div>
            <div class="container analyze">
                <div class="row" data-aos="slide-right" data-aos-offset="300">
                    <div class="col-md-8 col-sm-6 visible-xs image">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/home/full-length-video.png"/>
                        <div class="bg-image-blue"
                             data-background-src="<?php echo get_template_directory_uri() ?>/assets/img/home/blue-line.svg"
                             style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/home/blue-line.svg');"></div>
                    </div>
                    <div class="col-md-4 col-sm-6 text-left copy">
                        <h2>Analyze Full Length Video</h2>
                        <p>Full access and unlimited storage of your testers’ entire journey with transcription, event
                            logging and complete search capabilities. And, no more hidden costs.</p>
                        <a href="https://vimeo.com/232169127?width=640&amp;height=480" rel="wp-video-lightbox"
                           class="button button--blue-outline">See Video</a>
                    </div>
                    <div class="col-md-8 col-sm-6 hidden-xs pull-right image">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/home/full-length-video.png"/>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home/t_dell.png"/>
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
                                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home/t_microsoft.png"/>
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
                                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home/t_cisco.png"/>
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
                            <a href="#" class="button button--white request-toggle">Request a Demo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer();