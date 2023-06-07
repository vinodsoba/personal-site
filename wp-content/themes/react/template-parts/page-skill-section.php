<?php

$skillContent = new WP_Query(array(
    'post_type' => 'skill',
    
));
?>
<section id="section1" class="section-myskils container pt2 pb2">
    <h3 class="section-title pt1 pb1">MY SKILLS</h3>
<div class="row skill__container">
    
<?php
while($skillContent->have_posts()){
    $skillContent->the_post();
   
    ?>
        <div class="card" style="width: 18rem;">
        <h5 class="card-title"><?php echo get_the_title(); ?></h5>
            <div class="card-body">
                <div class="card-image"><?php echo the_post_thumbnail('professorPortrait'); ?></div>
                <p class="card-text"><?php echo the_content(); ?></p>
                <div class="button__homepage-banner">
                </div>
            </div>
        </div>   
    <?php
}


echo '</div>';
echo '</section>';


?>