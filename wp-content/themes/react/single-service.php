<?php
get_header();
pageBanner(array(
    'title' => 'My web development skills',
    'subtitle' => 'I like to build websites'
));

while(have_posts()){
    the_post();

    get_template_part( 'template-parts/content', get_post_type() );
}


get_footer();

?>