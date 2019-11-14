<?php 
  function friendship_load_script() {
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() .'/lib/bootstrap/css/bootstrap.min.css', '', 'v4.3');
    wp_enqueue_style('friendship_style', get_stylesheet_uri());
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/lib/bootstrap/js/bootstrap.min.js', array(), 'v4.3', true);
  }

  add_action('wp_enqueue_scripts', 'friendship_load_script');

  /* Averiguar eventos(hooks) Wordpress */
?>