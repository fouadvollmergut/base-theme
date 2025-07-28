<?php get_header(); /* Template Name: Editor Output */ ?>
  <?php if(have_posts()): ?>
    <?php while(have_posts()): ?>
        <?php the_post(); ?>

        <section class="module grid">
          <div class="text subgrid">
            <div class="content--text col-w4p1">
              <div class="textbox">
                  <h1><?php the_title(); ?></h1>
              </div>
            </div>
          </div>
        </section>
        
        <section class="module grid">
          <div class="text subgrid">
            <div class="content--text col-w4p1">
              <div class="textbox rendered">
                <?php the_content(); ?>
              </div>
            </div>
          </div>
        </section>

        <?php if( function_exists( 'areaCreate' ) ) areaCreate(); ?>

    <?php endwhile; ?>
  <?php endif; ?>
<?php get_footer(); ?>