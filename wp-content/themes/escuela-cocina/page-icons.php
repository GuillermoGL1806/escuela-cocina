<?php
/* 
** Template Name: Icon Page
*/

get_header();

while (have_posts()) : the_post();

    get_template_part('template-parts/content', 'pages');/* template-part with a compound word */

    get_template_part('template', 'parts/icons');/* template-part with a single word */

endwhile;
get_footer();