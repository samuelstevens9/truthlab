<?php
/**
 * The template for displaying the footer.
 */
?>

<footer>
  <div class="row">

    <div class="mobile-footer container">
      <div class="panel-group" id="accordion">
        <div class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <div class="accordion-toggle">
                  Solutions
                </div>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse">
              <div class="panel-body">
                <div class="container">
                  <ul>
                    <li><a href="/solutions/"><h4>Solutions</h4></a></li>
                    <li><a href="/solutions/#content__marketing">For Marketers</a></li>
                    <li><a href="/solutions/#content__product">For Product Managers</a></li>
                    <li><a href="/solutions/#content__designers">For Experience Designers</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <div class="accordion-toggle">
                  About
                </div>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
              <div class="panel-body">
                <div class="container">
                  <ul>
                    <li><a href="/about/"><h4>About</h4></a></li>
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
        <div class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <div class="accordion-toggle">
                  Resources
                </div>
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
              <div class="panel-body">
                <div class="container">
                  <ul>
                    <li><a href="/customer-experience-advantage">White Papers</a></li>
                    <li><a href="/privacy-policy">Privacy Policy</a></li>
                    <li><a href="/terms-and-conditions">Terms &amp; Conditions</a></li>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-toggle">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <div class="accordion-toggle">
                  <a href="/blog/"><h4>Blog</h4></a>
                </div>
              </h4>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="main-footer container">
      <div class="col-md-2">
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
          <!--
          <li><a href="#">Guides</a></li>
          <li><a href="#">System Styles</a></li>
          <li><a href="#">Press</a></li>
          -->
          <li><a href="/privacy-policy">Privacy Policy</a></li>
          <li><a href="/terms-and-conditions">Terms &amp; Conditions</a></li>
        </ul>
      </div>
      <div class="col-md-2">
        <a href="/blog/"><h4>Blog</h4></a>
      </div>
      <div class="col-md-4 text-right address">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/map-marker.png"/>
        <address>
        N Ellsworth &amp; 1st Street<br/>
        San Mateo, California 94401
        </address>
        <p>650.123.4567</p>
      </div>
    </div>

    <div class="container sub-footer">
      <div class="col-md-4 copyright">
        &copy; Truthlab <?php echo date("Y"); ?>
      </div>
      <div class="col-md-8 text-right">
        <a href="#" class="contact">Contact Us</a>
        <ul>
					<li><a href="https://www.linkedin.com/company/10992459/" target="_blank"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a></li>
					<li><a href="https://www.facebook.com/truthlabtech/" target="_blank"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a></li>
					<li><a href="https://twitter.com/truthlabtech?lang=en" target="_blank"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a></li>
					<li><a href="https://plus.google.com/109045923061674684524" target="_blank"><i class="fa fa-google-plus-square fa-2x" aria-hidden="true"></i></a></li>
				</ul>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
