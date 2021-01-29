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

<div class="page-halves">

	<div class="half-header">

			<div class="half-header-content">
				<a href="/">
					<img src="/wp-content/uploads/2021/01/SWL_Logo_Web_White.png" alt="" class="logo">
				</a>
				<div class="text">
					<h1>Employment Law Services</h1>
					<p>Seabrook has experience on both sides of the equation, and we can help anyone. Seabrook has experience on both sides of the equation, and we can help anyone. Seabrook has experience on both sides of the equation, and we can help anyone.</p>
				</div>
				<div class="filler-area">

				</div>
			</div>

	</div>

	<div class="half-content">

		<div class="row">

			<div class="col-md-4">

			</div>
			<div class="col-md-4">

			</div>
			<div class="col-md-4">

			</div>

		</div>

	</div>

</div>

<?php

get_footer();
