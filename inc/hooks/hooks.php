<?php 
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	/**
	 *
	 * Before Wrapper
	 *
	 * @Preloader
	 *
	 */
	add_action( 'docmed_preloader', 'docmed_site_preloader', 10 );

	/**
	 * Header
	 *
	 * @Header Menu
	 * @Header Bottom
	 * 
	 */

	add_action( 'docmed_header', 'docmed_header_cb', 10 );

	/**
	 * Hook for footer
	 *
	 */
	add_action( 'docmed_footer', 'docmed_footer_area', 10 );

	/**
	 * Hook for Blog, single, page, search, archive pages wrapper.
	 */
	add_action( 'docmed_wrp_start', 'docmed_wrp_start_cb', 10 );
	add_action( 'docmed_wrp_end', 'docmed_wrp_end_cb', 10 );
	
	/**
	 * Hook for Blog, single, search, archive pages column.
	 */
	add_action( 'docmed_blog_col_start', 'docmed_blog_col_start_cb', 10 );
	add_action( 'docmed_blog_col_end', 'docmed_blog_col_end_cb', 10 );
	
	/**
	 * Hook for blog posts thumbnail.
	 */
	add_action( 'docmed_blog_posts_thumb', 'docmed_blog_posts_thumb_cb', 10 );

	/**
	 * Hook for blog details wrapper.
	 */
	add_action( 'docmed_blog_details_wrap_start', 'docmed_blog_details_wrap_start_cb', 10 );
	add_action( 'docmed_blog_details_wrap_end', 'docmed_blog_details_wrap_end_cb', 10 );

	/**
	 * Hook for blog posts title.
	 */
	add_action( 'docmed_blog_posts_title', 'docmed_blog_posts_title_cb', 10 );

	/**
	 * Hook for blog posts meta.
	 */
	add_action( 'docmed_blog_posts_meta', 'docmed_blog_posts_meta_cb', 10 );

	/**
	 * Hook for blog posts excerpt.
	 */
	add_action( 'docmed_blog_posts_excerpt', 'docmed_blog_posts_excerpt_cb', 10 );
	// add_action( 'docmed_blog_posts_excerpt', 'docmed_blog_read_more_cb', 10 );

	/**
	 * Hook for blog posts info links.
	 */
	add_action( 'docmed_blog_posts_info_link', 'docmed_blog_posts_info_link_cb', 10 );

	/**
	 * Hook for blog posts content.
	 */
	add_action( 'docmed_blog_posts_content', 'docmed_blog_posts_content_cb', 10 );
	
	/**
	 * Hook for blog single post social share option.
	 */
	add_action( 'docmed_blog_posts_share', 'docmed_blog_posts_share_cb', 10 );

	/**
	 * Hook for blog sidebar.
	 */
	add_action( 'docmed_blog_sidebar', 'docmed_blog_sidebar_cb', 10 );
	
	/**
	 * Hook for blog single post meta category, tag, next - previous link and comments form.
	 */
	add_action( 'docmed_blog_single_meta', 'docmed_blog_single_meta_cb', 10 );
	
	/**
	 * Hook for page content.
	 */
	add_action( 'docmed_page_content', 'docmed_page_content_cb', 10 );
	
	
	/**
	 * Hook for 404 page.
	 */
	add_action( 'docmed_fof', 'docmed_fof_cb', 10 );

	

?>