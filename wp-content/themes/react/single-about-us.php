<?php
/*
Template Name: About Us
Author: Vinod
*/

get_header();
?>

<?php
    while(have_posts()) {
        the_post();
    ?>

    <div class="container">
        <div class="section-title pt1 pb1">
            <h1 ><?php the_title(); ?></h1>
            <p><?php the_content(); ?></p>
        </div>
    </div>

<?php    
    }


get_footer();
