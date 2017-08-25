<?php

/**
 * Template Name: Solutions
 *
 * @package Truthlab
 */

get_header(); ?>

<section id="curtain-slider">
	<div class="container">
		<div class="container">
			<div class="slider">
			<div class="slide-header active">
		   	<div class="panel">
		      	<div class="top" data-back="SOLVED"></div>
					<div class="bottom" data-back="SOLVED"></div>
		   	</div>
				<div class="center">
		   		<h1>Problem Solved</h1>
		   		<a href="#" class="button button--white" style="padding-top:100px">Request Demo</a>
					<a href="#" class="down-chevron"><img style="width:30px;height:30px;" src="<?php echo get_template_directory_uri() ?>/assets/img/home/white-chevron-down.svg"/></a>
		   	</div>
			</div>
		</div>
		</div>
	</div>
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
        <li class="active"><a data-toggle="tab" href="#overview">Overview</a></li>
        <li><a data-toggle="tab" href="#marketers">For Marketers</a></li>
				<li><a data-toggle="tab" href="#product-managers">For Product Managers</a></li>
				<li><a data-toggle="tab" href="#ux-professionals">For UX Professionals</a></li>
	    </ul>
	    <div class="tab-content">
        <div id="overview" class="tab-pane fade in active">
					<div class="col-md-8 col-md-offset-2">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/home/panel-management.png" />
            <h3>Our CXM Solutions</h3>
						<div class="content">
							<p>The current customer feedback loop takes weeks and doesn't fit into anyone's release cycles. With Truthlab, you gt instant insights to make critical changes.</p>
							<p>What you once paid agencies or tester recruiting applications to do is now on demand.</p>
							<p>Truthlab allows you to get the insights that are buried within thousands of hours of user research videos without requiring you or your team watching a single frame.</p>
						</div>
						<a href="#" class="button button--blue-outline">Request a Demo</a>
					</div>
        </div>
        <div id="marketers" class="tab-pane fade">
					<div class="col-md-8 col-md-offset-2">
						<h3>For Marketers</h3></h3>
						<p>Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui. Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
					</div>
        </div>
				<div id="product-managers" class="tab-pane fade">
					<div class="col-md-8 col-md-offset-2">
						<h3>For Product Managers</h3>
						<p>Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui. Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
					</div>
        </div>
				<div id="ux-professionals" class="tab-pane fade">
					<div class="col-md-8 col-md-offset-2">
						<h3>For UX Professionals</h3>
						<p>Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui. Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
					</div>
        </div>
	    </div>
		</div>
	</div>
</section>

<!--
<div class="bg-image-blue" data-background-src="<?php echo get_template_directory_uri() ?>/assets/img/home/blue-line.svg" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/home/blue-line.svg');"></div>
-->

<section id="content__solutions" style=="background-color:white;">
	<div class="bg-image-red" data-background-src="<?php echo get_template_directory_uri() ?>/assets/img/home/red-line.svg" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/home/red-line.svg');"></div>
		<div class="row marketing">
			<div class="container">
				<div class="col-md-2">
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/home/panel-management.png" />
				</div>
				<div class="col-md-8">
					<img class="round" src="<?php echo get_template_directory_uri() ?>/assets/img/solutions/marketer.jpg"/>
				</div>
				<div class="col-md-2">
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/home/panel-management.png" />
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
        <a href="#" class="button button--white">Request a Demo</a>
      </div>
    </div>
  </div>
</section>

<?
get_footer();
