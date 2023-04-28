<?php 

while(have_posts()){
    the_post();
?>
    <div class="shop">
        <span class="product-title"><?php echo the_content(); ?></span>
    </div>
<?php
}
?>
    
