<?php

$skillContent = new WP_Query(array(
    'post_type' => 'skill',
    
));
?>
<div class="container">
    <h1 class="section-title pt1 pb1">My Skills</h1>
<div class="row skill__container">
    
<?php
while($skillContent->have_posts()){
    $skillContent->the_post();
   
    ?>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <div class="card-image"><?php echo the_post_thumbnail('professorPortrait'); ?></div>
                <h5 class="card-title"><?php echo get_the_title(); ?></h5>
                <p class="card-text"><?php echo get_the_content(); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn btn-primary">View More</a>
            </div>
        </div>   
    <?php
}


echo '</div>';
echo '</div>';


?>