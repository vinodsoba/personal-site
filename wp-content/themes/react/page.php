<?php
get_header();

while(have_posts()) {
    the_post();
?>

<div class="container py2" style="text-align: center"><?php the_content(); ?></div>
<?php
}
?>

<?php
get_footer();