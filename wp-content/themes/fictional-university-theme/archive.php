<?php

get_header();
pageBanner(array(
  'title' => get_the_archive_title(),
  'subtitle' => get_the_archive_description()
));
?>

<div class="container container--narrow page-section">
  <?php 
    while(have_posts()){
      the_post(); ?>
      <div class="post-item">
          <h2 class="headline headline--medium headline--post-title"><a href="<?php echo get_permalink()?>"><?php echo the_title(); ?></a></h2>

          <div class="metabox">
            <p>Posted By: <?php echo get_the_author_link(); ?> <?php echo get_the_time('n.j.y'); ?> <?php echo get_the_category_list( ',' )?></p>
          </div>

          <div class="generic-content">
              <?php the_excerpt(); ?>
              <p><a  class="btn btn--blue" href="<?php the_permalink(); ?>">Continue Reading</a></p>
          </div>
      </div>
      <?php 
    }
    echo paginate_links();
  ?>
</div>

<?php
get_footer();
?>