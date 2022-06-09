<?php
get_header();

get_template_part( 'template-parts/page-skill-section' );

get_template_part( 'template-parts/content-service', get_post_type() );

get_template_part( 'template-parts/content-portfolio', get_post_type() );
?> 
<?php
get_footer();
?>