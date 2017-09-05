<?php

/**
 * Template Name: Solutions
 *
 * @package Truthlab
 */

get_header(); ?>

<section id="hero_solutions" class="">
	<h1 class="front hidden-xs">SOLVED</h1>
	<h3 class="back">Problem Solved</h3>
</section>

<section id="heading__solutions">
	<div class="row">
		<div class="container">
			<div class="col-md-8 col-md-offset-2 text-center heading">
				<h1>We've got the tools you need to succeed. Find your solution.</h1>
			</div>
		</div>
	</div>
</section>

<section id="tabs">
	<div class="row">
		<div class="container">
			<ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#content__solution">Overview</a></li>
        <li><a data-toggle="tab" href="#content__marketing">For Marketers</a></li>
				<li><a data-toggle="tab" href="#content__product">For Product Managers</a></li>
				<li><a data-toggle="tab" href="#content__designers">For Experience Designers</a></li>
	    </ul>
	    <div class="col-md-8 col-md-offset-2 content">
				<div class="content" id="content__solution">
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/home/panel-management.png" />
					<h3>Our CXM Solution</h3>
					<p>The current customer feedback loop takes weeks and doesn't fit into anyone's release cycles. With Truthlab, you get instant insights to make critical changes.</p>
					<p>What you once paid agencies or tester recruiting applications to do is now on demand.</p>
					<p>Truthlab allows you to get the insights that are buried within thousands of hours of user research videos without requiring you or your team watching a single frame.</p>
					<a href="#" class="button button--blue-outline request-toggle">Request a Demo</a>
				</div>
			</div>
		</div>
	</div>
</section>


<!--
<div class="bg-image-blue" data-background-src="<?php echo get_template_directory_uri() ?>/assets/img/home/blue-line.svg" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/home/blue-line.svg');"></div>
-->

<section id="content__marketing">
	<div class="bg-image-red" data-background-src="<?php echo get_template_directory_uri() ?>/assets/img/home/red-line.svg" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/home/red-line.svg');"></div>
		<div class="row marketing">
			<div class="container">
				<div class="col-sm-2 col-sm-push-8">
					<div class="float-image-right-top"><img src="<?php echo get_template_directory_uri() ?>/assets/img/solutions/success-bar-graph-right.svg" alt="success bar graph" /></div>
					<div class="float-image-right" ><img src="<?php echo get_template_directory_uri() ?>/assets/img/solutions/success-circle-graph.svg" alt="success circle graph" /></div>
					<!--
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/home/panel-management.png" />
				-->
				</div>
				<div class="col-sm-8 image">
					<img class="round" src="<?php echo get_template_directory_uri() ?>/assets/img/solutions/marketer.jpg"/>
				</div>
				
				<div class="col-sm-2 col-sm-pull-10">
					<div class="float-image-left"><img src="<?php echo get_template_directory_uri() ?>/assets/img/solutions/success-bar-graph.png" alt="success bar graph" /></div>
					<!--
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/solutions/success-bar-graph.png" style="width:500px;height:500px;"/>
				-->
				</div>
			</div>
			<div class="row row__copy">
				<div class="container">
					<div class="col-sm-6 col-sm-offset-6">
						<div class="solutions__copy">
							<h2>Marketing</h2>
							<p>Driven by the speed of insights, the Truthlab CXM platform meets the daily demands faced by Marketing teams.</p>
							<a href="#">Read our White Paper &gt;&gt;</a>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>

<section id="content__product">
	<div class="bg-image-blue" data-background-src="<?php echo get_template_directory_uri() ?>/assets/img/home/blue-line.svg" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/home/blue-line.svg');"></div>
		<div class="row marketing">
			<div class="container">
				<div class="col-sm-2 col-sm-push-8">
					<div class="float-image-right" ><img src="<?php echo get_template_directory_uri() ?>/assets/img/solutions/arrows_pms_rb-2.svg" alt="project management " /></div>
					<!-- <div class="float-image-right-top" data-background-src="<?php echo get_template_directory_uri() ?>/assets/img/solutions/success-bar-graph-right.svg" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/solutions/success-bar-graph-right.svg');"></div> -->
					<!--
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/home/panel-management.png" />
				-->
				</div>
				<div class="col-sm-8 image">
					<img class="round" src="<?php echo get_template_directory_uri() ?>/assets/img/solutions/product-managers.png"/>
				</div>
				
				<div class="col-sm-2 col-sm-pull-10">
					<div class="float-image-left"><img src="<?php echo get_template_directory_uri() ?>/assets/img/solutions/pmScreenShot.png" alt="panel management screenshot" /></div>
					<!--
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/solutions/success-bar-graph.png" style="width:500px;height:500px;"/>
				-->
				</div>
			</div>
			<div class="row row__copy">
				<div class="container">
					<div class="col-sm-6">
						<div class="solutions__copy">
							<h2>Product Managers</h2>
							<p>Understand and map the customer journey with custom interactive data visualizations that identify key product opportunities.</p>
							<a href="#">Talk to a Specialist Today >></a>
						</div>
					</div>
					<div class="col-sm-6"></div>
				</div>
			</div>
		</div>
</section>

<section id="content__designers">
	<div class="bg-image-red" data-background-src="<?php echo get_template_directory_uri() ?>/assets/img/home/red-line.svg" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/home/red-line.svg');"></div>
		<div class="row marketing">
			<div class="container">
				<div class="col-sm-2 col-sm-push-8">
					<div class="float-image-right" ><img src="<?php echo get_template_directory_uri() ?>/assets/img/solutions/business-development.png" alt="business development" /></div>
					<!--
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/home/panel-management.png" />
				-->
				</div>
				<div class="col-sm-8 image">
					<img class="round" src="<?php echo get_template_directory_uri() ?>/assets/img/solutions/designers.png"/>
				</div>
				<div class="col-sm-2 col-sm-pull-8">
					<div class="float-image-left" ><img src="<?php echo get_template_directory_uri() ?>/assets/img/solutions/salesman.png" alt="sales persona" /></div>
					<!--
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/solutions/success-bar-graph.png" style="width:500px;height:500px;"/>
				-->
				</div>
			</div>
			<div class="row row__copy">
				<div class="container">
					<div class="col-sm-6"></div>
					<div class="col-sm-6">
						<div class="solutions__copy">
							<h2>Experience Designers</h2>
							<p>Identify and analyze audience segments by connecting your user research panel to customizable personas.</p>
							<a href="#">Take a Product Tour Now >></a>
						</div>
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
