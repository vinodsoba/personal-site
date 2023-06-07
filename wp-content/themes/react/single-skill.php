<?php
get_header();
?>
<?php
    while(have_posts()) {
        the_post();
    ?>

    <div class="container custom">
        <div class="section-title pt1 pb1">
            <h3><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
        </div>
    </div>

<?php    
    }
   
   
get_footer();