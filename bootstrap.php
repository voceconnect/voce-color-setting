<?php

if( defined( 'ABSPATH' ) && function_exists('add_action') ) {
	if(!action_exists('admin_init', array( 'Voce_Color_Setting', 'initialize' ) ) ) {
		add_action( 'admin_init', array( 'Voce_Color_Setting', 'initialize' ) );
	}
}