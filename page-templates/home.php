<?php
/**
 * Template Name: Home
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

while ( have_posts() ) :
	the_post();
	get_template_part( 'loop-templates/content', 'empty' );
endwhile;

?>

<div class="container-fluid home-slider-container">

	<div class="row">

		<div class="col-md-5 home-left">
			<div class="home-introduction">
				<a href="/">
					<img src="/wp-content/uploads/2021/01/SWL_Logo_Web.png" alt="" class="logo">
				</a>
				<h1>Seabrook Workplace Law is the boutique employment law firm you’ve been looking for.</h1>
				<div class="find-out-more animate__animated animate__shakeY animate__slower animate__delay-2s">
					<a href="#blue-bb">
						<div class="text">
							Find out more
						</div>
						<i class="fa fa-long-arrow-down "></i>
					</a>
				</div>
			</div>
		</div>
		<div class="col home-image">

		</div>

	</div>

</div>

<div class="blue-below-header" id="blue-bb">

	<div class="container">

		<div class="row row-one justify-content-end">
			<div class="col-md-9">
				<h2>Our firm started with Samantha, our founding lawyer, and her vision to make employment law accessible to all.</h2>
			</div>
		</div>

		<div class="row row-two ">
			<div class="col-md-9">
				<p>Our firm started with Samantha, our founding lawyer, and her vision to make employment law accessible to all. Our firm started with Samantha, our founding lawyer, and her vision to make employment law accessible to all. Our firm started with Samantha, our founding lawyer, and her vision to make employment law accessible to all.</p>
			</div>
		</div>

	</div>

</div>

<div class="three-items">
	<div class="container">

		<div class="row">

			<div class="col-md-4">
				<div class="item animate__animated animate__fadeIn animate__slower animate__delay-2s">
					<a href="/our-values/">
						<img src="/wp-content/uploads/2021/01/201122-RV-Seabrook-WPL-6770.jpg" alt="">
						<h3>Our Values</h3>
					</a>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

				</div>
			</div>

			<div class="col-md-4">
				<div class="item animate__animated animate__fadeIn  animate__delay-3s">
					<a href="/our-legal-team/">
						<img src="/wp-content/uploads/2021/01/201108-RV-Seabrook-WPL-5364.jpg" alt="">
						<h3>Our Team</h3>
					</a>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>

			</div>

			<div class="col-md-4">
				<div class="item animate__animated animate__fadeIn  animate__delay-4s">
					<a href="/our-clients/">
						<img src="/wp-content/uploads/2021/01/201108-RV-Seabrook-WPL-5543-scaled.jpg" alt="">
						<h3>Our Clients</h3>
					</a>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>

			</div>

		</div>

	</div>
</div>

<div class="gray-bar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="gray-bar-services">
					<h2>Workplace Legal Services</h2>
					<p>just like gray bar on phantom.house</p>
					<a href="/workplace-law-services/">
						<div class="text">
							View all services
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php

get_footer();
