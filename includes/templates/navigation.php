<header class="desktop grid">
  <div class="col-w1p1">
    <div class="logo hidmob">
      <?php the_custom_logo(); ?>
    </div>
  </div>

  <nav class="col-w2p2">
    <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
  </nav>
</header>

<header class="mobile hiddesk active">
  <div class="mobile-menu-trigger">
    <span></span>
    <span></span>
    <span></span>
  </div>

  <nav class="mobile-menu">
    <div class="main">
      <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
    </div>
  </nav>
</header>