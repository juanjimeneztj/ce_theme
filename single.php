<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

get_header();

if (have_posts()) :
    while (have_posts()) : the_post();
        $cat = get_the_category(); 
    endwhile;
endif;

$catName = str_replace(" ","-",$cat[0]->cat_name);
switch ($catName) {
    case 'weekly-spotlight':
        include dirname( __FILE__ ) . '/single-weekly-spotlight.php';
        break;
    case 'tech-talk':
        include dirname( __FILE__ ) . '/single-tech-talk.php';
        break;
    default:
        include dirname( __FILE__ ) . '/404.php';
        break;
}

get_footer();