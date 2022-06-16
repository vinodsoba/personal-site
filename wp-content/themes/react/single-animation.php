<?php
/*
Template Name: Animation
Author: Vinod
*/

get_header();
?>

<?php 
    get_template_part( 'template-parts/content-animation', get_post_type() );
?>

<?php
get_footer();
?>
