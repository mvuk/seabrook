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

<div class="swl-flex-col legal-services">

	<div class="introduction">
		<div class="row">
			<div class="col-12">
				<h1>Legal Services</h1>
			</div>
		</div>
	</div>

	<div class="vertical-stack-service-group">
		<div class="service-group">
			<h2>For Employees</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.  Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			<div class="service-links">
				<div class="service-link-col">
					<a href="#">Sample Service</a>
					<a href="#">Sample Service</a>
					<a href="#">Sample Service</a>
				</div>
				<div class="service-link-col">
					<a href="#">Sample Service</a>
					<a href="#">Sample Service</a>
					<a href="#">Sample Service</a>
				</div>
			</div>
		</div>
	</div>

	<div class="vertical-stack-service-group">
		<div class="service-group">
			<h2>For Employers</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.  Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			<div class="service-links">
				<div class="service-link-col">
					<a href="#">Sample Service</a>
					<a href="#">Sample Service</a>
					<a href="#">Sample Service</a>
				</div>
				<div class="service-link-col">
					<a href="#">Sample Service</a>
					<a href="#">Sample Service</a>
					<a href="#">Sample Service</a>
				</div>
			</div>
		</div>
	</div>

	<div class="vertical-stack-service-group">
		<div class="service-group">
			<h2>Workplace Investigations and Training</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.  Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			<div class="service-links">
				<div class="service-link-col">
					<a href="#">Workplace Investigations</a>
					<a href="#">Workplace Climate Reviews</a>
					<a href="#">Workplace Restorative Mediation</a>
				</div>
				<div class="service-link-col">
					<a href="#">Workplace Training</a>
				</div>
			</div>
		</div>
	</div>
	

</div>


<!-- END CONTENT -->

<?php get_footer(); ?>
