<?php


  function register_main_nav_menu() {
    register_nav_menu('main-nav', __('Main Nav Menu'));
  }

  function style_assets() {
    wp_enqueue_style( 'font-aweseoe', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');
    wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Italiana|Lato');
    wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array('main.css'));
    wp_enqueue_style( 'compiled-styles', get_stylesheet_directory_uri() . '/css/main.css');
  }

  function script_assets() {
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'slider-nav', get_stylesheet_directory_uri() . '/js/nav-slider.js', array('jquery') );
  }

  // POST VIEWS LOGIC

  function set_post_views($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
  }

  function get_post_views($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
      delete_post_meta($postID, $count_key);
      add_post_meta($postID, $count_key, '0');
      return "0";
    }
    return $count;
  }

  remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
















  function custom_excerpt_length( $length ) {
    return 25;
  }

  add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

  //To keep the count accurate, lets get rid of prefetching



  add_action('init', 'register_main_nav_menu');
  add_action('wp_enqueue_scripts', 'style_assets');
  add_action('wp_enqueue_scripts', 'script_assets');

  add_theme_support( 'post-thumbnails' );


  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wp_generator');
  remove_action('wp_head', 'feed_links', 2);
  remove_action('wp_head', 'index_rel_link');
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'feed_links_extra', 3);
  remove_action('wp_head', 'start_post_rel_link', 10, 0);
  remove_action('wp_head', 'parent_post_rel_link', 10, 0);
  remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
?>