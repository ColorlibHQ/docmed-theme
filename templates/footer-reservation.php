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

	$docmed_reservation_title     = !empty( docmed_opt( 'docmed_reservation_title' ) ) ? docmed_opt( 'docmed_reservation_title' ) : '';
	$docmed_reservation_sub_title = !empty( docmed_opt( 'docmed_reservation_sub_title' ) ) ? docmed_opt( 'docmed_reservation_sub_title' ) : '';
	$docmed_reservation_btn_text  = !empty( docmed_opt( 'docmed_reservation_btn_text' ) ) ? docmed_opt( 'docmed_reservation_btn_text' ) : '';
	$docmed_reservation_btn_url	  = !empty( docmed_opt( 'docmed_reservation_btn_url' ) ) ? docmed_opt( 'docmed_reservation_btn_url' ) : '';
	?>
	<div class="footer_header d-flex justify-content-between">
		<div class="footer_header_left">
			<h3><?php echo esc_html( $docmed_reservation_title )?></h3>
			<p><?php echo esc_html( $docmed_reservation_sub_title )?></p>
		</div>
		<div class="footer_btn">
			<a href="<?php echo esc_url( $docmed_reservation_btn_url )?>" class="boxed-btn2"><?php echo esc_html( $docmed_reservation_btn_text )?></a>
		</div>
	</div>