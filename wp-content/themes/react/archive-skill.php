<?php
get_header();
?>
<?php 
while(have_posts()){
    the_post();
    ?>

    <h1><?php echo the_title(); ?> skills test</h1>

<?php
}

get_footer();
?>

