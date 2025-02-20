<header>
  <div class="header desktop grid">
    <div class="col-w1p1">
      <div class="logo">
        <?php the_custom_logo(); ?>
      </div>
    </div>

    <nav class="main-nav col-w3p2">
      <?php wp_nav_menu( array( 
        'theme_location' => 'main',
        'container' => false,
        'menu_class' => 'main-menu',
        'depth' => 1,
      ) ); ?>
    </nav>
  </div>

  <div class="subheader desktop grid">
    <nav class="sub-nav col-w3p2">
      <?php wp_nav_menu( array( 
        'theme_location' => 'main',
        'container' => false,
        'menu_class' => 'sub-menu',
      ) ); ?>
    </nav>
  </div>
</header>

<header class="mobile">
  <div class="logo">
    <?php the_custom_logo(); ?>
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