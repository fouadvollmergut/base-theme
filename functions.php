<?php 

  // THEME

  // THEME Support Customizer

  add_theme_support( 'custom-logo' );
  add_theme_support( 'post-thumbnails' );

  // THEME Disable Gutenberg

  add_action('admin_menu', function() {  
    remove_submenu_page( 'themes.php', 'site-editor.php?p=/pattern' );
    remove_submenu_page( 'themes.php', 'site-editor.php?path=/patterns' );
    remove_submenu_page( 'themes.php', 'edit.php?post_type=wp_block' );
  });

  // THEME Disable Comments

  include_once( get_template_directory() . '/includes/disable-comments.php' );

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

  // GDYMC Global Module Settings

  // GDYMC Add module connection option

  add_action( 'gdymc_module_options_settings', 'add_global_gdymc_module_connection_options_settings');
   
  function add_global_gdymc_module_connection_options_settings ($module) {
    $excludedConnectionOptionsModules = array();

    if (in_array($module->type, $excludedConnectionOptionsModules)) {
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

  // GDYMC Add module connection class

  add_filter( 'gdymc_module_class', 'add_connection_class', 10, 1);

  function add_connection_class($classes) {
    $classes[] = optionGet('connect');
    return $classes;
  }

  // GDYMC Add module background option

  add_action( 'gdymc_module_options_settings', 'add_global_gdymc_module_background_options_settings');

  function add_global_gdymc_module_background_options_settings ($module) {
    $excludedBackgroundOptionsModules = array();

    if (in_array($module->type, $excludedBackgroundOptionsModules)) {
      return;
    }

    optionInput( 'background', array(
      'type' => 'select',
      'default' => 'background-none',
      'label' => __( 'Modul Hintergrund', 'Theme' ),
      'options' => array(
        'background-none' => __( 'Kein Hintergrund', 'Theme' ),
        'background-neutral' => __( 'Neutraler Hintergrund', 'Theme' ),
        'background-light' => __( 'Heller Hintergrund', 'Theme' ),
        'background-dark' => __( 'Dunkler Hintergrund', 'Theme' ),
        'background-accent' => __( 'Akzent Hintergrund', 'Theme' )
      )
    ), $module->id );
  }

  // GDYMC Add module background class

  add_filter( 'gdymc_module_class', 'add_background_class', 10, 1);

  function add_background_class($classes) {
    $classes[] = optionGet('background');
    return $classes;
  }

  // GDYMC Module SEO Position

  add_action( 'gdymc_module_options_settings', 'add_global_gdymc_module_seo_options_settings');

  function add_global_gdymc_module_seo_options_settings ($module) {
    $excludedSeoOptionsModules = array(
      'themes/theme/modules/image'
    );

    if (in_array($module->type, $excludedSeoOptionsModules)) {
      return;
    }

    optionInput( 'seo-position', array(
      'type' => 'select',
      'default' => 'h2',
      'label' => __( 'Modul SEO Position', 'Theme' ),
      'options' => array(
        'h1' => __( 'H1', 'Theme' ),
        'h2' => __( 'H2', 'Theme' ),
        'h3' => __( 'H3', 'Theme' ),
        'h4' => __( 'H4', 'Theme' ),
        'h5' => __( 'H5', 'Theme' ),
        'h6' => __( 'H6', 'Theme' )
      )
    ), $module->id );
  }

  // GDYMC Module Animation

  add_action( 'gdymc_module_options_settings', 'add_global_gdymc_module_animation_options_settings');

  function add_global_gdymc_module_animation_options_settings ($module) {
    $excludedAnimationOptionsModules = array();

    if (in_array($module->type, $excludedAnimationOptionsModules)) {
      return;
    }

    optionInput( 'animation', array(
      'type' => 'select',
      'default' => false,
      'label' => __( 'Modul Animation', 'Theme' ),
      'options' => array(
        false => __( 'Nein', 'Theme' ),
        true => __( 'Ja', 'Theme' )
      ),
    ), $module->id );
  }

  // GDYMC Add image caption

  add_action('gdymc_image_after', function ($imageID, $imageSize) {
    $imageCaption = wp_get_attachment_caption( $imageID );

    if( !empty( $imageCaption ) ):
      echo '<figcaption class="gdymc-image-caption">' . $imageCaption . '</figcaption>';
    endif;
  }, 10, 2);


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