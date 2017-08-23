<?php
/**
 * The template for displaying the footer.
 */
?>

<footer>
  <div class="row">
    <div class="container main-footer">
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
      <div class="col-md-4">
        &copy; Truthlab <?php echo date("Y"); ?>
      </div>
      <div class="col-md-8 text-right">
        <ul>
          <li><a href="#">Contact Us</li>
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
