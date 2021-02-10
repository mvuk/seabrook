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

<div class="footer">

  <div class="container">
    <div class="row footer-row-one">
      <div class="col-md-4">

      </div>
      <div class="col-md-4">

      </div>
      <div class="col-md-4">

      </div>
      <div class="col-md-4">

      </div>
    </div>
    <div class="row footer-row-two">
      <div class="col-md-12">
        <p>© 2021 Seabrook Workplace Law</p>
      </div>

    </div>
  </div>

</div>


<?php wp_footer(); ?>

</body>

</html>
