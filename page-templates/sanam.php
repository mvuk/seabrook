<?php
/**
 * Template Name: Sanam Nazir
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
			<div class="return-button">
				<a href="/our-legal-team/" class="pill-button white">Return to legal team</a>				
			</div>
			<!-- END RETURN AREA -->
			<h1>Sanam Nazir</h1>
			<h2>Lawyer</h2>
		</div>

</div>

<div class="wide-content">

<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<img src="/wp-content/uploads/2021/01/201108-RV-Seabrook-WPL-5973.jpg" alt="">
			<div class="featued-text">
				<p>Summary item</p>
				<p>Summary item</p>
				<p>Summary item</p>
				<p>Summary item</p>
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
