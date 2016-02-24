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

<div class='container'>
  <?php get_template_part('partials/blog', 'index-hero') ?>

<div class='cards-container'>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class='card'>
      <h4><?php the_title(); ?></h4>
      <small><?php _e('Posted by ', 'textdomain'); the_author_posts_link() ?></small>
      <small><?php the_date('l, F j, Y') ?></small>
    </div>

  <?php endwhile; else :
    _e( 'Sorry, no posts :^(', 'textdomain');

    endif;

   ?>
</div>

</div>