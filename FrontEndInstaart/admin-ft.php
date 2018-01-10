<?php
/**
 *Author: Willian de Oliveira
 * Plugin Name: Frontend 
 * Plugin URI: http://instaarts.com.br
 * Description: none
 * Author URI: Willian De Oliveira 
 * Version: 1.0 BETA
 * Licence: GPL2
 */

require "custom-footer-ft.php";
require "slider.php";

function ft_referal_init()
{
	if(is_page('home')){	
		$dir = plugin_dir_path( __FILE__ );
		include($dir."index.php");
		die();
	}
	if (is_page('produtos')) {
		$dir = plugin_dir_path(__FILE__);
		include($dir."produtos-ft.php");
		die();
	}
}
add_action( 'wp', 'ft_referal_init' ); 



function ft_enqueue_style() {
	wp_register_style('estilo', plugins_url( 'FrontEndInstaart/css/style.css' ) );
	wp_enqueue_style('estilo', 'style.css', false );
	wp_register_style('bootstrap', plugins_url( 'FrontEndInstaart/bootstrap/css/bootstrap.min.css' ) );
	wp_enqueue_style('bootstrap', 'bootstrap.min.css', false );

	/*wp_deregister_script('jquery');
	wp_register_script('custom', plugins_url('FrontEndInstaart/js/custom.js', __FILE__), array('jquery'), 1.4, true);
	wp_enqueue_scripts('custom');
	*/
	
}
add_action('wp_enqueue_scripts', 'ft_enqueue_style');
