<?php

  // scripts

  function theme_name_scripts(){
    wp_register_script('main', get_stylesheet_directory_uri() . '/js/main.js');

    //jquery-bootstrap
    wp_localize_script('main', 'Ajax_variables', array('url' => admin_url('admin-ajax.php')));
    wp_localize_script('main', 'Website', array('url' => get_site_url()));
    wp_enqueue_script('jquery', get_stylesheet_directory_uri() . '/js/jquery.js');
    wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script('main', get_stylesheet_directory_uri() . '/js/main.js');

    //wp_enqueue_script('yourscriptname', get_stylesheet_directory_uri() . '/js/yourscriptname.js');
  }

  add_action('wp_enqueue_scripts', 'theme_name_scripts');

  add_filter('style_loader_src',  'sdt_remove_ver_css_js', 9999, 2);
  add_filter('script_loader_src', 'sdt_remove_ver_css_js', 9999, 2);

  function sdt_remove_ver_css_js($src, $handle){
    $handles_with_version = [ 'style' ]; // <-- Adjust to your needs!

    if(strpos($src, 'ver=') && ! in_array($handle, $handles_with_version, true))
      $src = remove_query_arg('ver', $src);

    return $src."?ver=".time();
  }
?>