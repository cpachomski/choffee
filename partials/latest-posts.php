<?php
/*
# =================================================
# latest-posts.php
#
# The theme's latest-posts block
# =================================================
*/
?>

<div class='cards-container'>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class='card-container'>
      <div class='card'>
        <h4><?php the_title(); ?></h4>
        <small><?php _e('Posted by ', 'textdomain'); the_author_posts_link() ?></small>
        <small><?php the_date('l, F j, Y') ?></small>
      </div>
    </div>

  <?php endwhile; else :
    _e( 'Sorry, no posts :^(', 'textdomain');

    endif;
   ?>
</div>