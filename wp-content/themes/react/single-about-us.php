<?php
/*
Template Name: About Us
Template Post Type: post, page, portfolio
Author: Vinod
*/

get_header();
?>

<?php
    while(have_posts()) {
        the_post();
    ?>
  
        <div class="flex-container py2 container">
            <div class="item-1"><?php the_post_thumbnail( 'professorPortrait' ); ?></div>
            <div class="item-2">
                <h3><?php the_title(); ?></h3>
                <p><?php the_content(); ?></p>
            </div>
        </div>
       

<?php    
    }


get_footer();

?>
