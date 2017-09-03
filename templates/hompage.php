<?php

/**
 * Template Name: Homepage
 *<li class="request-toggle"><a href="#" class="button button--red">Request a Demo</a></li>
 * @package Truthlab
 */

get_header(); ?>

<section id="curtain-slider">
	<div class="container">
		<div class="container">
			<div class="slider">
			<div class="slide-header active">
		   	<div class="panel">
		      	<div class="top" data-back="BETTER"></div>
					<div class="bottom" data-back="BETTER"></div>
		   	</div>
				<div class="center">
		   		<h1>Create Better</h1>
		   		<a href="#" class="button button--white request-toggle" style="padding-top:100px">Request Demo</a>
					<a href="#" class="down-chevron"><img style="width:30px;height:30px;" src="<?php echo get_template_directory_uri() ?>/assets/img/home/white-chevron-down.svg"/></a>
		   	</div>
			</div>
			<div class="slide-header">
		   	<div class="panel">
		      	<div class="top" data-back="PROFITABLE"></div>
					<div class="bottom" data-back="PROFITABLE"></div>
				</div>
				<div class="center">
		      	<h1>More Profitable</h1>
		      	<a href="#" class="button button--white request-toggle">Request Demo</a>
						<a href="#" class="down-chevron"><img style="width:30px;height:30px;" src="<?php echo get_template_directory_uri() ?>/assets/img/home/white-chevron-down.svg"/></a>
		   		</div>
			</div>
			<div class="slide-header">
		   	<div class="panel">
		      	<div class="top" data-back="EXPERIENCES"></div>
					<div class="bottom" data-back="EXPERIENCES"></div>
		   	</div>
				<div class="center">
		      	<h1>Customer Experiences</h1>
		      	<a href="#" class="button button--white request-toggle">Request Demo</a>
						<a href="#" class="down-chevron"><img style="width:30px;height:30px;" src="<?php echo get_template_directory_uri() ?>/assets/img/home/white-chevron-down.svg"/></a>
		   	</div>
			</div>
			<div class="slide-header">
		   	<div class="panel">
		      	<div class="top" data-back="TRUTHLAB"></div>
					<div class="bottom" data-back="TRUTHLAB"></div>
		   	</div>
				<div class="center">
					<h1>with Truthlab</h1>
					<a href="#" class="button button--white request-toggle">Request Demo</a>
					<a href="#" class="down-chevron"><img style="width:30px;height:30px;" src="<?php echo get_template_directory_uri() ?>/assets/img/home/white-chevron-down.svg"/></a>
		   	</div>
			</div>
		</div>
		</div>
	</div>
</section><script>setInterval(nextSlide, 4*1000);</script>

<section id="about">
	<div class="row">
		<div class="container">
			<div class="col-md-8 col-md-offset-2 text-center heading">
				<h1>Truthlab is a<br/>Customer Experience Management (CXM) company</h1>
				<p>Our proven solutions help B2B companies to deliver consistently amazing customer experiences that drive satisfaction, retention and advocacy.</p>
				<p>We enable companies to orchestrate and analyze customer data, insights and interactions – all on one powerful CXM platform.</p>
			</div>
		</div>
	</div>
</section>

<section id="middle">
	<div class="row top-row">
		<div class="container">
			<div class="col-md-7 col-sm-7 image">
				<img src="<?php echo get_template_directory_uri() ?>/assets/img/home/get-immediate-insights.jpg"/>
			</div>
			<div class="col-md-5 col-sm-5 text-right copy">
				<h2>Get Immediate Insights</h2>
				<p>Instantly extract quantitative and qualitative insights that allow you to make educated customer experience decisions. No more watching hundreds of videos to get what you need.</p>
				<a href="/solutions/" class="button button--blue-outline">Read More</a>
			</div>
		</div>
	</div>

	<div class="row blank" style="z-index:-1;">
		<div class="container">
		</div>
	</div>

	<div class="row bottom-row">
		<div class="container">

			<div class="col-md-7 col-sm-7 col-md-push-5 col-sm-push-5 image">
				<img src="<?php echo get_template_directory_uri() ?>/assets/img/home/watch-highlight-reels.png" />
			</div>
			<div class="col-md-5 col-sm-5 col-md-pull-7 col-sm-pull-7 text-left copy">
				<h2>Watch Highlight Reels</h2>
				<p>The Truthlab platform instantly generates highlight reels of your videos, whether they were created on the platform or elsewhere. No more expensive professional service costs to create actionable insights.</p>
				<a href="https://vimeo.com/232169127?width=640&amp;height=480" rel="wp-video-lightbox" class="button button--blue-outline">Watch Now</a>
			</div>
		</div>
	</div>
</section>

<section id="panel-management">
	<div class="bg-image-red" data-background-src="<?php echo get_template_directory_uri() ?>/assets/img/home/red-line.svg" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/home/red-line.svg');"></div>
	<div class="row">
		<div class="bg-image-blue" data-background-src="<?php echo get_template_directory_uri() ?>/assets/img/home/blue-line.svg" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/home/blue-line.svg');"></div>
		<div class="container">
			<div class="col-md-6 col-sm-6 image">
				<img src="<?php echo get_template_directory_uri() ?>/assets/img/home/panel-management.png" />
			</div>
			<div class="col-md-6 col-sm-6 text-left copy">
				<h2>Take Action with Panel Management</h2>
				<p>Easily invite, register and onboard your testers via email, Slack, IM and message boards, without training or IT involvement. No more professional testers from panel companies.</p>
				<a href="/solutions/" class="button button--blue-outline">Find Out How</a>
			</div>
		</div>
		<div class="container analyze">
			<div class="col-md-6 col-sm-6 text-left copy">
				<h2>Analyze Full Length Video</h2>
				<p>Full access and unlimited storage of your testers’ entire journey with transcription, event logging and complete search capabilities.  And, no more hidden costs.</p>
				<a href="https://vimeo.com/232169127?width=640&amp;height=480" rel="wp-video-lightbox" class="button button--blue-outline">See Video</a>
			</div>
			<div class="col-md-6 col-sm-6 pull-right image">
				<img src="<?php echo get_template_directory_uri() ?>/assets/img/home/full-length-video.png" />
			</div>
		</div>
	</div>
