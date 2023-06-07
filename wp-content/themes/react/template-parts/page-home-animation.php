<section class="myanimation my2 py2 px2 ">
<h3 class="section-title pt1 pb1">ANIMATION</h3>
<div class="myanimation__container">
<div class="container">
    <div class="row">
        
<?php
    $animtionPost = new WP_Query(
        array(
            'post_type' => 'page',
            'post__in' => array( 246 )
        )
    );
    if( $animtionPost->have_posts()) {
       
    while($animtionPost->have_posts()) {
    $animtionPost->the_post();

    $animation_btn = get_field('cta_text');
    $animation_cta_banner = get_field('cta_banner');
        ?>
        <div class="col-md-6 items">
            <div class="myanimation__container item-1 px2 py2">
                <?php the_content(); ?>
                <div class="button_home py3">
                <a href="<?php echo $animation_cta_banner; ?>"><?php echo $animation_btn; ?></a>
                </div>
            </div>
        </div>
        <div class="col-md-6 item- 2 items">
            <div class="myanimation__image px2 py2">
                <?php the_post_thumbnail( 'professorPortrait' ); ?>
            </div>
        </div>        
            
<?php    
    }
    }
?>
</div>
</div>
</div>
</section>