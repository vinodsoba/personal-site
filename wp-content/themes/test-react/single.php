<?php
$variation_sku = get_post_meta( $value['variation_id'] , '_sku', TRUE );
while(have_posts()){
    the_post()

    ?>
    <div class="product-detail">
        <span class="product-title"><?php echo the_title(); ?></span>
        <p><?php echo the_content(); ?></p>
    </div>
<?php
}
?>