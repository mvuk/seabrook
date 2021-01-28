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

<p>[header]</p>

<div id="overlay-menu">

	<div class="overlay-menu-left">
		<div class="overlay-menu-container">
			<div class="logo">
				<a href="/">
					<img src="/wp-content/uploads/2021/01/SWL_Logo_Web_White.png" alt="">
				</a>
			</div>
			<div class="menu">
				<a href="/" class="menu-item">Home</a>
				<a href="/our-values/" class="menu-item">Our Values</a>
				<a href="/our-legal-team/" class="menu-item">Our Legal Team</a>
				<a href="/workplace-law-services/" class="menu-item">Workplace Law Services</a>
				<!-- <a href="#" class="menu-item">Blog</a> -->
				<a href="/contact" class="menu-item">Contact</a>
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
	<div class="overlay-menu-right">
		<div class="image">

		</div>
		<div class="contact">
			<div class="text">
				<h2>Get started with Seabrook.</h2>
				<p>Are you ready to work with Samantha and her team? For new clients, reach out to us at hello@seabrookworkplacelaw.ca, call 647.361.4410 or visit us.</p>
			</div>
			<div class="enquiry">
				<a href="#" class="">Make an enquiry</a>
			</div>
		</div>
	</div>

</div>

	<!-- ******************* The Navbar Area ******************* -->
	<!-- <div id="wrapper-navbar">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav id="main-nav" class="navbar navbar-expand-md" aria-labelledby="main-nav-label">

			<div class="container">

				<div class="swl-header-menu">
					<div class="header-links">
						<a href="/">Home</a>
						<a href="/about">About</a>
						<a href="/services">Services</a>
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

		</nav>

	</div>-->
