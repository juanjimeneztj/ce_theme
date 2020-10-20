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
        include dirname( __FILE__ ) . '/archive-weekly-spotlight.php';
        break;
    case 'tech-talk':
        include dirname( __FILE__ ) . '/archive-tech-talk.php';
        break;
    default:
        include dirname( __FILE__ ) . '/archive-default.php';
        break;
}

get_footer();