<?php

function pageAboutBanner($args = NULL) {
  if(!$args['header_title']) {
    $args['header_title'] = get_field('header_title');
  }

  if(!$args['sub_header_title']) {
    $args['sub_header_title'] = get_field('sub_header_title');
  }

  if(!$args['home_page_banner']) {
    if(get_field('home_page_banner')) {
      $args['home_page_banner'] = get_field('home_page_banner')['sizes']['pageBanner'];
    } else {
      $args['home_page_banner'] = get_theme_file_uri('/images/ocean.jpg');
    }
   }

  if(!$args['cta_banner']) {
    $args['cta_banner'] = get_field('cta_banner');
  }

  if(!$args['cta_text']) {
    $args['cta_text'] = get_field('cta_text');
  }
  ?>

  <div class="about-us-banner__container">
    <div id="banner-title">
      <h1><?php echo $args['header_title']; ?></h1>
      <h2><?php echo $args['sub_header_title']; ?></h2>
    <?php
      if($args['cta_banner'] && $args['cta_text']){
    ?>
      <div class="button__about-banner">
          <a href="<?php echo $args['cta_banner'];?>" target="_blank"><?php echo $args['cta_text']; ?></a>
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

function pageBanner($args = NULL) {
  if(!$args['header_title']) {
    $args['header_title'] = get_field('header_title');
  }

  if(!$args['sub_header_title']) {
    $args['sub_header_title'] = get_field('sub_header_title');
  }

  if(!$args['home_page_banner']) {
   if(get_field('home_page_banner')) {
     $args['home_page_banner'] = get_field('home_page_banner')['sizes']['pageBanner'];
   } else {
     $args['home_page_banner'] = get_theme_file_uri('/images/ocean.jpg');
   }
  }

  if(!$args['cta_banner']) {
    $args['cta_banner'] = get_field('cta_banner');
  }

  if(!$args['cta_text']) {
    $args['cta_text'] = get_field('cta_text');
  }

  ?>

  <div class="homepage-banner__container row mt7 mb8">
    <div id="banner-title">

      <h1><?php echo $args['header_title']; ?></h1>
      <h2><?php echo $args['sub_header_title']; ?></h2>

      <div class="button__homepage-banner py2">
          <a href="<?php echo $args['cta_banner']; ?>">My Portfolio</a>
      </div>
    </div>
  </div>

<?php
}

function boilerplate_load_assets() {
  //wp_enqueue_script('ourmainjs', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
  wp_enqueue_script('custom', get_theme_file_uri('/src/js/custom.js'), array('jquery'), '1.0', true);
  wp_enqueue_style('ourmaincss', get_theme_file_uri('/dist/main.css'));
  wp_enqueue_style( 'animate', '//cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
  wp_enqueue_style('bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css');
  wp_enqueue_style( 'fontawesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css');  
}

add_action('wp_enqueue_scripts', 'boilerplate_load_assets');

function boilerplate_add_support() {
  register_nav_menus(array(
    'Header Main Menu' => esc_html__( 'headerMainMenu', 'Header Main Menu' ),
    'Footer Main Menu' => esc_html__( 'footerMainMenu', 'Footer Main Menu' ),
    'Footer Menu 2' => esc_html__( 'footerMenu2', 'Footer Menu 2' ),
  ));

  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('professorLandscape', 636, 464, true);
  add_image_size( 'professorPortrait', 480, 650, true);
  add_image_size('pageBanner', 1500, 350, true);
}

add_action('after_setup_theme', 'boilerplate_add_support');


function mywebsite_adjust_queries($query) {
   
  if (!is_admin() AND is_post_type_archive( 'skill' ) AND is_main_query()) {
     $query->set('orderby', 'title');
     $query->set('order', 'ASC');
     $query->set('posts_per_page', -1);
  }
  
  /*if (!is_admin() AND is_post_type_archive( 'event') AND $query->is_main_query() )  {
     $today = date('Ymd');
     $query->set('meta_key', 'event_date');
     $query->set('orderby', 'meta_value_num');
     $query->set('order', 'ASC');
     $query->set('meta_query', array(
        array(
          'key' => 'event_date',
          'compare' => '>=',
          'value' => $today,
          'type' => 'numeric'
        )
      ) 
        );
  }*/
  
}

add_action('pre_get_posts', 'mywebsite_adjust_queries');
