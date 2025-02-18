<?php get_header(); ?>

  <?php 
    if( have_posts() ): while( have_posts() ): the_post();
      if( function_exists( 'areaCreate' ) ) areaCreate();
    endwhile; endif; 
  ?>

<?php get_footer(); ?>