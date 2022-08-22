<?php
get_header();
?>

<div class="container">
    <div class="portfolio-section py2">
    <h1>My Skills</h1>
<?php 
while(have_posts()){
    the_post();
    pageAboutBanner();
    ?>
    <a href="<?php the_permalink() ?>"><h3><?php echo the_title(); ?></h3></a>
<?php
}
?>
</div>
</div>

<?php
get_footer();
?>

