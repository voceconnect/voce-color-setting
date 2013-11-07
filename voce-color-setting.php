<?php

if ( !class_exists( 'Voce_Color_Setting' ) ){

	class Voce_Color_Setting {
		public static function initialize(){
			add_action( 'vs_admin_enqueue_scripts', function( $vs_page ){
				foreach( $vs_page->groups as $group ){
					foreach( $group->settings as $setting ){
						if( $setting->args['display_callback'] == 'vs_display_color_picker' ){
							wp_enqueue_style( 'wp-color-picker' );
							wp_enqueue_script('voce-color-setting-js', plugins_url( 'js/voce-color-setting.js', __FILE__ ), array( 'jquery', 'wp-color-picker') );
						}
					}
				}
			});

		}

		public static function display_color_picker( $value, $setting, $args ){
			printf( '<input type="text" class="vs-color-picker" id="%s" name="%s" value="%s" />', esc_attr( $setting->get_field_id() ), esc_attr( $setting->get_field_name() ), esc_attr( $value ) );
			if(!empty($args['description']))
				printf('<span class="description">%s</span>', $args['description']);
		}

		public static function sanitize_color_picker( $value, $setting, $args ){
			$value = sanitize_text_field( $value );
			if ( preg_match( '/^#(?:(?:[a-fd]{3}){1,2})$/i', $value ) ) {
				return $value;
			} else {
				return false;
			}
			return $value;
		}
	}
	add_action( 'admin_init', array( 'Voce_Color_Setting', 'initialize' ) );

	function vs_display_color_picker( $value, $setting, $args ) {
		return Voce_Color_Setting::display_color_picker( $value, $setting, $args );
	}

	function vs_sanitize_color_picker( $value, $setting, $args ) {
		return Voce_Color_Setting::sanitize_color_picker( $value, $setting, $args );
	}

}// End Class Check