</section>

<section id="clients">
	<div class="row">
		<div class="container text-center">
			<div class="quotes">
				<h2>We work with great people</h2>
				<?php /*
				   <section class="customer-logos">
				      <div class="slide"><img src="https://www.solodev.com/assets/carousel/image1.png"></div>
				      <div class="slide"><img src="https://www.solodev.com/assets/carousel/image2.png"></div>
				      <div class="slide"><img src="https://www.solodev.com/assets/carousel/image3.png"></div>
				      <div class="slide"><img src="https://www.solodev.com/assets/carousel/image4.png"></div>
				      <div class="slide"><img src="https://www.solodev.com/assets/carousel/image5.png"></div>
				      <div class="slide"><img src="https://www.solodev.com/assets/carousel/image6.png"></div>
				      <div class="slide"><img src="https://www.solodev.com/assets/carousel/image7.png"></div>
				      <div class="slide"><img src="https://www.solodev.com/assets/carousel/image8.png"></div>
				   </section> */ ?>
				<h5>Hear what some have to say</h5>
	      <div id="tcb-testimonial-carousel" class="carousel slide" data-ride="carousel">
	          <!-- Indicators -->
	          <ol class="carousel-indicators">
	              <li data-target="#tcb-testimonial-carousel" data-slide-to="0" class="active"></li>
	              <li data-target="#tcb-testimonial-carousel" data-slide-to="1"></li>
	              <li data-target="#tcb-testimonial-carousel" data-slide-to="2"></li>
	          </ol>
	          <!-- Wrapper for slides -->
	          <div class="carousel-inner">
								<div class="item active">
	                  <div class="row">
											<div class="col-xs-8 col-xs-offset-2 col-md-6 col-md-offset-1 text-left">
												We are in the experience economy. Organizations must adopt a technology, process and a 
												customer centric culture to avoid being left behind. In three short months, 
												Truthlab has identified more actions to take than we had identified in the three prior years!
											</div>
											<div class="col-xs-12 col-md-4 testimonial__author">
												<img src="<?php echo get_template_directory_uri() ?>/assets/img/home/t_dell.png"/>
												<div>
													Maryanne P.<br /> 
													Dir. Customer Experience<br />
													Dell<br />
												</div>
											</div>
	                  </div>
	              </div>
								<div class="item">
	                  <div class="row">
											<div class="col-xs-8 col-xs-offset-2 col-md-6 col-md-offset-1 text-left">
												Every part of our business influences our Customer Experience. 
												Truthlab gives us the insight to understand which experiences need to improve.
											</div>
											<div class="col-xs-12 col-md-4 testimonial__author">
												<img src="<?php echo get_template_directory_uri() ?>/assets/img/home/t_microsoft.png"/>
												<div>
												Mark M. <br />
												Customer Experience Researcher<br />
												Microsoft<br />
												</div>
											</div>
	                  </div>
	              </div>
								<div class="item">
	                  <div class="row">
											<div class="col-xs-8 col-xs-offset-2 col-md-6 col-md-offset-1 text-left">
												Here at Cisco, we have always put the customer first. 
												Truthlab allows us to leverage our existing process and methodology within their platform to close the gaps that were previously identified.
											</div>
											<div class="col-xs-12 col-md-4 testimonial__author">
												<img src="<?php echo get_template_directory_uri() ?>/assets/img/home/t_cisco.png"/>
												<div>
												Bill T. <br />
												Dir. Customer Marketing<br />
												Cisco<br />
												</div>
											</div>
	                  </div>
	              </div>
	          </div>
	          <!-- Controls --
	          <a class="left carousel-control" href="#tcb-testimonial-carousel" data-slide="prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
	          <a class="right carousel-control" href="#tcb-testimonial-carousel" data-slide="next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
						-->
						<a class="left carousel-control" href="#tcb-testimonial-carousel" data-slide="prev"><img src="<?php echo get_template_directory_uri() ?>/assets/img/home/blue-chevron-left.svg"/></a>
	          <a class="right carousel-control" href="#tcb-testimonial-carousel" data-slide="next"><img src="<?php echo get_template_directory_uri() ?>/assets/img/home/blue-chevron-right.svg"/></a>
    		</div>
			</div>
    </div>
	</div>
</section>

<section id="cta">
  <div class="container">
    <div class="row cta__red">
      <div class="col-md-7">
        <h2>Create Better Customer Experiences</h2>
        <div class="white"></div>
        <p>Learn how Truthlab can help you track, measure and improve every aspect of your customers’ journey.</p>
      </div>
			<div class="col-md-1"></div>
      <div class="col-md-4 text-right">
        <a href="#" class="button button--white request-toggle">Request a Demo</a>
      </div>
    </div>
  </div>
</section>

<?
get_footer();
