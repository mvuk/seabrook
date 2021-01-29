<?php
/**
 * Template Name: Team
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

<div class="half-container">

	<div class="left-area">
		<div class="left-area-container">
			<img src="/wp-content/uploads/2021/01/SWL_Logo_Web_White.png" alt="" class="logo">
			<h1>Who makes it happen?</h1>
			<p>Our legal team is top notch lawyers only. They are competent and happy and skilled.</p>
			<p>Explore the profiles of our lawyers.</p>
		</div>
	</div>

</div>

<div class="page-content half-page">

	<div class="row">
		<div class="col-md-12">

			<div class="team-card">
				<img src="/wp-content/uploads/2021/01/201108-RV-Seabrook-WPL-6189.jpg" alt="">
				<div class="content">
					<h2>Samantha<br>Seabrook</h2>
					<p>Our founder and visionary woman. Samantha is warm, sharp, and ready to give you confidence in your case.</p>
					<a href="/our-legal-team/samantha-seabrook/">Get to know her</a>
				</div>
			</div>

			<div class="team-card">
				<img src="/wp-content/uploads/2021/01/201108-RV-Seabrook-WPL-6037.jpg" alt="">
				<div class="content">
					<h2>Karina<br>Pogosyan</h2>
					<p>Our founder and visionary woman. Samantha is warm, sharp, and ready to give you confidence in your case.</p>
					<a href="/our-legal-team/karina-pogosyan/">Get to know her</a>
				</div>
			</div>

			<div class="team-card">
				<img src="/wp-content/uploads/2021/01/201108-RV-Seabrook-WPL-5973.jpg" alt="">
				<div class="content">
					<h2>Sanam<br>Nazir</h2>
					<p>Our founder and visionary woman. Samantha is warm, sharp, and ready to give you confidence in your case.</p>
					<a href="/our-legal-team/sanam-nazir/">Get to know her</a>
				</div>
			</div>


		</div>
	</div>

</div>

<?php

get_footer();
