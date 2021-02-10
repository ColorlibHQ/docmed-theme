<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge 	   : Docmed
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

$footer_logo_img_id = get_theme_mod( 'footer_logo_img' );
$footer_logo_img 	= wp_get_attachment_image_src( $footer_logo_img_id , 'docmed_site_logo_163x45' )[0];
$footer_text 	    = docmed_opt( 'docmed_footer_text' );
$site_url 	    	= home_url('/');
		?>
		<div class="col-xl-4 col-md-6 col-lg-4">
			<div class="footer_widget">
				<?php
					if ( $footer_logo_img ) {
						echo '<div class="footer_logo">';
						?>
							<a href="<?=esc_url($site_url)?>"><img src="<?=esc_url($footer_logo_img)?>" alt="footer logo"></a>
						<?php
						echo '</div>';
					}
					if ( $footer_text ) {
						echo '<p>'.esc_html($footer_text).'</p>';
					}

					// Social profiles
					$social_opt = docmed_opt('docmed_social_profile_toggle');
					if ( $social_opt == true ) {
						$social_items = docmed_opt('docmed_social_profiles');
						if( is_array( $social_items ) && count( $social_items ) > 0 ){
							echo '<div class="socail_links"><ul class="social_links">';
								foreach ($social_items as $value) {
									echo '<li><a href="'. esc_url($value['social_url']) .'"> <i class="'. esc_attr($value['social_icon']) .'"></i> </a></li>';
								}
							echo '</ul></div>';
						}          
					}  
				?>
			</div>
		</div>
		<?php
		
	// Footer widget 2
	if( is_active_sidebar( 'footer-2' ) ){
		dynamic_sidebar( 'footer-2' );
	}

	// Footer widget 3
	if( is_active_sidebar( 'footer-3' ) ){
		dynamic_sidebar( 'footer-3' );
	}

	// Footer widget 4
	if( is_active_sidebar( 'footer-4' ) ){
		dynamic_sidebar( 'footer-4' );
	}