<?php
/**
 * Template Name: Stories
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

<div class="swl-flex-col">

	<div class="introduction">
		<div class="row">
			<div class="col-12">
				<h1>Stories.</h1>
			</div>
		</div>
	</div>

	<div class="vertical-stack-service-group">
		<div class="service-group">
			<div class="stories-list">
				<a href="/stories/sample-story" class="story-link">
					<h2>Story Title</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.</p>
				</a>
				<a href="/stories/sample-story" class="story-link">
					<h2>Story Title</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.</p>
				</a>
				<a href="/stories/sample-story" class="story-link">
					<h2>Story Title</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.</p>
				</a>				
			</div>
		</div>
	</div>
	

</div>


<!-- END CONTENT -->

<?php get_footer(); ?>
