<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

get_header();

if (have_posts()) :
    while (have_posts()) : the_post();
?>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <article id="post-<?php the_ID();?>" <?php post_class();?>>
                    <h1><?php the_title();?></h1>

                    <div class="entry-content">
                        <?php the_content();?>
                    </div><!-- entry-content -->
                </article>
            </div>

            <div class="col-md-3">
                <aside class="sidebar">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas beatae dolor quam fuga magni, nemo mollitia dicta obcaecati cupiditate ad amet tempora quisquam omnis enim. Atque labore libero alias nobis.</p>
                </aside>
            </div>
        </div><!-- row -->
    </div><!-- container -->
<?php 
    endwhile;
endif;

get_footer();