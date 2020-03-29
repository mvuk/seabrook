<?php
/**
 * Template Name: Legal Services
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

<div class="row">
	<div class="col-12">
		<h1>Legal Services</h1>
	</div>
</div>

<div class="row">
	<div class="col-6">
		<div class="card">
			<div class="card-body">
				<h2>Workplace Investgations & Training</h2>
				<p>summary</p>
				<a href="#">Read More →</a>
			</div>
		</div>
	</div>
	<div class="col-6">
		<div class="card">
			<div class="card-body">
				<h2>Workplace Investgations & Training</h2>
				<p>summary</p>
				<a href="#">Read More →</a>
			</div>
		</div>
	</div>
	<div class="col-6">
		<div class="card">
			<div class="card-body">
				<h2>Workplace Investgations & Training</h2>
				<p>summary</p>
				<a href="#">Read More →</a>
			</div>
		</div>
	</div>
	<div class="col-6">
		<div class="card">
			<div class="card-body">
				<h2>Workplace Investgations & Training</h2>
				<p>summary</p>
				<a href="#">Read More →</a>
			</div>
		</div>
	</div>
</div>

<!-- END CONTENT -->

<?php get_footer(); ?>
