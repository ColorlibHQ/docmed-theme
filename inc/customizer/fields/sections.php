<?php 
/**
 * @Packge     : Docmed
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer panels and sections
 *
 */

/***********************************
 * Register customizer panels
 ***********************************/

$panels = array(
    /**
     * Theme Options Panel
     */
    array(
        'id'   => 'docmed_theme_options_panel',
        'args' => array(
            'priority'       => 0,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => esc_html__( 'Theme Options', 'docmed' ),
        ),
    )
);


/***********************************
 * Register customizer sections
 ***********************************/


$sections = array(

    /**
     * General Section
     */
    // array(
    //     'id'   => 'docmed_general_section',
    //     'args' => array(
    //         'title'    => esc_html__( 'General', 'docmed' ),
    //         'panel'    => 'docmed_theme_options_panel',
    //         'priority' => 1,
    //     ),
    // ),

    /**
     * Social Profiles Section
     */
    array(
        'id'   => 'docmed_social_section',
        'args' => array(
            'title'    => esc_html__( 'Social Profiles', 'docmed' ),
            'panel'    => 'docmed_theme_options_panel',
            'priority' => 2,
        ),
    ),
    
    /**
     * Header Section
     */
    array(
        'id'   => 'docmed_header_section',
        'args' => array(
            'title'    => esc_html__( 'Header', 'docmed' ),
            'panel'    => 'docmed_theme_options_panel',
            'priority' => 3,
        ),
    ),

    /**
     * Blog Section
     */
    array(
        'id'   => 'docmed_blog_section',
        'args' => array(
            'title'    => esc_html__( 'Blog', 'docmed' ),
            'panel'    => 'docmed_theme_options_panel',
            'priority' => 4,
        ),
    ),

    /**
     * Reservation Section
     */
    array(
        'id'   => 'docmed_reservation_section',
        'args' => array(
            'title'    => esc_html__( 'Reservation or Query Settings', 'docmed' ),
            'panel'    => 'docmed_theme_options_panel',
            'priority' => 5,
        ),
    ),

    /**
     * Instagram Section
     */
    array(
        'id'   => 'docmed_instagram_section',
        'args' => array(
            'title'    => esc_html__( 'Instagram Settings', 'docmed' ),
            'panel'    => 'docmed_theme_options_panel',
            'priority' => 6,
        ),
    ),


    /**
     * 404 Page Section
     */
    array(
        'id'   => 'docmed_fof_section',
        'args' => array(
            'title'    => esc_html__( '404 Page', 'docmed' ),
            'panel'    => 'docmed_theme_options_panel',
            'priority' => 7,
        ),
    ),

    /**
     * Footer Section
     */
    array(
        'id'   => 'docmed_footer_section',
        'args' => array(
            'title'    => esc_html__( 'Footer Page', 'docmed' ),
            'panel'    => 'docmed_theme_options_panel',
            'priority' => 8,
        ),
    ),



);


/***********************************
 * Add customizer elements
 ***********************************/
$collection = array(
    'panel'   => $panels,
    'section' => $sections,
);

Epsilon_Customizer::add_multiple( $collection );

?>