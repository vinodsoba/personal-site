<?php

$bannerTitle = get_field('header_title');
$bannerDesc = get_field('sub_header_title');
$button = get_field('cta_banner');
$buttonText = get_field('cta_text');
?>

    <div class="about-us-banner__container">
        <div id="banner-title">

            <h2><?php echo $bannerTitle; ?></h2>
            <h4><?php echo $bannerDesc; ?></h4>
        <?php
            if($button && $buttonText){
        ?>
            <div class="button__about-banner">
                <a href="<?php echo $button; ?>"><?php echo $buttonText; ?></a>
            </div>

        <?php
            } else {
        ?>
        <div class="button__about-banner"></div>
        <?php 
        }
        ?>

</div>
</div>