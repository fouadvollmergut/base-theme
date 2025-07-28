
    </main>
    
    <?php wp_footer(); ?>

    <footer>
      <div class="footer grid">
        <div class="subgrid">
          <div class="col-w2p1">
            <span class="logo">
              <?php the_custom_logo(); ?>
            </span>

            <div class="company-information">
              <?php echo htmlspecialchars_decode(get_option( 'custom_company_information' )); // General Settings ?>
            </div>
            
            <div class="copyright">
              <p>&copy; <?php echo date('Y'); ?> <?php echo get_bloginfo('name'); ?></p>
            </div>
          </div>

          <div class="col-d4pauto">
            <?php wp_nav_menu( array( 'theme_location' => 'footer-left' ) ); ?>
          </div>

          <div class="col-d4pauto">
            <?php wp_nav_menu( array( 'theme_location' => 'footer-right' ) ); ?>
          </div>

          <div class="col-d4pauto">
            <?php wp_nav_menu( array( 'theme_location' => 'legal' ) ); ?>
          </div>
        </div>
      </div>

      <div class="superfooter grid">
        <div class="subgrid">
          <div class="col-w4p1">
            <?php wp_nav_menu( array( 'theme_location' => 'social' ) ); ?>
          </div>

          <div class="col-w1p5">
            <div class="fvg_backlink">
              <a 
                href="https://fouadvollmergut.de?utm_campaign=Website+Customer+Referral&utm_medium=referral&utm_source=<?php echo urlencode($_SERVER['HTTP_HOST']); ?>&source=<?php echo urlencode(get_bloginfo('name')); ?>" 
                target="_blank" 
                rel="noopener"
              >
                <p>Made<br>by</p>
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                  viewBox="521.3 0 571.3 411.7" xml:space="preserve">
                <g>
                  <path d="M958.8,116.6L930,204.1l-28.8-87.5H767l0,0h-16v-4.7c0-6.4,1.4-10.9,4.1-13.4c2.7-2.5,7.6-3.6,14.6-3.5V70.7
                    c-16.1-0.4-28.1,2.7-36,9.3c-8,6.6-11.9,16.9-11.9,30.9v5.8h-13v23.7h13v90.4H751v-90.4H879l33.3,90.3h35l42.2-114H958.8z"/>
                  <path d="M852.9,186.3v16.3c-3.7-5.4-8.8-9.7-15.2-13.1c-6.5-3.4-13.9-5-22.4-5c-9.8,0-18.6,2.4-26.5,7.2
                    c-7.9,4.8-14.1,11.7-18.7,20.6c-4.6,8.9-6.9,19.1-6.9,30.7c0,11.7,2.3,22,6.9,31c4.6,9,10.9,16,18.8,20.9c8,4.9,16.7,7.4,26.4,7.4
                    c8.4,0,15.8-1.8,22.3-5.4c6.5-3.6,11.6-8,15.3-13.4v17.7c0,10.2-2.6,17.7-7.8,22.8c-5.2,5-12,7.5-20.4,7.5
                    c-7.1,0-13.2-1.5-18.2-4.6c-5-3.1-8.3-7.2-9.8-12.5h-28.6c1.4,13,7.2,23.3,17.6,30.9c10.4,7.5,23.6,11.3,39.8,11.3
                    c12.1,0,22.4-2.4,30.9-7.3c8.5-4.9,14.9-11.5,19.1-19.8c4.2-8.3,6.4-17.7,6.4-28.3V186.3H852.9z M848.8,261.3
                    c-2.7,5-6.5,8.9-11.1,11.5c-4.7,2.7-9.7,4-15,4c-5.2,0-10.1-1.4-14.7-4.1s-8.3-6.7-11.1-11.8c-2.8-5.2-4.2-11.1-4.2-18
                    c0-6.9,1.4-12.8,4.2-17.8c2.8-5,6.5-8.8,11-11.4c4.5-2.6,9.5-3.9,14.8-3.9s10.4,1.3,15,4c4.7,2.7,8.4,6.5,11.1,11.5
                    c2.7,5,4.1,11,4.1,18C852.9,250.3,851.6,256.3,848.8,261.3z"/>
                  <path d="M742.5,291.3l-18.7-18.7L702,294.4l-40.1-39.7c-4.8-5.1-8.3-9.4-10.4-12.8c-2.1-3.5-3.2-7-3.2-10.5c0-3.7,1.3-6.7,3.9-9
                    c2.6-2.3,5.9-3.5,9.9-3.5c4.1,0,7.4,1.2,9.8,3.7c2.4,2.5,3.5,6,3.4,10.7h28.9c0.4-6.9-0.9-13.2-4-18.9c-3.1-5.7-7.9-10.2-14.2-13.6
                    c-6.4-3.4-14-5.1-22.9-5.1c-8.8,0-16.4,1.6-23,4.7c-6.6,3.1-11.6,7.4-15.2,12.8c-3.5,5.4-5.3,11.6-5.3,18.4c0,5,0.8,9.6,2.6,13.9
                    c1.7,4.3,4.4,8.8,8.3,13.5c-10.7,4.8-18.9,11.1-24.4,18.9c-5.5,7.8-8.3,16.6-8.3,26.3c0,9.1,2.3,17,6.8,23.9
                    c4.5,6.9,10.9,12.2,19.2,15.9c8.3,3.8,17.9,5.6,28.8,5.6c19.8,0,36.6-6.2,50.3-18.5l16.1,15.9h36.5l-34.4-34L742.5,291.3z
                    M653.1,325c-7.9,0-14.3-2.2-19.1-6.5c-4.8-4.3-7.2-9.7-7.2-16c0-11.2,6.9-19.8,20.6-25.9l36.5,36.1C675,320.9,664.7,325,653.1,325
                    z"/>
                </g>
                </svg>
              </a>
            </div>
          </div>
        </div>  
      </div>
    </footer>

  </body>
</html>