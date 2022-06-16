<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
<?php
  $bannerBackground = get_field('home_page_banner'); 
  if(!$bannerBackground ){
  ?>
    <header class="header__container" style="background-color: blue;">
  <?php
      get_template_part( 'template-parts/page-navigation' );
        
  } else if (!is_front_page()){
          
  ?>
    <header class="about__container" style="background-image: url('<?php echo $bannerBackground ?>')">
      <?php
      get_template_part( 'template-parts/page-navigation' );
  }
        
        else {
          ?>
            <header class="header__container" style="background-image: url('<?php echo $bannerBackground ?>')">
          <?php
             get_template_part( 'template-parts/page-navigation' );
        }

          if(is_front_page()) {

            get_template_part( 'template-parts/page-home-banner' );

          } else { 
            get_template_part( 'template-parts/page-about-banner');
          }
          // ends front page condition

          if(is_front_page()) {
          ?>

          <div class="flex-container">
            <div class="down-arrow">
              <a href="#section1"><i class="fa-solid fa-arrow-down"></i> </a>
            </div>
          </div>

          <?php
          }
          ?>            
  </header>