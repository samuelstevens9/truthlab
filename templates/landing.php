<?php

/**
 * Template Name: Landing Page
 *
 * @package Truthlab
 */

//setcookie('hide_form', true, time()+60*60*24*30, '/');

//get_header();

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700|PT+Sans+Narrow:400,700|PT+Sans:400,400i,700,700i|PT+Sans+Caption:400,700|Open+Sans:300,400,400i,600,700|Roboto+Mono:400,700"
          rel="stylesheet">

	<?php wp_head(); ?>


    <script type="text/javascript"
            src="//platform-api.sharethis.com/js/sharethis.js#property=598dc016b25a6f00127f1e87&product=inline-share-buttons"></script>
    <script type="text/javascript"
            src="<?php echo get_template_directory_uri() ?>/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

</head>

<body <?php body_class(); ?>>

<nav class="navbar navbar-default navbar-fixed-top landing">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo get_site_url() ?>"><img
                        src="<?php echo get_template_directory_uri() ?>/assets/img/truthlab-logo.svg"/></a>
        </div>

    </div>
</nav>


<div id="primary" class="container">
    <main id="main" class="site-main" role="main">
		<?php
		while ( have_posts() ) : the_post();
			//the_ID();
			//the_title();
			the_content();
		endwhile; // End of the loop.
		?>
    </main><!-- #main -->
</div><!-- #primary -->


<footer>
    <div class="mobile-footer container"></div>

    <div class="main-footer container"></div>

    <div class="container sub-footer">
        <div class="row">
            <div class="col-md-4 copyright">
                &copy; Truthlab <?php echo date( "Y" ); ?>
            </div>
            <div class="col-md-8 text-right">
                <a href="/contact/" class="contact">Contact Us</a>
                <ul>
                    <li><a href="https://www.linkedin.com/company-beta/10992459/"><i
                                    class="fa fa-linkedin-square fa-2x"
                                    aria-hidden="true"></i></a></li>
                    <li><a href="https://www.facebook.com/truthlabtech/"><i class="fa fa-facebook-square fa-2x"
                                                                            aria-hidden="true"></i></a></li>
                    <li><a href="https://twitter.com/truthlabtech?lang=en"><i class="fa fa-twitter-square fa-2x"
                                                                              aria-hidden="true"></i></a></li>
                    <li><a href="https://twitter.com/truthlabtech?lang=en"><i class="fa fa-google-plus-square fa-2x"
                                                                              aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- Google Code for whitepaper download Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 844391891;
var google_conversion_label = "ZuIZCOzrm3gQ08vRkgM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/844391891/?label=ZuIZCOzrm3gQ08vRkgM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<!-- Google Code for Remarketing Tag -->
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 844391891;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/844391891/?guid=ON&amp;script=0"/>
</div>
</noscript>

<?php
wp_footer();
?>

</body>
</html>