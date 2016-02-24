<?php
/*
# =================================================
# single-post.php
#
# The theme's single post page template
# =================================================
*/
?>

<?php get_header(); ?>
<div class='container'>
  <?php get_template_part('partials/blog', 'hero'); ?>
  <div class='post-container'>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class='post'>
      <div class='post-info'>
        <h3><?php the_title(); ?></h3>
        <span class='date'><?php the_date('l, F j, Y'); ?></span>
      </div>
      <div class='post-content'>
        <?php the_content(); ?>
      <?php endwhile; else : ?>
        <?php _e('Sorry, no post here'); ?>
      </div>
    </div>
    <?php endif; ?>
  </div>

</div>