<?php 

$bannerTitle = get_field('header_title');
$bannerDesc = get_field('sub_header_title');
$button = get_field('cta_banner');
?>

<div class="homepage-banner__container row mt7 mb8">
<div id="banner-title">

    <h2><?php echo $bannerTitle; ?></h2>
    <h4><?php echo $bannerDesc; ?></h4>

    <div class="button__homepage-banner">
        <a href="<?php echo $button; ?>">My Portfolio</a>
    </div>
</div>
</div>


