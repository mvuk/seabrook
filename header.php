<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav id="main-nav" class="navbar navbar-expand-md navbar-dark bg-primary" aria-labelledby="main-nav-label">

			<div class="container">

				<div class="swl-header-menu">
					<div class="header-links">
						<a href="/">Home</a>
						<a href="/about">About</a>
						<a href="/values">Services</a>
					</div>
					<div class="logo">
						<img src="/wp-content/uploads/2020/11/SWL_Logo_Web.png" alt="">
					</div>
					<div class="header-links">
						<a href="/client-stories">Client Stories</a>
						<a href="/contact">Contact</a>
					</div>
				</div>

			</div>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
