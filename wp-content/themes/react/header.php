<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php
     $bannerBackground = get_field('home_page_banner');
    
    if($bannerBackground) {
      ?>
      <header class="header__container" style="background-image: url('<?php echo $bannerBackground ?>')">
      <?php
    } else {
      ?>
      <header class="header__container" style="background-color: #0f32c9;')">
    <?php
    }
    ?>
   
      <div class="top-nav">
          <div class="logo__image">
            <a href="<?php echo site_url(); ?>">
              <img src="http://react-demo.local/wp-content/uploads/2022/05/Group-4.png"  alt="<?php echo $logo['alt']; ?>"/>
            </a>
            </div>
          <nav class="pt1 pb1">
            <?php
            wp_nav_menu(array( 
              'theme_menu' => 'headerMainMenu'
            ));
            ?>
          </nav>
      </div>
      
        <?php 
            if(is_front_page()) {
              ?>
              <div class="homepage-title__container">
              <?php
                get_template_part( 'modules/page-home-banner' );
              ?>
              </div>
              <?php
            } else {
                $bannerTitle = get_field('header_title');
                $bannerDesc = get_field('sub_header_title');
                $button = get_field('cta_banner');
                $buttonText = get_field('cta_text');
              ?>
                <div class="about-us-banner__container">
                  <div id="banner-title">

                  <h2><?php echo $bannerTitle; ?></h2>
                  <h4><?php echo $bannerDesc; ?></h4>
                  <?php
                  if($button && $buttonText){
                    ?>
                    <div class="button__about-banner">
                      <a href="<?php echo $button; ?>"><?php echo $buttonText; ?></a>
                  </div>
                  
                  <?php
                  } else {
                    ?>
                    <div class="button__about-banner"></div>
                  <?php 
                  }

                  ?>
                  
              </div>
              </div>

              <?php
            }
          ?>
    </header>