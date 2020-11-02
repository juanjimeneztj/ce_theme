<?php
    require_once 'core/juanjimeneztj.class.php'; 
    $juanjimeneztj = new core_gsweb();    
?>

<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo( 'charset' );?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php
        $juanjimeneztj->vendorBS('css');
        $juanjimeneztj->vendorFAW('css');
    ?>
    
    <title><?=bloginfo('name')?></title>

    <?php wp_head() ?>
</head>
<body <?php body_class();?>>

<?php
    $juanjimeneztj->top_navbar();
?>

<header>
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-md navbar-light" role="navigation">
                    <?php $juanjimeneztj->logo() ?>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-1" aria-controls="navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'juanjimeneztj' ); ?>">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <?php
                        wp_nav_menu([
                            'menu' => 'primary',
                            'theme_location' => 'header-menu',
                            'menu_id' => 'header-menu',
                            'depth' => 2,
                            'container' => 'div',
                            'container_class' => 'collapse navbar-collapse justify-content-end',
                            'container_id' => 'navbar-collapse-1',
                            'menu_class' => 'nav navbar-nav',
                            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                            'walker' => new wp_bootstrap_navwalker()
                        ]);
                    ?>
                </nav>
            </div>
        </div>
    </div>
</header>

<?php
    if($juanjimeneztj->stock_header_active()){
        $juanjimeneztj->stock_header();
    }
?>
    
<?php if ( is_active_sidebar( 'header-widget' ) ) : ?>
    <div id="header-widget" class="primary-header widget-area" role="complementary">
        <?php dynamic_sidebar( 'header-widget' ); ?>
    </div>
<?php endif; ?>