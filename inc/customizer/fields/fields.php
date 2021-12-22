<?php 
/**
 * @Packge     : Docmed
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer section fields
 *
 */

/***********************************
 * General Section Fields
 ***********************************/

 // Theme color field
// Epsilon_Customizer::add_field(
//     'docmed_theme_color',
//     array(
//         'type'        => 'epsilon-color-picker',
//         'label'       => esc_html__( 'Theme Color', 'docmed' ),
//         'description' => esc_html__( 'Select the theme color.', 'docmed' ),
//         'sanitize_callback' => 'sanitize_text_field',
//         'section'     => 'docmed_general_section',
//         'default'     => '#131313',
//     )
// );

// Header Top sections
Epsilon_Customizer::add_field(
    'header_color_section',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Header Top Section', 'docmed' ),
        'section'     => 'docmed_header_section',

    )
);

// Header top email
Epsilon_Customizer::add_field(
    'docmed_header_top_email',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Header Top Email', 'docmed' ),
        'section'     => 'docmed_header_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => esc_html__( 'info@docmed.com', 'docmed' ),
    )
);

// Header top phone number
Epsilon_Customizer::add_field(
    'docmed_header_top_phone',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Header Top Phone Number', 'docmed' ),
        'section'     => 'docmed_header_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => esc_html__( '160160', 'docmed' ),
    )
);

// Header button label
Epsilon_Customizer::add_field(
    'docmed_header_btn_text',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Header Button Text', 'docmed' ),
        'section'     => 'docmed_header_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => esc_html__( 'Make an Appointment', 'docmed' ),
    )
);

// External url or Popup form
Epsilon_Customizer::add_field(
    'docmed_form_url_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Popup Form/Ex. URL', 'docmed' ),
        'description'       => esc_html__( 'Popup Form Shortcode or External URL?', 'docmed' ),
        'section'     => 'docmed_header_section',
        'default'     => true,
    )
);

// Header button URL
Epsilon_Customizer::add_field(
    'docmed_header_btn_url',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Form Shortcode or External URL', 'docmed' ),
        'section'     => 'docmed_header_section',
        'sanitize_callback' => 'sanitize_text_field',
    )
);


// Header top bg color
Epsilon_Customizer::add_field(
    'docmed_header_top_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Top Bg Color', 'docmed' ),
        'description' => esc_html__( 'Select the color.', 'docmed' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'docmed_header_section',
        'default'     => '#F5FBFF',
    )
);

// Header call button bg color
Epsilon_Customizer::add_field(
    'docmed_book_btn_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Icons & Button Color', 'docmed' ),
        'description' => esc_html__( 'Select the color.', 'docmed' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'docmed_header_section',
        'default'     => '#009DFF',
    )
);

// Header color sections
Epsilon_Customizer::add_field(
    'header_color_section',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Header Color Section', 'docmed' ),
        'section'     => 'docmed_header_section',

    )
);
 
// Header background color field
Epsilon_Customizer::add_field(
    'docmed_header_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Sticky Header BG Color', 'docmed' ),
        'description' => esc_html__( 'Select the header background color.', 'docmed' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'docmed_header_section',
        'default'     => '#ffffff',
    )
);

// Header nav menu color field
Epsilon_Customizer::add_field(
    'docmed_header_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu color', 'docmed' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'docmed_header_section',
        'default'     => '#131313',
    )
);

// Header nav menu hover color field
Epsilon_Customizer::add_field(
    'docmed_header_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu hover color', 'docmed' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'docmed_header_section',
        'default'     => '#808080',
    )
);

// Dropdown menu color field
Epsilon_Customizer::add_field(
    'docmed_dropdown_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu color', 'docmed' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'docmed_header_section',
        'default'     => '#131313',
    )
);

// Dropdown menu hover color field
Epsilon_Customizer::add_field(
    'docmed_dropdown_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu hover color', 'docmed' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'docmed_header_section',
        'default'     => '#808080',
    )
);


// Social Profile section
Epsilon_Customizer::add_field(
    'footer_social_profile_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Social Profile Section', 'docmed' ),
        'section'     => 'docmed_social_section',

    )
);

// Social Profiles Show/Hide
Epsilon_Customizer::add_field(
    'docmed_social_profile_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Social Profile Show/Hide', 'docmed' ),
        'section'     => 'docmed_social_section',
        'default'     => true,
    )
);

