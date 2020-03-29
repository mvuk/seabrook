<?php
/**
 * Template Name: Home
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

while ( have_posts() ) :
	the_post();
	get_template_part( 'loop-templates/content', 'empty' );
endwhile;

?>

<!-- BEGIN CONTENT -->

<div class="swl-flex-row">
	<div class="left-col-image">

	</div>
	<div class="right-content home-vertical-split">
		<div class="home-summary">
			<div class="row">
				<div class="col">
					<h1>An Employment Law firm for all.</h1>
				</div>
			</div>
		</div>
		<div class="home-content">
			<div class="row">
				<div class="col">
					<p>introduction content</p>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- END CONTENT -->

<?php get_footer(); ?>
