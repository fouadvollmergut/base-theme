<header>
  <div class="header desktop grid">
    <div class="subgrid">
      <div class="col-w1p1">
        <div class="logo">
          <a href="<?php echo home_url(); ?>">
            <?php the_custom_logo(); ?>
          </a>
        </div>
      </div>

      <nav class="main-nav col-w5p2">
        <?php wp_nav_menu( array( 
          'theme_location' => 'main',
          'container' => false,
          'menu_class' => 'main-menu',
          'depth' => 2,
        ) ); ?>
      </nav>
    </div>
  </div>
</header>

<header class="mobile">
  <div class="logo">
    <a href="<?php echo home_url(); ?>">
      <?php the_custom_logo(); ?>
    </a>
  </div>

  <div class="mobile-menu-trigger">
    <span></span>
    <span></span>
  </div>

  <nav class="mobile-menu">
    <?php wp_nav_menu( array( 
      'theme_location' => 'main',
      'container' => false,
      'menu_class' => 'main-menu',
    ) ); ?>
  </nav>
</header>