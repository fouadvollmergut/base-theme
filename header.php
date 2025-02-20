<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo get_bloginfo('description'); ?>">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.typekit.net/vao3mrh.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <?php wp_head(); ?>

    <?php include_once( get_template_directory() . '/includes/templates/browser.php' ); ?>

    <title>
      <?php if (is_front_page() || is_home()){
        echo get_bloginfo('name');
      } else {
        echo get_the_title('') .  ' | ' .  get_bloginfo( 'name' );
      }?>
    </title>
  </head>
  
  <body <?php body_class(); ?>>

    <?php include_once( get_template_directory() . '/includes/templates/navigation.php' ); ?>

    <main>
