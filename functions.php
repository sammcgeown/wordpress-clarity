<?php

function clarity_custom_new_menu() {
  register_nav_menu('clarity-header-navigation',__( 'Clarity Header Navigation' ));
}
add_action( 'init', 'clarity_custom_new_menu' );


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
            'priority'    => 100,
            'capability'  => 'edit_theme_options',
            'description' => __('Configure colour schemes', 'clarity'), 
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
            'label'        => 'Select header colour',
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
}
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