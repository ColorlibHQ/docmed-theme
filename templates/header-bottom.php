<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
    exit( 'Direct script access denied.' );
}
/**
 * @Packge     : Docmed
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

$headerimg          = get_header_image();
?>

<section class="hero-banner zigzag_bg_2" <?php echo docmed_inline_bg_img( esc_url( $headerimg ) ); ?>>
    <div class="container">
        <div class="row justify-content-between">
            <div class="breadcrumb_tittle">
                <h2>
                    <?php
                    if ( is_category() ) {
                        single_cat_title( __('Category: ', 'docmed') );

                    } elseif ( is_tag() ) {
                        single_tag_title( __('Tag Archive for - ', 'docmed') );

                    } elseif ( is_archive() ) {
                        echo get_the_archive_title();

                    } elseif ( is_page() ) {
                        echo get_the_title();

                    } elseif ( is_search() ) {
                        echo esc_html__( 'Search for: ', 'docmed' ) . get_search_query();

                    } elseif ( ! ( is_404() ) && ( is_single() ) || ( is_page() ) ) {
                        echo  get_the_title();

                    } elseif ( is_home() ) {
                        echo esc_html__( 'Blog', 'docmed' );

                    } elseif ( is_404() ) {
                        echo esc_html__( '404 error', 'docmed' );

                    }
                    ?>
                </h2>

                <?php
                    if ( function_exists( 'docmed_breadcrumbs' ) ) {
                        docmed_breadcrumbs();
                    }
                ?>
            </div>
        </div>
    </div>
</section>