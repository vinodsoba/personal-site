  <!-- controls the nav and logo-->
  <div class="top-nav row">
     <div class="col-md-7">
      <div class="logo__image">
          <a href="<?php echo site_url(); ?>">
            <img src="http://react-demo.local/wp-content/uploads/2022/05/Group-4.png"  alt="<?php echo $logo['alt']; ?>"/>
          </a>
      </div>
     </div>
        
     <div class="col-md-3">
        <nav class="nav__menu py1">
          <?php
          wp_nav_menu(array( 
            'theme_location' => 'Header Main Menu'
          ));
          ?>
        </nav>          
      </div>
     
      <div class="col-md-1 mobile-menu py1">
          <i class="nav__menu--trigger fa fa-bars" aria-hidden="true"></i>
          
      </div>
      <div class="col-md-1 search py1">
        <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        </div>
  </div>
<!-- END --> 