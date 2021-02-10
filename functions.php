<?php
/**
 * @Packge       : Colorlib
 * @Version      : 1.0
 * @Author       : Colorlib
 * @Author       URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


/**
 *
 * Define constant
 *
 */

// Base URI
if ( ! defined( 'DOCMED_DIR_URI' ) ) {
	define( 'DOCMED_DIR_URI', get_template_directory_uri() . '/' );
}

// assets URI
if ( ! defined( 'DOCMED_DIR_ASSETS_URI' ) ) {
	define( 'DOCMED_DIR_ASSETS_URI', DOCMED_DIR_URI . 'assets/' );
}

// Css File URI
if ( ! defined( 'DOCMED_DIR_CSS_URI' ) ) {
	define( 'DOCMED_DIR_CSS_URI', DOCMED_DIR_ASSETS_URI . 'css/' );
}

// Js File URI
if ( ! defined( 'DOCMED_DIR_JS_URI' ) ) {
	define( 'DOCMED_DIR_JS_URI', DOCMED_DIR_ASSETS_URI . 'js/' );
}

// Images URI
if ( ! defined( 'DOCMED_DIR_IMGS_URI' ) ) {
	define( 'DOCMED_DIR_IMGS_URI', DOCMED_DIR_ASSETS_URI . 'img/' );
}

// Icon Images
if ( ! defined( 'DOCMED_DIR_ICON_IMG_URI' ) ) {
	define( 'DOCMED_DIR_ICON_IMG_URI', DOCMED_DIR_ASSETS_URI . 'img/icon/' );
}

// Base Directory
if ( ! defined( 'DOCMED_DIR_PATH' ) ) {
	define( 'DOCMED_DIR_PATH', get_parent_theme_file_path() . '/' );
}

//Inc Folder Directory
if ( ! defined( 'DOCMED_DIR_PATH_INC' ) ) {
	define( 'DOCMED_DIR_PATH_INC', DOCMED_DIR_PATH . 'inc/' );
}

//Docmed Libraries Folder Directory
if ( ! defined( 'DOCMED_DIR_PATH_LIBS' ) ) {
	define( 'DOCMED_DIR_PATH_LIBS', DOCMED_DIR_PATH_INC . 'libraries/' );
}

//Classes Folder Directory
if ( ! defined( 'DOCMED_DIR_PATH_CLASSES' ) ) {
	define( 'DOCMED_DIR_PATH_CLASSES', DOCMED_DIR_PATH_INC . 'classes/' );
}

//Hooks Folder Directory
if ( ! defined( 'DOCMED_DIR_PATH_HOOKS' ) ) {
	define( 'DOCMED_DIR_PATH_HOOKS', DOCMED_DIR_PATH_INC . 'hooks/' );
}

// Admin Enqueue script
function docmed_admin_script(){
    wp_enqueue_style( 'docmed-admin', get_template_directory_uri().'/assets/css/docmed-admin.css', false, '1.0.0' );
    wp_enqueue_script( 'docmed_admin', get_template_directory_uri().'/assets/js/docmed-admin.js', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'docmed_admin_script' );



/**
 * Include File
 *
 */
require_once( DOCMED_DIR_PATH_INC . 'docmed-breadcrumbs.php' );
require_once( DOCMED_DIR_PATH_INC . 'docmed-widgets-reg.php' );
require_once( DOCMED_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
require_once( DOCMED_DIR_PATH_INC . 'post-like.php' );
require_once( DOCMED_DIR_PATH_INC . 'docmed-functions.php' );
require_once( DOCMED_DIR_PATH_INC . 'docmed-commoncss.php' );
require_once( DOCMED_DIR_PATH_INC . 'support-functions.php' );
require_once( DOCMED_DIR_PATH_INC . 'wp-html-helper.php' );
require_once( DOCMED_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
require_once( DOCMED_DIR_PATH_INC . 'customizer/customizer.php' );
require_once( DOCMED_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
require_once( DOCMED_DIR_PATH_CLASSES . 'Class-Config.php' );
require_once( DOCMED_DIR_PATH_HOOKS . 'hooks.php' );
require_once( DOCMED_DIR_PATH_HOOKS . 'hooks-functions.php' );
require_once( DOCMED_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
require_once( DOCMED_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );



/**
 * Instantiate Docmed object
 *
 * Inside this object:
 * Enqueue scripts, Google font, Theme support features, Epsilon Dashboard .
 *
 */

$Docmed = new Docmed();