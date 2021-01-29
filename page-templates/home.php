<?php
/**
 * Template Name: Home
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

<div class="container-fluid">

<div class="row">

	<div class="col-md-6 home-left">
		<div class="home-introduction">
			<img src="/wp-content/uploads/2021/01/SWL_Logo_Web_White.png" alt="" class="logo">
			<h1>Seabrook Workplace Law is the boutique employment law firm you’ve been looking for.</h1>
			<div class="find-out-more">
				<a href="#">
					<div class="text">
						Find out more
					</div>
					<div class="down-arrow">
						<img src="" alt="">
					</div>
				</a>
			</div>
		</div>
	</div>
	<div class="col-md-6 home-image">

	</div>

</div>

</div>

<?php

get_footer();
