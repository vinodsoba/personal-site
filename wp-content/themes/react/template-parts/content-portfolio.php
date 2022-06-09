<?php

$myPortfolio = new WP_Query(array(
    'post_type' => 'portfolio',
    'post_per_page' => -1,
));

?>

<section class="myportfolio my2 py2 px2 ">
<h1 class="section-title pt1 pb1">MY PROJECTS</h1>
<div class="myportfolio__container">
<div class="container">
    <div class="row">
        

<?php
while($myPortfolio->have_posts()) {
    $myPortfolio->the_post();

?> 

<div class="col-md-6">
    <div class="myportfolio__image px2 py2">
        <?php the_post_thumbnail('professorLandscape')?>
    </div>
</div>
      
<?php
}
?>
</div>
</div>
</div>
</section>