// Footer Social Profile links
Epsilon_Customizer::add_field(
	'docmed_social_profiles',
	array(
		'type'         => 'epsilon-repeater',
		'section'      => 'docmed_social_section',
		'label'        => esc_html__( 'Social Profile Links', 'docmed' ),
        'button_label' => esc_html__( 'Add new social link', 'docmed' ),
		'row_label'    => array(
			'type'  => 'field',
			'field' => 'social_link_title',
		),
		'default'      => [
            [
                'social_link_title' => esc_html__( 'Facebook', 'docmed' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-facebook',
            ],
            [
                'social_link_title' => esc_html__( 'Twitter', 'docmed' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-twitter',
            ],
            [
                'social_link_title' => esc_html__( 'Instagram', 'docmed' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-instagram',
            ],
        ],
		'fields'       => array(
			'social_link_title'       => array(
				'label'             => esc_html__( 'Title', 'docmed' ),
				'type'              => 'text',
				'sanitize_callback' => 'wp_kses_post',
				'default'           => 'Facebook',
			),
			'social_url' => array(
				'label'             => esc_html__( 'Social URL', 'docmed' ),
				'type'              => 'text',
				'sanitize_callback' => 'sanitize_text_field',
				'default'           => '#',
			),
			'social_icon'        => array(
				'label'   => esc_html__( 'Icon', 'docmed' ),
				'type'    => 'epsilon-icon-picker',
				'default' => 'fa fa-facebook',
			),
			
		),
	)
);

/***********************************
 * Blog Section Fields
 ***********************************/
 
// Post excerpt length field
Epsilon_Customizer::add_field(
    'docmed_excerpt_length',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Set post excerpt length', 'docmed' ),
        'description' => esc_html__( 'Set post excerpt length.', 'docmed' ),
        'section'     => 'docmed_blog_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => '30',
    )
);

// Blog single page social share icon
Epsilon_Customizer::add_field(
    'docmed_blog_meta',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog page post meta show/hide', 'docmed' ),
        'section'     => 'docmed_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'docmed_like_btn',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Like Button show/hide', 'docmed' ),
        'section'     => 'docmed_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'docmed_blog_share',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Share show/hide', 'docmed' ),
        'section'     => 'docmed_blog_section',
        'default'     => true
    )
);
 

/***********************************
 * Footer Section Fields
 ***********************************/

// Footer Widget section
Epsilon_Customizer::add_field(
    'footer_widget_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Widget Section', 'docmed' ),
        'section'     => 'docmed_footer_section',

    )
);

// Footer widget toggle field
Epsilon_Customizer::add_field(
    'docmed_footer_widget_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Footer widget show/hide', 'docmed' ),
        'description' => esc_html__( 'Toggle to display footer widgets.', 'docmed' ),
        'section'     => 'docmed_footer_section',
        'default'     => true,
    )
);

// Footer Additional Settings section
Epsilon_Customizer::add_field(
    'footer_additional_settings_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Additional Settings', 'docmed' ),
        'section'     => 'docmed_footer_section',

    )
);


// Footer short text field
Epsilon_Customizer::add_field(
    'docmed_footer_text',
    array(
        'type'              => 'textarea',
        'label'             => esc_html__( 'Footer short text', 'docmed' ),
        'section'           => 'docmed_footer_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => esc_html__( 'Firmament morning sixth subdue darkness creeping gathered divide.', 'docmed' ),
    )
);

 
/***********************************
 * 404 Page Section Fields
 ***********************************/

// 404 text #1 field
Epsilon_Customizer::add_field(
    'docmed_fof_titleone',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #1', 'docmed' ),
        'section'           => 'docmed_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #2 field
Epsilon_Customizer::add_field(
    'docmed_fof_titletwo',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #2', 'docmed' ),
        'section'           => 'docmed_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #1 color field
Epsilon_Customizer::add_field(
    'docmed_fof_textone_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #1 Color', 'docmed' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'docmed_fof_section',
        'default'     => '#000000',
    )
);
// 404 text #2 color field
Epsilon_Customizer::add_field(
    'docmed_fof_texttwo_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #2 Color', 'docmed' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'docmed_fof_section',
        'default'     => '#656565',
    )
);
// 404 background color field
Epsilon_Customizer::add_field(
    'docmed_fof_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Page Background Color', 'docmed' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'docmed_fof_section',
        'default'     => '#fff',
    )
);

// Footer Copyright section
Epsilon_Customizer::add_field(
    'docmed_footer_copyright_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Copyright Section', 'docmed' ),
        'section'     => 'docmed_footer_section',
        'default'     => true,

    )
);

// Footer copyright text field
$url = 'https://colorlib.com/';
$copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'docmed' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
Epsilon_Customizer::add_field(
    'docmed_footer_copyright_text',
    array(
        'type'        => 'epsilon-text-editor',
        'label'       => esc_html__( 'Footer copyright text', 'docmed' ),
        'section'     => 'docmed_footer_section',
        'default'     => wp_kses_post( $copyText ),
    )
);

// Footer widget bg color field
Epsilon_Customizer::add_field(
    'docmed_footer_widget_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Widget Bg Color', 'docmed' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'docmed_footer_section',
        'default'     => '#1F1F1F',
    )
);

// Footer widget text color field
Epsilon_Customizer::add_field(
    'docmed_footer_widget_heading_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Heading Color', 'docmed' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'docmed_footer_section',
        'default'     => '#ffffff',
    )
);

// Footer widget text color field
Epsilon_Customizer::add_field(
    'docmed_footer_widget_text_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Text Color', 'docmed' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'docmed_footer_section',
        'default'     => '#C7C7C7',
    )
);

// Footer widget anchor color field
Epsilon_Customizer::add_field(
    'docmed_footer_widget_anchor_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Color', 'docmed' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'docmed_footer_section',
        'default'     => '#BABABA',
    )
);

// Footer widget anchor hover color field
Epsilon_Customizer::add_field(
    'docmed_footer_widget_anchor_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Hover Color', 'docmed' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'docmed_footer_section',
        'default'     => '#5DB2FF',
    )
);

