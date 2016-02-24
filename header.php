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


 <span id='showPushNav'><i class="fa fa-bars"></i></span>
<nav>
  <div class='logo'><h1>Choffee</h1></div>

  <div class='menu'>
    <a href="">Home</a>
    <a href="">Latest Article</a>
    <a href="">About Me</a>
    <a href="">Social Share</a>
  </div>
</nav>