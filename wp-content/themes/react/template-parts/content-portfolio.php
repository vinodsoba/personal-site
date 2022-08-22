<?php

$myPortfolio = new WP_Query(array(
    'post_type' => 'portfolio',
    'orderby'   => 'date',
    'order' => 'ASC',
    'posts_per_page' => 6,
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

<div class="col-md-6 items">
    <div class="myportfolio__image px2 py2">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('professorLandscape')?></a>
    </div>
</div>
      
<?php
}
?>
</div>
</div>
</div>
</section>