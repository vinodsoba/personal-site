<footer style="background-image: url('<?php echo get_theme_file_uri('images/dark-bg.png'); ?>')">
    <div class="container">
      <div class="row  footer-links py2">
        <div class="col-md-4">
            <?php
                wp_nav_menu(array( 
                  'theme_location' => 'Footer Main Menu'
                ));
            ?>
        </div>

        <div class="col-md-4">
            <?php
                wp_nav_menu(array( 
                  'theme_location' => 'Footer Menu 2'
                ));
            ?>
        </div>
      </div>

      <div class="row footer-section  py3">
        <div class="col-md-6 item-11">
          <h4>Overview</h4>
          <p>I'm a freelance web designer working remotely with clients in London & across the country. If you're looking for a quote, or even just some advice then please don't hesitate to get in touch, I'm here to help!</p>
        </div>

        <div class="col-md-6 item-12">
          <h4>REQUEST A QUOTE!</h4>
            <div class="button_home py3">
                <a href="contact-me">Start your  project</a>
            </div>
        </div>
      </div>
        

        <div class="search-overlay">
          <div class="search-overlay__top">
            <div class="container">
              <i  class="fa fa-search search-overlay__icon" aria-hidden="true"></i>
              <input type="text" class="search-term" placeholder="What are you looking for" id="search-term">
              <i class="fa fa-window-close search-overlay__close" aria-hidden="true"></i>
            </div>
          </div>
        </div>
        <div class="copyright">This is where copyright info will go</div>
  </div>
</footer>
<?php wp_footer(); ?>
<script src="http://react-demo.local/wp-content/themes/react/dist/js/animation.bundle.js"></script>
</body>
</html>