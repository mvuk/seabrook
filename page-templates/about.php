<?php
/**
 * Template Name: About
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
				<h2>Good people, good values</h2>
		</div>
		<div class="col-md-6">
			<p>[img]</p>
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
