<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

get_header();

$juanjimeneztj = new core_gsweb();

?>

<main class="main-content home-page">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-lx-7">
                <?php 
                    $juanjimeneztj->carousel([
                        'indicators' => true,
                        'categories' => [
                            'weekly-spotlight',
                            'tech-talk'
                        ]
                    ]);
                ?>

                <div class="recent-posts mt-4 mb-4">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <?php 
                                    $juanjimeneztj->recent_posts_home();
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-lx-5">
                <?php if ( is_active_sidebar( 'home-page-widget' ) ) : ?>
                    <div id="home-page-widget" class="primary-sidebar widget-area" role="complementary">
                        <?php dynamic_sidebar( 'home-page-widget' ); ?>
                    </div>
                <?php endif; ?>

                <?php $juanjimeneztj->stock_home_widget_tv(); ?>
                <?php $juanjimeneztj->stock_home_widget_market(); ?>

                <div class="block-home-page mb-4">
                    <h1 class="text-uppercase">Lorem Ipsum</h1>
                    <a href="#" class="btn oswald text-uppercase">Get It Now</a>
                </div>

                <?php $juanjimeneztj->aside_post_home([
                    'title' => 'Tech talk',
                    'posts_per_page' => 1,
                    'categories' => [
                        'tech-talk'
                    ]
                ]) ?>
            </div>
        </div>
    </div>
</main>


<?php get_footer();