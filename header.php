<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <?php wp_head(); ?>

    <?php include_once( get_template_directory() . '/includes/templates/meta.php' ); ?>

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
