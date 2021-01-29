<?php
/**
 * Template Name: Investigations training
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

<div class="wide-header-dark service">

		<div class="wide-header-dark-content">
			<a href="/" class="logo-link">
				<img src="/wp-content/uploads/2021/01/SWL_Logo_Web_White.png" alt="" class="logo">
			</a>
			<!-- RETURN AREA -->
			<a href="/workplace-law-services/" class="return-btn border-btn white">Return to services</a>
			<!-- END RETURN AREA -->
			<h1>Workplace Investigations & Training</h1>
			<p>Seabrook Workplace law offers serious services for serious clients. We really know what we are doing.</p>
		</div>

</div>

<div class="wide-content">

<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<div class="featued-text">
				<h2>Summary item</h2>
				<h2>Summary item</h2>
				<h2>Summary item</h2>
				<h2>Summary item</h2>
			</div>
		</div>
		<div class="col-md-9">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>
		</div>
	</div>
</div>

</div>

<?php

get_footer();
