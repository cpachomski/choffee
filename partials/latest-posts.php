<?php
/*
# =================================================
# latest-posts.php
#
# The theme's latest-posts block
# =================================================
*/
?>

<div class='latest-posts col-sm-8'>

  <div class='section-topper'>
    <h6>
      <span>Latest Posts</span>
    </h6>
  </div>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class='blog-entry row'>
      <article>
        <?php  $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
        <div class='col-lg-6 col-sm-6 post-media-col'>
            <a href="<?php the_permalink(get_the_ID()); ?>" class='post-media'>
              <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
              <div style="background-image: url('<?php echo $url; ?>');" class='post-thumbnail'> </div>
            </a>
        </div>
        <div class='col-lg-6 col-sm-6 post-info-col'>
          <div class='post-type'>
            <?php the_category(get_the_ID()); ?>
          </div>

          <h4><a href="<?php the_permalink(get_the_ID()); ?>"><?php the_title(); ?></a></h4>
          <small><?php _e('Posted by ', 'textdomain'); the_author_posts_link() ?></small>
          <small><?php the_date('F j') ?></small>

          <p class='excerpt'><?php the_excerpt(); ?></p>
        </div>
      </article>
    </div>

  <?php endwhile; else :
    _e( 'Sorry, no posts :^(', 'textdomain');

    endif;
   ?>
</div>