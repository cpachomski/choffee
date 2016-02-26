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
  <div class='post-container'>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php set_post_views(get_the_ID()); ?>




    <div class='post'>
      <div class='post-info'>
        <span class='post-category'><?php the_category(); ?></span>
        <h3><?php the_title(); ?></h3>
        <span class='date'><?php the_date('l, F j, Y'); ?></span>
        <span class='author'><?php _e('by ', 'textdomain'); the_author_posts_link() ?></span>
        <span class='views'><?php get_post_views(get_the_ID()); ?></span>
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