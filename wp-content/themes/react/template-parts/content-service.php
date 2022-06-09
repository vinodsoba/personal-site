<?php

$myServices = new WP_Query(array(
    'post_type' => 'service',
    'post_per_page' => 4,
));

?>

<section class="myservices my2 py2 px2 ">
<h1 class="section-title pt1 pb1">MY SERVICES</h1>
<div class="myservices__container">
<div class="container">
    <div class="row">
        

<?php
while($myServices->have_posts()) {
    $myServices->the_post();

?> 

<div class="col-md-2">
    <div class="myservices__image px2 py2">
        <?php the_post_thumbnail('professorPortrait')?>
    </div>
</div>
<div class="col-md-4">
<div class="myservices__title px2 py2">
    <h2><?php the_title(); ?></h2>
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