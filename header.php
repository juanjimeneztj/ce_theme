<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo( 'charset' );?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?=(file_exists($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/chartexperts/vendor/twbs/bootstrap/dist/css/bootstrap.min.css'))?'<link rel="stylesheet" href="'.get_template_directory_uri().'/vendor/twbs/bootstrap/dist/css/bootstrap.min.css">':'<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">';?>
    <?=(file_exists($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/chartexperts/vendor/fortawesome/font-awesome/css/all.min.css'))?'<link rel="stylesheet" href="'.get_template_directory_uri().'/vendor/fortawesome/font-awesome/css/all.min.css">':'<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">';?>
    
    <title>Chart Expert</title>

    <?php wp_head() ?>
</head>
<body <?php body_class();?>>

<?php
    // Get values ​​to implement top navbar
    $gsweb_juanjimeneztj_navbar_text = get_theme_mod('gsweb_juanjimeneztj_top_navbar_text_title');
    $gsweb_juanjimeneztj_navbar_text_color = get_theme_mod('gsweb_juanjimeneztj_top_navbar_text_color');
    $gsweb_juanjimeneztj_navbar_text_button = get_theme_mod('gsweb_juanjimeneztj_top_navbar_text_btn');
    $gsweb_juanjimeneztj_navbar_text_button_url = get_theme_mod('gsweb_juanjimeneztj_top_navbar_text_url');
    $gsweb_juanjimeneztj_navbar_bg_color = get_theme_mod('gsweb_juanjimeneztj_top_navbar_text_nav_color');

    if($gsweb_juanjimeneztj_navbar_text){
        if($gsweb_juanjimeneztj_navbar_text_button){
            printf('<div class="gsweb-hellobar-rogueinvesting" style="background-color: %5$s;"><div class="close-gsweb-hellorbar-rogueinvesting"><i class="fa fa-times" aria-hidden="true" style="color: %4$s ;"></i></div><p style="color: %4$s ;">%1$s - <a href="%2$s" target="_blank" style="color: %4$s ;">%3$s</a></p></div>',$gsweb_juanjimeneztj_navbar_text,$gsweb_juanjimeneztj_navbar_text_button_url ,$gsweb_juanjimeneztj_navbar_text_button,$gsweb_juanjimeneztj_navbar_text_color,$gsweb_juanjimeneztj_navbar_bg_color);
        }else{
            printf('<div class="gsweb-hellobar-rogueinvesting" style="background-color: %3$s;"><div class="close-gsweb-hellorbar-rogueinvesting"><i class="fa fa-times" aria-hidden="true" style="color: %2$s;"></i></div><p style="color: %2$s;">%1$s</p></div>',$gsweb_juanjimeneztj_navbar_text,$gsweb_juanjimeneztj_navbar_text_color,$gsweb_juanjimeneztj_navbar_bg_color);
        }
    }
?>

<header>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-4 col-lg-3 col-xl-3">
                    <div class="logo-header"><?=get_custom_logo()?></div>
            </div>
            <div class="col col-md-8 col-lg-9 col-xl-9 d-flex justify-content-end">
                <div class="mobile-mnu">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times"></i>
                </div>
                <div class="navigation-header d-flex align-middle">
                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'header-menu',
                            'menu_id' => 'header-menu',
                        ));
                    ?>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
    <div class="tradingview-widget-container__widget"></div>
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
    {
        "symbols": [
            {
            "proName": "FOREXCOM:SPXUSD",
            "title": "S&P 500"
            },
            {
            "proName": "FOREXCOM:NSXUSD",
            "title": "Nasdaq 100"
            },
            {
            "proName": "FX_IDC:EURUSD",
            "title": "EUR/USD"
            },
            {
            "proName": "BITSTAMP:BTCUSD",
            "title": "BTC/USD"
            },
            {
            "proName": "BITSTAMP:ETHUSD",
            "title": "ETH/USD"
            }
        ],
        "colorTheme": "light",
        "isTransparent": true,
        "largeChartUrl": "http://chartexperts.com.devel/",
        "displayMode": "adaptive",
        "locale": "en"
        }
    </script>
</div>
<!-- TradingView Widget END -->