
    </main>
    
    <?php wp_footer(); ?>

    <footer>
      <div class="footer grid">
        <div class="col-w1p1">
          <span class="logo">
            <?php the_custom_logo(); ?>
          </span>

          <?php echo htmlspecialchars_decode(get_option( 'custom_company_information' )); // General Settings ?>
        </div>

        <div class="col-w1p2">
          <?php wp_nav_menu( array( 'theme_location' => 'footer-left' ) ); ?>
        </div>

        <div class="col-w1p3">
          <?php wp_nav_menu( array( 'theme_location' => 'footer-right' ) ); ?>
        </div>

        <div class="col-w1p4">
          <?php wp_nav_menu( array( 'theme_location' => 'legal' ) ); ?>
        </div>
      </div>

      <div class="superfooter grid">
        <div class="col-w3p1">
          <?php wp_nav_menu( array( 'theme_location' => 'social' ) ); ?>
        </div>

        <div class="col-w1p4">
          <p>&copy; <?php echo date('Y'); ?> <?php echo get_bloginfo('name'); ?></p>
        </div>
      </div>
    </footer>

  </body>
</html>