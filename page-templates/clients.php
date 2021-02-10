<?php
/**
 * Template Name: Our Clients
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


<div class="wide-header-dark about">

		<div class="wide-header-dark-content">
			<a href="/" class="logo-link">
				<img src="/wp-content/uploads/2021/01/SWL_Logo_Web_White.png" alt="" class="logo">
			</a>

			<h1>Our Clients</h1>
			<p>Roaming this world in his creative paths, exploring the inevitable limits of the human perception and artificial creativity.</p>
			<p>The fear of white paper, the anxiety of a deadline, the blood rush of creation, the happiness of production; all of them embodied in an airy, mystical and mysterious form.</p>
			<p>We are pilgrims, devoted disciples in all creative projects of the phantom. All the way. Phantom choose us. We obey.</p>
		</div>

</div>

<div class="content-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Content</h2>
				<p>Content</p>
				<h3>Content</h3>
				<p>Content</p>
				<h2>Content</h2>
				<p>Content</p>
				<h3>Content</h3>
				<p>Content</p>				
			</div>
		</div>
	</div>
</div>

<?php

get_footer();
