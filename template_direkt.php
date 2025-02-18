<?php get_header(); /* Template Name: Direktausgabe */ ?>
  <?php if(have_posts()): ?>
    <?php while(have_posts()): ?>
        <?php the_post(); ?>

        <section class="module base-color-background">
          <div class="grid hero end">
            <div class="content--text col-w2p1">
              <div class="textbox">
                <?php if (contentCheck('subhead')): ?>
                  <h2><?php contentCreate('subhead', 'text'); ?></h2>
                <?php endif; ?>

                  <h1><?php the_title(); ?></h1>
              </div>
            </div>

            <div class="content--image">
              <?php if (contentCheck('image')): ?>
                <?php contentCreate('image', 'image', 'autoxauto'); ?>
              <?php endif; ?>
            </div>
          </div>
        </section>
        
        <section class="module pt pb">
          <div class="grid direct">
            <div class="content--text rendered col-w3p1">
              <?php the_content(); ?>
            </div>
          </div>
        </section>

        <?php if( function_exists( 'areaCreate' ) ) areaCreate(); ?>

    <?php endwhile; ?>
  <?php endif; ?>
<?php get_footer(); ?>