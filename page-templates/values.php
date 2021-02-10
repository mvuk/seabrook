<?php
/**
 * Template Name: Our Values
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


<div class="wide-header-dark about">

		<div class="wide-header-dark-content">
			<a href="/" class="logo-link">
				<img src="/wp-content/uploads/2021/01/SWL_Logo_Web_White.png" alt="" class="logo">
			</a>

			<h1>Our Values</h1>
		</div>

</div>

<div class="content-area">
	<div class="container">
		<div class="row">
				<div class="col">
					<p><strong>"Good People, Good Work"</strong> is our guiding value at SWL. To us, good people doing good work means creating an environment where the individual can thrive as a leader in their workplace and in their community. "Good People, Good Work" is a reflection of our clients, who are workplace leaders in their industries, and who we are at SWL.</p>
					<p>At SWL, Good People, Good Work starts with living our values.</p>

				</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h2>Service</h2>
				<p>We are of service to our clients and our community.</p>
				<p>We use our legal expertise to enable, protect, and create opportunities for people and organizations to grow and thrive. We seek to provide only the best client care, truly integrating with you and your legal matter. </p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h2>Wellness</h2>
				<p>We practice law in a healthy and happy environment. </p>
				<p>We embody and live our values, exercising and implementing healthy practices for our team, our clients, and community outreach initiatives. We understand that happy people make  better decisions, which enables success and growth - both personally, and  professionally. </p>
				<p>Wellness includes the wellness of our planet. SWL creates and implements green systems into our legal practice.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h2>Legacy</h2>
				<p>As legal professionals, we recognize our special responsibility for promoting equality, diversity and inclusion in our practice and in our community. We are committed to creating inclusive workplaces in Canada.</p>
				<p>We strive daily to create a legacy of diversity and inclusion for our team, our clients, and our community. We understand that together we are stronger, more resilient, more capable, and better equipped to deliver excellence. </p>
			</div>
		</div>
	</div>
</div>

<?php

get_footer();
