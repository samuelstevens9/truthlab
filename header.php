<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700|PT+Sans+Narrow:400,700|PT+Sans:400,400i,700,700i|PT+Sans+Caption:400,700|Open+Sans:300,400,400i,600,700|Roboto+Mono:400,700"
          rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <script>
        var ajaxurl =<?= json_encode( admin_url( 'admin-ajax.php' ) ); ?>;
    </script>

	<?php wp_head(); ?>

    <script type='text/javascript'
            src='//platform-api.sharethis.com/js/sharethis.js#property=59a8de0ad2b9a20012505785&product=inline-share-buttons'
            async='async'></script>
    <script type="text/javascript"
            src="<?php echo get_template_directory_uri() ?>/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-105819935-1', 'auto');
        ga('send', 'pageview');
    </script>

</head>

<?php
$body_classes = array();
if ( is_the_blog() ) {
	$body_classes[] = 'is-blog';
}
?>

<body <?php body_class( $body_classes ); ?>>

<?php if ( is_page_template( 'templates/research-module.php' ) || ! is_the_blog() ) { ?>
    <a class="request-dropdown-mobile" data-toggle="modal" data-target="#appointment-calendar"
       style="z-index:5555;">
        Schedule Demo
        <i class="fa fa-angle-right" aria-hidden="true"></i>
    </a>
<?php } else { ?>
    <!-- Fixed navbar -->
    <a class="request-dropdown-mobile request-toggle" style="z-index:5555;">
        Subscribe
        <i class="fa fa-angle-right" aria-hidden="true"></i>
    </a>
<?php } ?>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo get_site_url() ?>"><img
                        src="<?php echo get_template_directory_uri() ?>/assets/img/truthlab-logo.svg" alt="Truthlab, B2B marketing strategies"/></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="<?php if ( is_page( 'solutions' ) ) {
					echo ' active ';
				} ?>"><a href="/solutions/">Solutions</a></li>
                <li class="<?php if ( is_page( 'about' ) ) {
					echo ' active ';
				} ?>"><a href="/about/">About</a></li>
                <li class="<?php if ( is_page( 'customer-experience-advantage' ) ) {
					echo ' active ';
				} ?>"><a href="/customer-experience-advantage/">Resources</a></li>
                <li class="<?php if ( strpos( $_SERVER[ 'REQUEST_URI' ], 'blog' ) !== FALSE ) {
					echo ' active ';
				} ?>"><a href="/blog/">Blog</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="https://app.truthlab.com/c/login/">Sign In</a></li>
                <li class="search-toggle"><a href="#"><i class="fa fa-search"></i></a></li>
				<?php if ( strpos( $_SERVER[ 'REQUEST_URI' ], 'blog' ) !== FALSE ): ?>
                    <li class="request-toggle"><a href="#" class="button button--red">Subscribe to Blog</a></li>
				<?php else: ?>
                    <li class="request-appointment">
                        <a href="#" class="button button--red" data-toggle="modal" data-target="#appointment-calendar">
                            Schedule Demo
                        </a>
                    </li>
				<?php endif; ?>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="search-dropdown">
    <form role="search" method="get" id="ajax_searchform" action="<?php echo home_url( '/' ); ?>">
        <div class="container">
            <div class="col-md-10">
                <input type="text" placeholder="Type to Search&hellip;" name="s"/>
            </div>
            <div class="col-md-2">
                <button type="submit" class="button button--red-outline no-background" value="Search">Search</button>
            </div>
        </div>
    </form>
    <a href="#" class="search-toggle" style="position:absolute;top:2%;right:2%;font-size:40px;"><i
                class="fa fa-times-circle" aria-hidden="true"></i></a>
</div>

<div class="request-dropdown">
	<?php if ( strpos( $_SERVER[ 'REQUEST_URI' ], 'blog' ) !== FALSE ): ?>
        <form action="https://app.truthlab.com/p/api/v2/blog/handler/" method="post"
              id="mc-embedded-subscribe-blog-form" name="mc-embedded-subscribe-blog-form" class="validate"
              target="_blank" novalidate>
            <div class="fields-wrapper">
                <input type="hidden" name="csrf" value="ijr8823t4nn7342"/>
                <h2>Subscribe to Blog</h2>
                <div class="col-md-5">
                    <input type="email" value="" name="EMAIL" class="required email" placeholder="Email"
                           id="mce-blog-EMAIL" required>
                </div>
                <div class="col-md-4">
                    <input type="text" value="" name="FULLNAME" class="" placeholder="Full Name" id="mce-blog-FULLNAME"
                           required>
                </div>
                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                    <input type="text"
                           name="b_c2bfa3ee50aeeb2e544284a99_c1e42fec0f"
                           tabindex="-1" value="">
                </div>
                <div class="col-md-3">
                    <button type="submit" value="Submit" name="subscribe" id="mc-embedded-subscribe-blog"
                            class="button button--red-outline" style="margin:0px;">
                        Join Now
                    </button>
                </div>
            </div>
            <div id="mce-blog-responses" class="clear">
                <div class="response" id="mce-error-blog-response" style="display:none"></div>
                <div class="response response--success" id="mce-success-blog-response" style="display:none">
                    <h3>Thank You!</h3>
                    <p class="message">
                        You have successfully joined the Truthlab Blog.<br>
                        If you do not receive a confirmation email, please <a href="/contact/">contact us</a> for
                        assistance.
                    </p>
                </div>
            </div>
        </form>
	<?php else: ?>
        <form action="https://app.truthlab.com/p/api/v2/demo/handler/" method="post" id="mc-embedded-subscribe-form"
              name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <div class="fields-wrapper">
                <input type="hidden" name="csrf" value="ijr8823t4nn7342"/>
                <h2>Request a Demo</h2>
                <div class="col-md-5">
                    <input type="email" value="" name="EMAIL" class="required email" placeholder="Email" id="mce-EMAIL"
                           required>
                </div>
                <div class="col-md-4">
                    <input type="text" value="" name="FULLNAME" class="" placeholder="Full Name" id="mce-FULLNAME"
                           required>
                </div>
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text"
                                                                                          name="b_c2bfa3ee50aeeb2e544284a99_c1e42fec0f"
                                                                                          tabindex="-1" value=""></div>
                <div class="col-md-3">
                    <button type="submit" value="Submit" name="subscribe" id="mc-embedded-subscribe"
                            class="button button--red-outline" style="margin:0px;">
                        Request Now
                    </button>
                </div>
            </div>
            <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display:none"></div>
                <div class="response response--success" id="mce-success-response" style="display:none">
                    <h3>Thank You!</h3>
                    <p class="message">
                        We received your request for a demo and will be in touch with you shortly.
                    </p>
                </div>
            </div>
        </form>
	<?php endif; ?>
    <script>
        jQuery(document).ready(function ($) {
            $('#mc-embedded-subscribe-form, #mc-embedded-subscribe-blog-form, .mc-embedded-subscribe-form').submit(function (event) {
                event.preventDefault();
                $.post('https://app.truthlab.com/p/api/v2/demo/handler/', $(this).serialize());
                $(this).find('.response--success').show();
                $(this).find('.fields-wrapper').hide();
            });
        })
    </script>
    <a href="#" class="request-toggle" style="position:absolute;top:2%;right:2%;font-size:40px;">
        <i class="fa fa-times-circle" aria-hidden="true"></i>
    </a>
</div>

<?php
get_template_part( 'partials/appointment-modal' );