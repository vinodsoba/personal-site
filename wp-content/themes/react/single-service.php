<?php

get_header();


while(have_posts()){
    the_post();
    ?>

    <div class="flex-container container">
        <div class="item-1">image</div>
        <div class="item-2"><p><?php the_content(); ?></p></div>
    </div>
        
    <?php
}


get_footer();

?>