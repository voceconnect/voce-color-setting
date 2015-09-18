<?php
if( !function_exists( 'vs_display_color_picker' ) ){
	function vs_display_color_picker( $value, $setting, $args ) {
		return Voce_Color_Setting::display_color_picker( $value, $setting, $args );
	}
}
if( !function_exists( 'vs_sanitize_color_picker' ) ){
	function vs_sanitize_color_picker( $value, $setting, $args ) {
		return Voce_Color_Setting::sanitize_color_picker( $value, $setting, $args );
	}
}