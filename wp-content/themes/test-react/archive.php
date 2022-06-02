<?php
get_header();

while(have_posts()) {
    the_post();
    ?>

    <h1><?php the_title(); ?></h1>
    <p><?php the_excerpt(); ?></p>
    <a href="<?php the_permalink()?>">View More</a>
<?php
}
?>



<?php
get_footer();
?>