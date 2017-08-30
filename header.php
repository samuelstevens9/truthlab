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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700|PT+Sans+Narrow:400,700|PT+Sans:400,400i,700,700i|PT+Sans+Caption:400,700|Open+Sans:300,400,400i,600,700|Roboto+Mono:400,700" rel="stylesheet">

	<?php wp_head(); ?>


	<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=598dc016b25a6f00127f1e87&product=inline-share-buttons"></script>
	<script type="text/javascript" src="http://client.blackbearnj.com/tl/wp-content/themes/truthlab/js/imagesloaded.pkgd.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

</head>

<body <?php body_class(); ?>>

  <!-- Fixed navbar -->
	<a class="request-dropdown-mobile request-toggle" style="z-index:555;">Request a Demo <i class="fa fa-angle-right" aria-hidden="true"></i></a>

	</div>
  <nav class="navbar navbar-default navbar-fixed-top">
  	<div class="container">
  		<div class="navbar-header">
  			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
  				<span class="sr-only">Toggle navigation</span>
  				<span class="icon-bar"></span>
  				<span class="icon-bar"></span>
  				<span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo get_site_url() ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/img/truthlab-logo.svg" /></a>
  		</div>
  		<div id="navbar" class="navbar-collapse collapse">
  			<ul class="nav navbar-nav">
  				<li><a href="./solutions">Solutions</a></li>
  				<li><a href="./about-us">About</a></li>
  				<li><a href="./blog">Blog</a></li>
  			</ul>
  			<ul class="nav navbar-nav navbar-right">
  				<li><a href="../navbar/">Sign In</a></li>
  				<li class="search-toggle"><a href="#"><i class="fa fa-search"></i></a></li>
  				<li class="request-toggle"><a href="#" class="button button--red">Request a Demo</a></li>
  			</ul>
  		</div><!--/.nav-collapse -->
  	</div>
  </nav>

	<div class="search-dropdown">
		<form role="search" method="get" id="ajax_searchform" action="<?php echo home_url( '/' ); ?>">
			<div class="container">
				<div class="col-md-10">
					<input type="text" placeholder="Type to Search Blog Articles..." name="s" />
				</div>
				<div class="col-md-2">
					<button type="submit" class="button button--red-outline no-background" value="Search"/>Search</button>
				</div>
			</div>
		</form>
		<a href="#" class="search-toggle" style="position:absolute;top:2%;right:2%;font-size:40px;"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
	</div>

	<div class="request-dropdown">

			<form action="https://dev.truthlab.com/p/api/v2/demo/handler/" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				<h2>Request a Demo</h2>
				<div class="col-md-5">
					<input type="email" value="" name="EMAIL" class="required email" placeholder="Email" id="mce-EMAIL">
				</div>
				<div class="col-md-5">
					<input type="text" value="" name="FULLNAME" class="" placeholder="Full Name" id="mce-FULLNAME">
				</div>
				<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_c2bfa3ee50aeeb2e544284a99_c1e42fec0f" tabindex="-1" value=""></div>
				<div class="col-md-2">
					<input type="submit" value="Submit" name="subscribe" id="mc-embedded-subscribe" class="button button--red-outline" style="margin:0px;"/>
				</div>
				<div id="mce-responses" class="clear">
					<div class="response" id="mce-error-response" style="display:none"></div>
					<div class="response" id="mce-success-response" style="display:none"></div>
				</div>
			</form>
<script>
(function( $ ) {
	$('#mc-embedded-subscribe-form').submit(function(event){event.preventDefault();
		$.post('https://dev.truthlab.com/p/api/v2/demo/handler/', $("#mc-embedded-subscribe-form").serialize());
		$('#mce-success-response').text("Thanks for requesting a demo.  We will reach out soon.");
		$('#mce-success-response').show();
	})
})(jQuery.noConflict());
</script>
		    <a href="#" class="request-toggle" style="position:absolute;top:2%;right:2%;font-size:40px;"><i class="fa fa-times-circle" aria-hidden="true"></i></a>

  </div>
