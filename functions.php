<?php

  function style_assets() {
    wp_enqueue_style( 'font-aweseoe', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Italiana|Lato');
    wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array('main.css'));
    wp_enqueue_style( 'compiled-styles', get_stylesheet_directory_uri() . '/css/main.css');
  }

  function script_assets() {
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'slider-nav', get_stylesheet_directory_uri() . '/js/nav-slider.js', array('jquery') );
  }

  add_action('wp_enqueue_scripts', 'style_assets');
  add_action('wp_enqueue_scripts', 'script_assets');


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