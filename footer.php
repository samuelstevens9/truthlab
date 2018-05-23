<?php
/**
 * The template for displaying the footer.
 */
$user_agent = $_SERVER[ 'HTTP_USER_AGENT' ];
$is_ie      = preg_match( '/Edge/i', $user_agent ) || preg_match( '/Trident/i', $user_agent );
?>

<footer>
    <div class="">
        <div class="mobile-footer container">
            <div class="panel-group" id="footer-accordion">
                <div class="accordion-toggle">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <div class="accordion-toggle" data-toggle="collapse" data-parent="#footer-accordion"
                                     href="#footerSolutions">
                                    Solutions
                                </div>
                            </h4>
                        </div>
                        <div id="footerSolutions" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="container">
                                    <ul>
                                        <li><a href="/solutions/">Solutions</a></li>
                                        <li><a href="/solutions/#content__marketing">For Marketers</a></li>
                                        <li><a href="/solutions/#content__product">For Product Managers</a></li>
                                        <li><a href="/solutions/#content__designers">For Experience Designers</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-toggle">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <div class="accordion-toggle" data-toggle="collapse" data-parent="#footer-accordion"
                                     href="#footerAbout">
                                    About
                                </div>
                            </h4>
                        </div>
                        <div id="footerAbout" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="container">
                                    <ul>
                                        <li><a href="/about/">About</a></li>
                                        <li><a href="/about/#mission">Our Mission</a></li>
                                        <li><a href="/about/#leadership">Leadership</a></li>
                                        <li><a href="/about/#culture">Culture</a></li>
                                        <li><a href="/about/#careers">Careers</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-toggle">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <div class="accordion-toggle" data-toggle="collapse" data-parent="#footer-accordion"
                                     href="#footerResources">
                                    Resources
                                </div>
                            </h4>
                        </div>
                        <div id="footerResources" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="container">
                                    <ul>
                                        <li><a href="/customer-experience-advantage">White Papers</a></li>
                                        <li><a href="/privacy-policy">Privacy Policy</a></li>
                                        <li><a href="/terms-and-conditions">Terms &amp; Conditions</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-toggle">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="/blog/"><h4 class="panel-title">Blog</h4></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="main-footer container">
            <div class="row">
                <div class="col-md-3">
                    <a href="/solutions/"><h4>Solutions</h4></a>
                    <ul>
                        <li><a href="/solutions/#content__marketing">For Marketers</a></li>
                        <li><a href="/solutions/#content__product">For Product Managers</a></li>
                        <li><a href="/solutions/#content__designers">For Experience Designers</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <a href="/about/"><h4>About</h4></a>
                    <ul>
                        <li><a href="/about/#mission">Our Mission</a></li>
                        <li><a href="/about/#leadership">Leadership</a></li>
                        <li><a href="/about/#culture">Culture</a></li>
                        <li><a href="/about/#careers">Careers</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <a href="#"><h4>Resources</h4></a>
                    <ul>
                        <li><a href="/customer-experience-advantage">White Papers</a></li>
                        <li><a href="/privacy-policy">Privacy Policy</a></li>
                        <li><a href="/terms-and-conditions">Terms &amp; Conditions</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <a href="/blog/"><h4>Blog</h4></a>
                </div>
                <div class="col-md-3 text-right address">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/map-marker.png" alt="Location point logo" />
                    <address>
                        N Ellsworth &amp; 1st Street<br/>
                        San Mateo, California 94401
                    </address>
                    <p>(650) 931-4423</p>
                </div>
            </div>
        </div>

        <div class="container sub-footer">
            <div class="row">
                <div class="col-md-4 copyright">
                    &copy; Truthlab <?php echo date( "Y" ); ?>
                </div>
                <div class="col-md-8 text-right">
                    <a href="/contact/" class="contact">Contact Us</a>
					<?php if ( $is_ie ): ?>
                        <ul>
                            <li><a href="https://www.linkedin.com/company/10992459/" target="_blank"><img
                                            src="<?php echo get_template_directory_uri() ?>/assets/img/linkedin.png"
                                            height="40" style="height:40px !important;"/></a></li>
                            <li><a href="https://www.facebook.com/truthlabtech/" target="_blank"><img
                                            src="<?php echo get_template_directory_uri() ?>/assets/img/facebook.png"
                                            height="40" style="height:40px !important;"/></a></li>
                            <li><a href="https://twitter.com/truthlabtech?lang=en" target="_blank"><img
                                            src="<?php echo get_template_directory_uri() ?>/assets/img/twitter.png"
                                            height="40" style="height:40px !important;"/></a></li>
                            <li><a href="https://plus.google.com/109045923061674684524" target="_blank"><img
                                            src="<?php echo get_template_directory_uri() ?>/assets/img/google-plus.png"
                                            height="40" style="height:40px !important;"/></i></a></li>
                        </ul>
					<?php else: ?>
                        <ul>
                            <li><a href="https://www.linkedin.com/company/10992459/" target="_blank"><i
                                            class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.facebook.com/truthlabtech/" target="_blank"><i
                                            class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a></li>
                            <li><a href="https://twitter.com/truthlabtech?lang=en" target="_blank"><i
                                            class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a></li>
                            <li><a href="https://plus.google.com/109045923061674684524" target="_blank"><i
                                            class="fa fa-google-plus-square fa-2x" aria-hidden="true"></i></a></li>
                        </ul>
					<?php endif; ?>
                </div>
            </div>
        </div>
</footer>

<a id="back-to-top" href="#" style="display: none"></a>

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
        <img height="1" width="1" style="border-style:none;" alt=""
             src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/844391891/?guid=ON&amp;script=0"/>
    </div>
</noscript>


<?php if ( is_page( 'contact' ) ): ?>

    <!-- Google Code for demo/contact Conversion Page -->
    <script type="text/javascript">
        /* <![CDATA[ */
        var google_conversion_id = 844391891;
        var google_conversion_label = "UmeHCNm_tHgQ08vRkgM";
        var google_remarketing_only = false;
        /* ]]> */
    </script>
    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
    </script>
    <noscript>
        <div style="display:inline;">
            <img height="1" width="1" style="border-style:none;" alt=""
                 src="//www.googleadservices.com/pagead/conversion/844391891/?label=UmeHCNm_tHgQ08vRkgM&amp;guid=ON&amp;script=0"/>
        </div>
    </noscript>

<?php endif; ?>

<?php wp_footer(); ?>

<?php
if ( is_the_blog() ) {
	get_template_part( 'partials/blog', 'footer_code' );
}
?>
<script>
    AOS.init({
        easing: 'ease-out-back',
        duration: 1500,
        once: true,
        offset: 200,
        disable: 'mobile'
    });
</script>
</body>
</html>