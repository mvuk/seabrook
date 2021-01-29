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


<div class="wide-header-dark">

		<div class="wide-header-dark-content">
			<a href="/" class="logo-link">
				<img src="/wp-content/uploads/2021/01/SWL_Logo_Web_White.png" alt="" class="logo">
			</a>
			<!-- RETURN AREA -->
			<a href="/our-legal-team/" class="return-btn">Return to legal team</a>
			<!-- END RETURN AREA -->
			<h1>Our Values</h1>
			<p>content area</p>
		</div>

</div>

<?php

get_footer();
