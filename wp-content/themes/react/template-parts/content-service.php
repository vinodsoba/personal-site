<?php

$myServices = new WP_Query(array(
    'post_type' => 'service',
    'post_per_page' => 4,
));

?>

<section class="myservices my2 py2 px2 ">
<h3 class="section-title pt1 pb1">MY SERVICES</h3>
<div class="myservices__container">
<div class="container">
    <div class="row">
        

<?php
while($myServices->have_posts()) {
    $myServices->the_post();

    

?> 

<div class="col-md-2">
    <div class="myservices__image px2 py2">
       <a href="<?php the_permalink()?>"> <?php the_post_thumbnail('professorPortrait')?></a>
       
    </div>
</div>
<div class="col-md-4">
<div class="myservices__title px2 py2">
    <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
    <p><?php the_content(); ?></p>
</div>
</div>

    

  
      
<?php
}
?>
</div>
</div>
</div>
</section>