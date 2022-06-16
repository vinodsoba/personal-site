  <!-- controls the nav and logo-->
  <div class="top-nav">
        <div class="logo__image">
          <a href="<?php echo site_url(); ?>">
            <img src="http://react-demo.local/wp-content/uploads/2022/05/Group-4.png"  alt="<?php echo $logo['alt']; ?>"/>
          </a>
          </div>
        <nav class="pt1 pb1">
          <?php
          wp_nav_menu(array( 
            'theme_location' => 'Header Main Menu'
          ));
          ?>

          <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        </nav>
    </div>
<!-- END --> 