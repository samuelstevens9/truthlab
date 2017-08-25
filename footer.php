<?php
/**
 * The template for displaying the footer.
 */
?>

<footer>
  <div class="row">

    <div class="mobile-footer container">
      <div class="panel-group" id="accordion">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
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
                    <li>Benefits</li>
                    <li>Insights Platform</li>
                    <li>Request Demo</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </a>
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
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
                    <li>Our Story</li>
                    <li>Our Mission</li>
                    <li>Careers</li>
                    <li>Partners</li>
                    <li>Customers</li>
                    <li>Investors</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </a>
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
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
                    <li>White Papers</li>
                    <li>Guides</li>
                    <li>System Styles</li>
                    <li>Press</li>
                    <li>Terms &amp; Privacy</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </a>
        <a class="accordion-toggle" data-toggle="collapse">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <div class="accordion-toggle">
                  Solutions
                </div>
              </h4>
            </div>
          </div>
        </a>

      </div>
    </div>

    <div class="main-footer container">
      <div class="col-md-2">
        <a href="#"><h4>Solutions</h4></a>
        <ul>
          <li><a href="#">Benfits</a></li>
          <li><a href="#">Insights Platform</a></li>
          <li><a href="#">Request Demo</a></li>
        </ul>
      </div>
      <div class="col-md-2">
        <a href="#"><h4>About</h4></a>
        <ul>
          <li><a href="#">Our Story</a></li>
          <li><a href="#">Our Mission</a></li>
          <li><a href="#">Careers</a></li>
          <li><a href="#">Partners</a></li>
          <li><a href="#">Customers</a></li>
          <li><a href="#">Investors</a></li>
        </ul>
      </div>
      <div class="col-md-2">
        <a href="#"><h4>Resources</h4></a>
        <ul>
          <li><a href="#">White Papers</a></li>
          <li><a href="#">Guides</a></li>
          <li><a href="#">System Styles</a></li>
          <li><a href="#">Press</a></li>
          <li><a href="#">Terms &amp; Privacy</a></li>
        </ul>
      </div>
      <div class="col-md-2">
        <a href="#"><h4>Blog</h4></a>
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
					<li><a href="https://www.linkedin.com/company-beta/10992459/"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a></li>
					<li><a href="https://www.facebook.com/truthlabtech/"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a></li>
					<li><a href="https://twitter.com/truthlabtech?lang=en"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a></li>
					<li><a href="https://twitter.com/truthlabtech?lang=en"><i class="fa fa-google-plus-square fa-2x" aria-hidden="true"></i></a></li>
				</ul>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
