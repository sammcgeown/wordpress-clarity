<?php

function clarity_main_menu() {
    register_nav_menu('clarity-header-navigation',__( 'Clarity Header Navigation' ));
    register_nav_menu('clarity-mobile-navigation',__( 'Clarity Mobile Navigation' ));
}
add_action( 'init', 'clarity_main_menu' );


function clarity_menu_add_class( $atts, $item, $args ) {
    $class = 'nav-link'; // or something based on $item
    $atts['class'] = $class;
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'clarity_menu_add_class');

/**
 * Register our sidebars and widgetized areas.
 *
 */
function clarity_widgets_init() {
	register_sidebar( array(
		'name'          => 'Clarity Cards Sidebar',
		'id'            => 'clarity_cards_right',
		'before_widget' => '<div class="card">',
		'after_widget'  => '</div></div></div>',
		'before_title'  => '<div class="card-header">',
		'after_title'   => '</div><div class="card-block"><div class="card-text">',
	) );
}
add_action( 'widgets_init', 'clarity_widgets_init' );

add_action( 'customize_register' , 'clarity_theme_options' );
function clarity_theme_options($wp_customize) {
    $wp_customize->add_section( 
        'clarity_theme_options', 
        array(
            'title'       => __( 'Clarity Theme Settings', 'clarity' ),
            'priority'    => 1,
            'capability'  => 'edit_theme_options',
            'description' => __('Configure theme options', 'clarity'), 
        ) 
    );
    $wp_customize->add_setting(
        'ClarityScheme', array(
            'default'        => 'clarity-ui.css',
        )
    );
    $wp_customize->add_control(
        'ClarityScheme', array(
            'label'        => 'Select scheme',
            'section'    => 'clarity_theme_options',
            'type'      =>  'select',
            'choices'   =>  array(
                'clarity-ui-dark.css'  =>  'Dark',
                'clarity-ui.css' =>  'Light'
            )
        )
    );
    $wp_customize->add_setting(
        'ClarityHeaderColour', array(
            'default'        => 'header-1',
        )
    );
    $wp_customize->add_control(
        'ClarityHeaderColour', array(
            'label'        => 'Select header options',
            'section'    => 'clarity_theme_options',
            'type'      =>  'select',
            'choices'   =>  array(
                'header-1'  =>  'header-1',
                'header-2'  =>  'header-2',
                'header-3'  =>  'header-3',
                'header-4'  =>  'header-4',
                'header-5'  =>  'header-5',
                'header-6'  =>  'header-6'
            )
        )
    );
    $wp_customize->add_setting(
        'ClarityShowHeaderSearch', array(
            'default'   => '1',
        )
    );
    $wp_customize->add_control(
        'ClarityShowHeaderSearch', array(
            'label'        => 'Show search bar in header',
            'section'    => 'clarity_theme_options',
            'settings'  => 'ClarityShowHeaderSearch',
            'type'      =>  'checkbox',
            'sanitize_callback' => 'clarity_sanitize_checkbox',
        )
    );
    $wp_customize->add_setting(
        'ClarityShowHeaderAdmin', array(
            'default'   => '1',
        )
    );
    $wp_customize->add_control(
        'ClarityShowHeaderAdmin', array(
            'label'        => 'Show admin link in header',
            'section'    => 'clarity_theme_options',
            'settings'  => 'ClarityShowHeaderAdmin',
            'type'      =>  'checkbox',
            'sanitize_callback' => 'clarity_sanitize_checkbox',
        )
    );
    $wp_customize->add_setting(
        'ClarityShowHeaderRSS', array(
            'default'   => '1',
        )
    );
    $wp_customize->add_control(
        'ClarityShowHeaderRSS', array(
            'label'        => 'Show RSS link in header',
            'section'    => 'clarity_theme_options',
            'settings'  => 'ClarityShowHeaderRSS',
            'type'      =>  'checkbox',
            'sanitize_callback' => 'clarity_sanitize_checkbox',
        )
    );

    function clarity_sanitize_checkbox( $checked ) {
        // Boolean check.
        return ( ( isset( $checked ) && true == $checked ) ? true : false );
    }
}
// Custom Logo Support
add_theme_support( 'custom-logo' );
function clarity_custom_logo() {
    $defaults = array(
        'height'      => 40,
        'width'       => 100,
        'flex-height' => false,
        'flex-width'  => false,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );

}
add_action( 'after_setup_theme', 'clarity_custom_logo' );

?>