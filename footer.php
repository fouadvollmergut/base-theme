
    </main>
    
    <?php wp_footer(); ?>

    <footer>
      <div class="footer grid">
        <div class="col-w1p1">
          <span class="logo"></span>
        </div>

        <div class="col-w3p2">
          <?php wp_nav_menu( array( 'theme_location' => 'legal' ) ); ?>
        </div>
      </div>

      <div class="superfooter grid">
        <div class="col-w3p1">
          <p>&copy; <?php echo date('Y'); ?> <?php echo get_bloginfo('name'); ?></p>
        </div>

        <div class="col-w1p4">
          <?php wp_nav_menu( array( 'theme_location' => 'social' ) ); ?>
        </div>
      </div>
    </footer>

  </body>
</html>