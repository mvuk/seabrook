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

<div class="footer one">

  <div class="container">
    <div class="row contact-form-row">
      <div class="col-md-12">
        <h2>Make an enquiry</h2>
        <?php echo do_shortcode('[contact-form-7 id="105"]'); ?>
      </div>
    </div>
  </div>

</div>

<div class="footer two">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <img src="/wp-content/uploads/2021/01/SWL_Logo_Web_White.png" alt="" class="logo">
        <div class="footer-contact-details">
          <p>Seabrook Workplace Law
          <br>30 Wellington Street West, 5th Floor
          <br>Toronto, Ontario M5L 1E2</p>
          <p>Phone: 647.361.4410
          <br>Fax: 647.361.3143
        </p>
        </div>
      </div>
      <div class="col-md-2">
        <div class="footer-links">
          <a href="/">Home</a>
          <a href="/our-values/">Our Values</a>
          <a href="/our-legal-realm/">Our Legal Team</a>
          <a href="/workplace-law-services">Workplace Law Services</a>
          <a href="/our-clients/">Our Clients</a>
          <a href="/blog">Blog</a>
          <a href="/contact">Contact</a>
        </div>
      </div>
      <div class="col-md-2">
        <div class="social">
  				<p>Follow us</p>
  				<div class="social-links">
  					<a href="https://www.facebook.com/seabrookworkplacelaw">
  						<i class="fa fa-facebook-square"></i>
  					</a>
  					<a href="https://www.instagram.com/seabrookworkplacelaw">
  						<i class="fa fa-instagram"></i>
  					</a>
  					<a href="https://www.linkedin.com/company/seabrook-workplace-law/">
  						<i class="fa fa-linkedin"></i>
  					</a>
  				</div>
  			</div>
      </div>
      <div class="col-md-4">
        <p>Newsletter</p>
      </div>
    </div>
  </div>
</div>

<?php wp_footer(); ?>

</body>

</html>
