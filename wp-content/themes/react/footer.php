<footer style="background-image: url('<?php echo get_theme_file_uri('images/dark-bg.png'); ?>')">
    <div class="flex-container footer-links py2 container">
      <div class="item-3">
          <?php
                wp_nav_menu(array( 
                  'theme_location' => 'Footer Main Menu'
                ));
          ?>
      </div>

      <div class="item-4">
          <?php
                wp_nav_menu(array( 
                  'theme_location' => 'Footer Menu 2'
                ));
          ?>
      </div>
    </div>
</footer>
<?php wp_footer(); ?>
<div class="search-overlay">
<div class="search-overlay__top">
  <div class="container">
    <i  class="fa fa-search search-overlay__icon" aria-hidden="true"></i>
    <input type="text" class="search-term" placeholder="What are you looking for" id="search-term">
    <i class="fa fa-window-close search-overlay__close" aria-hidden="true"></i>
  </div>
</div>
</div>
<script src="http://react-demo.local/wp-includes/js/jquery/jquery.min.js?ver=3.6.0"></script> 
<script src="http://react-demo.local/wp-content/themes/react/src/js/animation.js"></script> 
</body>
</html>