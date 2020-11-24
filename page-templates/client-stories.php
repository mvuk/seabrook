<?php
/**
 * Template Name: Client Stories
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

<p>client stories</p>

<?php

get_footer();
