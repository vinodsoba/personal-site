<?php

get_header();


while(have_posts()){
    the_post();

    $myservicesContent = get_field('my_services');
    $myservicesImage = get_field('my_services_image');

    ?>

    <div class="flex-container container">
        <div class="item-1"><img src="<?php echo $myservicesImage; ?>" /></div>
        <div class="item-2">
            <p><?php the_content(); ?></p>
            <p><?php echo $myservicesContent; ?></p>
        </div>
    </div>
        
    <?php
}


get_footer();

?>