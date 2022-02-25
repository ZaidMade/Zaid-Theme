<?php

function zaid_theme_support(){
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'zaid_theme_support');

function zaid_menus(){
  $locations = array(
    'primary' => "Primary Navigation Menu",
    'social' => "Social Media Menu",
    'footer' => "Footer Menu"
  );

  register_nav_menus($locations);
}
add_action('init', 'zaid_menus');


# Add the CSS
function zaid_register_styles(){
  $version = wp_get_theme()->get('Version');
  wp_enqueue_style('zaid-style', get_template_directory_uri() . "/style.css", array('zaid-bootstrap'), $version, 'all');
  wp_enqueue_style('zaid-bootstrap', get_template_directory_uri() . "/assets/bootstrap-5.1.3/css/bootstrap.min.css", array(), '5.1.3', 'all');
  wp_enqueue_style('zaid-fontawesome', get_template_directory_uri() . "/assets/fontawesome-free-6.0.0-web/css/all.min.css", array(), '6.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'zaid_register_styles');

# Add the Javascript
function zaid_register_scripts(){
  wp_enqueue_script('zaid-bootstrap', get_template_directory_uri() . '/assets/bootstrap-5.1.3/js/bootstrap.min.js', array(), '5.1.3', true);
  wp_enqueue_script('zaid-popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '2.11.2', true);
}
add_action('wp_enqueue_scripts', 'zaid_register_scripts');

function zaid_post_time_ago_function(){
  return sprintf(esc_html__('%s ago', 'textdomain'), human_time_diff(get_the_time ('U'), current_time('timestamp')));
}
add_filter('the_date', 'zaid_post_time_ago_function');


function zaid_comment_time_ago_function(){
  return sprintf(esc_html__('%s ago', 'textdomain'), human_time_diff(get_comment_time ('U'), current_time('timestamp')));
}
add_filter('get_comment_date', 'zaid_comment_time_ago_function');

function zaid_widget_areas(){
  register_sidebar(
    array(
      'before_title' => '<strong>',
      'after_title' => '</strong>',
      'before_widget' => '',
      'after_widget' => '',
      'name' => 'Sidebar',
      'id' => 'header-sidebar',
      'description' => 'Header Sidebar Widget Area'
    )
  );

  register_sidebar(
    array(
      'before_title' => '<strong>',
      'after_title' => '</strong>',
      'before_widget' => '',
      'after_widget' => '',
      'name' => 'Homepage Area',
      'id' => 'homepage-sidebar',
      'description' => 'Homepage Widget Area'
    )
  );

  register_sidebar(
    array(
      'before_title' => '<strong>',
      'after_title' => '</strong>',
      'before_widget' => '',
      'after_widget' => '',
      'name' => 'Footer Area',
      'id' => 'footer-sidebar',
      'description' => 'Footer Widget Area'
    )
  );


}
add_action('widgets_init', 'zaid_widget_areas');

?>
