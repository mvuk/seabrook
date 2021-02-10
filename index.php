<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<!--  -->

<div class="page-halves">

	<div class="half-header">

			<div class="half-header-content">
				<a href="/">
					<img src="/wp-content/uploads/2021/01/SWL_Logo_Web_White.png" alt="" class="logo">
				</a>
				<div class="text">
					<h1>Our Blog</h1>
					<p>Seabrook has experience on both sides of the equation, and we can help anyone. Seabrook has experience on both sides of the equation, and we can help anyone. Seabrook has experience on both sides of the equation, and we can help anyone.</p>
				</div>
				<div class="filler-area">

				</div>
			</div>

	</div>

	<div class="half-content blog-posts">

<!--  -->

<main class="site-main" id="main">

	<?php
	if ( have_posts() ) {
		// Start the Loop.
		while ( have_posts() ) {
			the_post();

			/*
			 * Include the Post-Format-specific template for the content.
			 * If you want to override this in a child theme, then include a file
			 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
			 */
			get_template_part( 'loop-templates/content', get_post_format() );
		}
	} else {
		get_template_part( 'loop-templates/content', 'none' );
	}
	?>

</main><!-- #main -->

<!--  -->

	</div>

</div>

<!--  -->

<p>test test</p>


<div class="wrapper" id="index-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check and opens the primary div -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>



			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #index-wrapper -->

<?php
get_footer();
