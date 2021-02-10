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
    <div class="row footer-row-one">
      <div class="col-md-12">
        <?php echo do_shortcode('[contact-form-7 id="105"]'); ?>
      </div>
    </div>

  </div>

</div>

<div class="footer two">
  <div class="container">
    <div class="row">
      <div class="col-md-4">

      </div>
      <div class="col-md-4">

      </div>
      <div class="col-md-4">

      </div>
      <div class="col-md-4">

      </div>
    </div>
  </div>
</div>

<?php wp_footer(); ?>

</body>

</html>
