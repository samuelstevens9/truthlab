<?php
/**
 * The header for our theme.
 *
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700|PT+Sans+Narrow:400,700|PT+Sans:400,400i,700,700i|PT+Sans+Caption:400,700|Open+Sans:300,400,400i,600,700|Roboto+Mono:400,700" rel="stylesheet">

	<?php wp_head(); ?>


	<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=598dc016b25a6f00127f1e87&product=inline-share-buttons"></script>
	<script type="text/javascript" src="http://client.blackbearnj.com/tl/wp-content/themes/truthlab/js/imagesloaded.pkgd.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>

<body <?php body_class(); ?>>

  <!-- Fixed navbar -->
  <nav class="navbar navbar-default navbar-fixed-top">
  	<div class="container">
  		<div class="navbar-header">
  			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
  				<span class="sr-only">Toggle navigation</span>
  				<span class="icon-bar"></span>
  				<span class="icon-bar"></span>
  				<span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/truthlab-logo.svg" /></a>
  		</div>
  		<div id="navbar" class="navbar-collapse collapse">
  			<ul class="nav navbar-nav">
  				<li class="active"><a href="#">Solutions</a></li>
  				<li><a href="#about">About</a></li>
  				<li><a href="#contact">Blog</a></li>
  			</ul>
  			<ul class="nav navbar-nav navbar-right">
  				<li><a href="../navbar/">Sign In</a></li>
  				<li><a href="../navbar-static-top/"><i class="fa fa-search"></i></a></li>
  				<li>
            <a href="#" class="button button--red">Subscribe</a>
          </li>
  			</ul>
  		</div><!--/.nav-collapse -->
  	</div>
  </nav>
