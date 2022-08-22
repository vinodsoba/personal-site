<?php
get_header();
pageAboutBanner(array(
    'header_title' => 'Links to my portfolio',
    'sub_header_title' => 'my sub text',
));
?>

<div class="container">
    <div class="portfolio-section py2">
    <h1>My Portfolio Links</h1>
<?php 
while(have_posts()){
    the_post();
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