<?php
get_header();
?>
<?php 
while(have_posts()){
    the_post();
    ?>

    <h3><?php echo the_title(); ?></h3>

<?php
}

get_footer();
?>