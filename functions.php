<?php

function juanjimeneztj_setup() {
    load_theme_textdomain( "my_theme", TEMPLATEPATH . "/languages");

    add_theme_support( 'post-thumbnails' );

    add_theme_support( 'automatic-feed-links' );

    add_theme_support( 'title-tag' );

    add_theme_support( 'custom-logo', array(
        'height' => 240,
        'width' => 240,
        'flex-height' => true,
    ) );

    register_nav_menus(array(
        'header-menu' => 'Header Menu',
        'footer-menu' => 'Footer Menu',
    ));

    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
}
add_action( 'after_setup_theme', 'juanjimeneztj_setup' );

function juanjimeneztj_cssjs() {
    wp_enqueue_style( 'chartexperts-style', get_template_directory_uri() . '/css/styles.css' );
    wp_enqueue_script( 'chartexperts-js', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), '', true );
}
add_action( 'wp_enqueue_scripts', 'juanjimeneztj_cssjs' );

function juanjimeneztj_customize_register($wp_customize){

    $wp_customize->add_section('gsweb_juanjimeneztj_vip_btn', array(
        'title' => __('VIP BUTTON', 'chartexpert'),
        'priority' => 130,
    ));

    $wp_customize->add_setting('gsweb_juanjimeneztj_vip_btn_text', array(
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gsweb_juanjimeneztj_vip_btn_text',
            array(
                'label'          => __( 'Button Text:', 'chartexpert' ),
                'section'        => 'gsweb_juanjimeneztj_vip_btn',
                'type'           => 'text',
            )
        )
	);
	
	$wp_customize->add_setting('gsweb_juanjimeneztj_vip_btn_url', array(
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gsweb_juanjimeneztj_vip_btn_url',
            array(
                'label'          => __( 'Button URL:', 'chartexpert' ),
                'section'        => 'gsweb_juanjimeneztj_vip_btn',
                'type'           => 'text',
            )
        )
    );
    
    $wp_customize->add_section('gsweb_juanjimeneztj_top_navbar', array(
        'title' => __('Top Navbar', 'chartexpert'),
        'priority' => 130,
    ));
    
    $wp_customize->add_setting('gsweb_juanjimeneztj_top_navbar_text_title', array(
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gsweb_juanjimeneztj_top_navbar_text_title',
            array(
                'label'          => __( 'Information to display on top of the page:', 'chartexpert' ),
                'section'        => 'gsweb_juanjimeneztj_top_navbar',
                'type'           => 'text'
            )
        )
    );
	
	$wp_customize->add_setting('gsweb_juanjimeneztj_top_navbar_text_btn', array(
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gsweb_juanjimeneztj_top_navbar_text_btn',
            array(
                'label'          => __( 'Button Text:', 'chartexpert' ),
                'section'        => 'gsweb_juanjimeneztj_top_navbar',
                'type'           => 'text'
            )
        )
	);
	
	$wp_customize->add_setting('gsweb_juanjimeneztj_top_navbar_text_url', array(
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gsweb_juanjimeneztj_top_navbar_text_url',
            array(
                'label'          => __( 'Button URL:', 'chartexpert' ),
                'section'        => 'gsweb_juanjimeneztj_top_navbar',
                'type'           => 'text'
            )
        )
    );
	
	$wp_customize->add_setting('gsweb_juanjimeneztj_top_navbar_text_color', array(
		'transport' => 'refresh',
		'default'   => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
    ));
    
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gsweb_juanjimeneztj_top_navbar_text_color',
            array(
                'label'          => __( 'Button Text Color:', 'chartexpert' ),
                'section'        => 'gsweb_juanjimeneztj_top_navbar',
				'priority' => 1,
            )
        )
	);
	
	$wp_customize->add_setting('gsweb_juanjimeneztj_top_navbar_text_nav_color', array(
		'transport' => 'refresh',
		'default'   => '#fa0000',
		'sanitize_callback' => 'sanitize_hex_color',
    ));
    
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gsweb_juanjimeneztj_top_navbar_text_nav_color',
            array(
                'label'          => __( 'Navbar Background Color:', 'chartexpert' ),
                'section'        => 'gsweb_juanjimeneztj_top_navbar',
				'priority' => 1,
            )
        )
    );
    
}

add_action('customize_register', 'juanjimeneztj_customize_register');
// End functions JUANJIMENEZTJ