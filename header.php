<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
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

	<link rel="stylesheet" href="https://use.typekit.net/udh7lti.css">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" class="navbar-desktop">

		<a href="/">
			<img src="/wp-content/uploads/2020/03/seabrook-logo-vertical.png" alt="Seabrook Workplace Law">	
		</a>

		<div class="desktop-menu">
			<a href="/" class="desktop-menu-link">Home</a>
			<a href="/about-us/" class="desktop-menu-link">About Us</a>
			<a href="/firm-values/" class="desktop-menu-link">Firm Values</a>
			<a href="/legal-services/" class="desktop-menu-link">Legal Services</a>
			<a href="/stories/" class="desktop-menu-link">Stories</a>
			<a href="/contact/" class="desktop-menu-link">Contact</a>
		</div>

	</div><!-- #wrapper-navbar end -->
