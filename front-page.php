<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

get_header();?>

<main class="main-content">

    <?php 
        $actP = 0;
        $carouselCode = '<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"><ol class="carousel-indicators">';
        $carouselItemsCode = "";
        $carouselArticlesCode = "";

        if (have_posts()) :
            while (have_posts()) : the_post();
                if($actP === 0){
                    $carouselItemsCode="<li data-target='#carouselExampleIndicators' data-slide-to='$actP' class='active'></li>";
                    $carouselArticlesCode = "<div class='carousel-item active'><h1>".get_the_title()."</h1></div>";
                    $actP++;
                }else{
                    $carouselItemsCode+="<li data-target='#carouselExampleIndicators' data-slide-to='$actP'></li>";
                    $carouselArticlesCode = "<div class='carousel-item'>".get_the_title()."</div>";
                    $actP++;
                }
            endwhile;
        endif;
    ?>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?=$carouselItemsCode?>
        </ol>
        <div class="carousel-inner">
            <?=$carouselArticlesCode?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <?php if (have_posts()) :

        while (have_posts()) : the_post();?>

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
                            <?php get_sidebar();?>
                        </aside>
                    </div>
                </div><!-- row -->
            </div><!-- container -->

        <?php endwhile;
    endif;?>

</main>


<?php get_footer();