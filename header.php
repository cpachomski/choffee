<?php
/*
# =================================================
# header.php
#
# The theme's navigation template.
# =================================================
*/
 ?>

<!DOCTYPE html>
<html style="margin-top: 0px !important;" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title(); ?></title>

      <?php
      /* Disable the Admin Bar. */
      remove_action( 'init', 'wp_admin_bar_init' );
      ?>
    <?php wp_head(); ?>
</head>

<header class="blog-index-hero-container">
  <div class='hero'>
    <h1><span>Choffee</span></h1>
  </div>
</header>