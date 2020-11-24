<?php
/**
 * Template Name: Services
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

<div class="swl-dark-banner">
	<div class="container">

		<p>Quote about SWL placed here</p>

	</div>
</div>

<div class="container">

	<div class="row">
		<div class="col-md-6">
			<h2>Good People, good service.</h2>
			<p>At Seabrook workplace law...</p>
			<p>Are you an</p>
			<p>Employee | Employer</p>
		</div>
		<div class="col-md-6">
			<p>[img]</p>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">

			<h3>Employer</h3>
			<p>As an employer...</p>

			<h4>Growth & foundations</h4>
			<ul>
				<li>point</li>
				<li>point</li>
				<li>point</li>
			</ul>

			<h4>Issue resolution</h4>
			<ul>
				<li>point</li>
				<li>point</li>
				<li>point</li>
			</ul>

			<h4>Employment innovation</h4>
			<ul>
				<li>point</li>
				<li>point</li>
				<li>point</li>
			</ul>

		</div>
		<div class="col-md-6">
			<p>[img]</p>
		</div>
	</div>

	<div class="row">

		<div class="col-md-6">
			<p>[img]</p>
		</div>

		<div class="col-md-6">

			<h3>Employee</h3>
			<p>As an employee...</p>

			<h4>Growth & foundations</h4>
			<ul>
				<li>point</li>
				<li>point</li>
				<li>point</li>
			</ul>

			<h4>Issue resolution</h4>
			<ul>
				<li>point</li>
				<li>point</li>
				<li>point</li>
			</ul>

		</div>

	</div>

	<div class="row">

		<div class="col-md-12">
			<p>At seabrook workplace law...</p>
			<p>Read our Client Stories</p>
			<p>Find out more about our Values</p>
			<p>Contact Us</p>
		</div>

	</div>

</div>

<div class="blog-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<p>latest from our workplace law blog</p>
			</div>
			<div class="col-md-4">
				<p>[blog img]</p>
			</div>
			<div class="col-md-4">
				<p>[blog img]</p>
			</div>
			<div class="col-md-4">
				<p>[blog img]</p>
			</div>
		</div>
	</div>
</div>

<div class="contact-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>How can we help?</h2>
				<p>Contact us</p>
			</div>
		</div>
	</div>
</div>

<?php

get_footer();
