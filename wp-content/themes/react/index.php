<?php

wp_enqueue_script( 'react', '//unpkg.com/react@18/umd/react.development.js');
wp_enqueue_script( 'react-dom', '//unpkg.com/react-dom@18/umd/react-dom.development.js');

get_header(); ?>
 <!-- example react component -->
 <div id="root"></div>
    <!-- end example react component test -->
 
<?php if (have_posts()) {
  while(have_posts()) {
    the_post(); ?>
    <div>
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <?php the_content(); ?>
    </div>
  <?php }
}

get_footer();