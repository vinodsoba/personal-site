<?php
get_header();

while(have_posts()) {
    the_post();
?>

<div><?php the_content(); ?></div>
<?php
}
?>

<?php
get_footer();