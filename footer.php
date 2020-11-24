<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="swl-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<!--  -->
				<p>footer menu</p>

				<!--  -->
			</div>
			<div class="col-md-6">
				<p>Follow us on Social Media</p>
				<p>Instagram images</p>
				<p>Footer social links</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<p>Seabrook Workplace Law 2020. All Rights Reserved.</p>
			</div>
		</div>
	</div>
</div>


</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
