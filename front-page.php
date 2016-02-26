<?php
/*
# =================================================
# fonrt-page.php
#
# The theme's navigation template.
# =================================================
*/
 ?>

<?php get_header(); ?>
<?php get_template_part('partials/desktop', 'nav'); ?>

<div class='content'>
  <div class='container'>
    <div class='row'>
      <?php get_template_part('partials/latest', 'posts'); ?>
      <?php get_template_part('partials/most', 'recent-sidebar'); ?>
    </div>
    <div class='row'>
      <?php get_template_part('partials/newsletter', 'signup'); ?>
    </div>
  </div>
</div>