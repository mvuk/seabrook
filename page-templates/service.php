<?php
/**
 * Template Name: Service
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

<div class="swl-flex-col story">

	<div class="introduction">
		<div class="row">
			<div class="col-12">
				<h1>Workplace Investigations and Training</h1>
			</div>
		</div>
	</div>

	<div class="vertical-stack-service-group">
		<div class="service-group">
			<div class="row">
				<div class="col">
					<div class="service-left-menu">
						<p>Employees</p>
						<a href="#">Sample Service</a>
						<a href="#">Sample Service</a>
						<a href="#">Sample Service</a>
						<a href="#">Sample Service</a>						
						<p>Employers</p>
						<a href="#">Sample Service</a>
						<a href="#">Sample Service</a>
						<a href="#">Sample Service</a>
						<a href="#">Sample Service</a>
						<p>Workplace Investigations and Training</p>
						<a href="#">Workplace Investigations</a>
						<a href="#">Workplace Climate Reviews</a>
						<a href="#">Workplace Restorative Mediation</a>
						<a href="#">Workplace Training</a>
					</div>
				</div>
				<div class="col">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.</p>
					<p>Where a contract of sale and purchase of your Home has been entered into the purchaser shall be entitled to the benefit of this Section but to get this benefit the purchaser must (a) comply with all the Conditions of the Policy, and (b) claim under any other insurance that has been arranged before claiming under this Policy.</p>
					<p>A majority of the Supreme Court (Justices William Young, O'Regan and Ellen France) dismissed the appeal. The majority discussed Bryant, noting that it had been decided on the basis that, in the context of the policy wording:</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.</p>

				</div>
			</div>
		</div>
	</div>
	

</div>


<!-- END CONTENT -->

<?php get_footer(); ?>
