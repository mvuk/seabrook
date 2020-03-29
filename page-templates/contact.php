<?php
/**
 * Template Name: Contact
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

<div class="swl-flex-row contact">
	<div class="left-col-image">

	</div>
	<div class="right-content conact-vertical-split">
		<div class="contact-summary">
			<div class="row">
				<div class="col">
					<p>410 Adelaide Street West
					<br>Suite 220
					<br>Toronto, Ontario
					<br>M5V 1S8</p>
				</div>
				<div class="col">
					<p>T: 647-361-4410</p>
					<p>F: 647-361-3143</p>
					<p>info@seabrookworkplacelaw.ca</p>
				</div>
			</div>
		</div>
		<div class="contact-form">
			<p>[contact form]</p>
		</div>
	</div>
</div>

<!-- END CONTENT -->

<?php get_footer(); ?>
