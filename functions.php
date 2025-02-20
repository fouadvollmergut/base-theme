<?php 

  // THEME

  // THEME Support

  add_theme_support( 'custom-logo' );
  add_theme_support( 'post-thumbnails' );

  // THEME Menus

  if (function_exists('register_nav_menu')) {
    register_nav_menu( 'main', 'Main' );
    register_nav_menu( 'legal', 'Legal' );
    register_nav_menu( 'social', 'Social' );
    register_nav_menu( 'footer-left', 'Footer Left' );
    register_nav_menu( 'footer-right', 'Footer Right' );
  }

  // THEME Support SVG

  add_filter( 'upload_mimes', 'add_upload_mimes' );

  function add_upload_mimes( $types ) {
    $types['json'] = 'text/plain';
    $types['svg'] = 'image/svg+xml';
    return $types;
  }

  // THEME Styles 

  add_action('wp_enqueue_scripts', 'theme_styles');
    
  function theme_styles() {
    wp_enqueue_style('main_style', get_template_directory_uri() . '/scripts/main.css', array(), '1.0.0');
  }

  // THEME Scripts

  add_action('wp_enqueue_scripts', 'theme_scripts');

  function theme_scripts() {
    wp_enqueue_script('main_script', get_template_directory_uri() . '/scripts/main.js');
  }

  // THEME Dupliacte Posts

  include_once( get_template_directory() . '/includes/duplicate-posts.php' );
  include_once( get_template_directory() . '/includes/company-settings.php' );


  // GDYMC

  // GDYMC Module Folder

  add_filter('gdymc_modules_folder', 'custom_gdymc_folder');

  function custom_gdymc_folder () {
    return get_template_directory() . '/modules';
  }

  // GDYMC Global Module Settings

  add_action( 'gdymc_module_options_settings', 'add_global_gdymc_module_options_settings');
   
  function add_global_gdymc_module_options_settings ($module) {
    $excludedModules = array();

    if (in_array($module->type, $excludedModules)) {
      return;
    }

    optionInput( 'connect', array(
      'type' => 'select',
      'default' => 'connect-none',
      'label' => __( 'Modul verbinden', 'Theme' ),
      'options' => array(
        'connect-none' => __( 'Nicht verbinden', 'Theme' ),
        'connect-upper' => __( 'Oben', 'Theme' ),
        'connect-lower' => __( 'Unten', 'Theme' ),
        'connect-upper connect-lower' => __( 'Oben & Unten', 'Theme' )
      )
    ), $module->id );
  }

  // GDYMC Add module bakcground class

  add_filter( 'gdymc_module_class', 'add_background_class', 10, 1);

  function add_background_class($classes) {
    $classes[] = optionGet('connect');
    return $classes;
  }


  // ACF

  // ACF Custom Save Point

  add_filter('acf/settings/save_json', 'my_acf_json_save_point');

  function my_acf_json_save_point( $path ) {
    $path = get_stylesheet_directory() . '/acf';
    return $path;
  }

  // ACF Custom Load Point

  add_filter('acf/settings/load_json', 'my_acf_json_load_point');

  function my_acf_json_load_point( $paths ) {
    unset($paths[0]);
    $paths[] = get_stylesheet_directory() . '/acf';
    return $paths;
  }