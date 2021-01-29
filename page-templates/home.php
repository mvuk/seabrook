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

		<div class="col-md-6 home-left">
			<div class="home-introduction">
				<img src="/wp-content/uploads/2021/01/SWL_Logo_Web_White.png" alt="" class="logo">
				<h1>Seabrook Workplace Law is the boutique employment law firm you’ve been looking for.</h1>
				<div class="find-out-more">
					<a href="#blue-bb">
						<div class="text">
							Find out more
						</div>
						<div class="down-arrow">
							<img src="" alt="">
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="col-md-6 home-image">

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
				<img src="/wp-content/uploads/2021/01/201122-RV-Seabrook-WPL-6770.jpg" alt="">
				<h3>Our Values</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>

			<div class="col-md-4">
				<img src="/wp-content/uploads/2021/01/201108-RV-Seabrook-WPL-5364.jpg" alt="">
				<h3>Our Team</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>

			<div class="col-md-4">
				<img src="/wp-content/uploads/2021/01/201108-RV-Seabrook-WPL-5543-scaled.jpg" alt="">
				<h3>Our Clients</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>

		</div>

	</div>
</div>

<div class="gray-bar">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="gray-bar-services">
				<h2>Our Services</h2>
				<p>just like gray bar on phantom.house</p>
				<a href="#">View all legal services</a>
			</div>
		</div>
	</div>
</div>
</div>

<?php

get_footer();
