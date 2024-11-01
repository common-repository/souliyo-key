<?php
/*
Plugin Name: Souliyo Key
Plugin URI: http://souliyokey.webr.la/
Description: This plugin is a simpliest way of applying Souliyo-Unicode font to your wordpress plugin. This plugin is part of Souliyo Key Project.
Author: Souliyo Vongdala
Version: 1.0
Author URI: http://souliyokey.webr.la/
*/


	add_action( 'wp_enqueue_scripts', 'wp_souliyo_key' );

	function wp_souliyo_key () {
		wp_register_style( 'custom-style', plugins_url( '/souliyokey.css', __FILE__ ), array(), '20120208', 'all' );
		wp_register_style( 'custom-style', get_template_directory_uri() . '/souliyokey.css', array(), '20120208', 'all' );
		wp_enqueue_style( 'custom-style' );

	}
?>
