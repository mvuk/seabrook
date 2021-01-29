<?php
/**
 * Template Name: Contact
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

<div class="page-halves">

	<div class="half-header">

			<div class="half-header-content">
				<a href="/">
					<img src="/wp-content/uploads/2021/01/SWL_Logo_Web_White.png" alt="" class="logo">
				</a>
				<div class="text">
					<h1>Contact</h1>
					<p>Seabrook Workplace Law<br>30 Wellington Street West, 5th Floor<br>Toronto, Ontario M5L 1E2</p>
					<p>Phone: 647.361.4410<br>Fax: 647.361.3143</p>
					<p>Email:samantha@seabrookworkplacelaw.ca</p>
				</div>
				<div class="social">
					<p>Follow us</p>
					<div class="social-links">
						<a href="https://www.facebook.com/seabrookworkplacelaw">
							<i class="fa fa-facebook-square"></i>
						</a>
						<a href="https://www.instagram.com/seabrookworkplacelaw">
							<i class="fa fa-instagram"></i>
						</a>
						<a href="https://twitter.com/SeabrookWorkLaw">
							<i class="fa fa-twitter"></i>
						</a>
						<a href="https://www.linkedin.com/company/seabrook-workplace-law/">
							<i class="fa fa-linkedin"></i>
						</a>
					</div>
				</div>
			</div>

	</div>

	<div class="half-content services">
		<div class="row">


		</div>
	</div>

</div>

<?php

get_footer();
