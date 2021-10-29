<?php

/* -------- ACF custom --------- */

	// Define path and URL to the ACF plugin.
	define( 'MY_ACF_PATH', get_stylesheet_directory() . '/inc/acf/' );
	define( 'MY_ACF_URL', get_stylesheet_directory_uri() . '/inc/acf/' );

	// Include the ACF plugin.
	include_once( MY_ACF_PATH . 'acf.php' );

	// Customize the url setting to fix incorrect asset URLs.
	add_filter('acf/settings/url', 'my_acf_settings_url');
	function my_acf_settings_url( $url ) {
		return MY_ACF_URL;
	}

	// Custumize Options Pages
	if( function_exists('acf_add_options_page') ) {
	
		acf_add_options_page(array(
			// 'page_title' 	=> 'Theme General Settings',
			'menu_title'	=> 'Opciones Generales',
			'menu_slug' 	=> 'eala-general-settings',
			'position' => '21',
			// 'capability'	=> 'edit_posts',
			// 'redirect'		=> false
		));
		
		// acf_add_options_sub_page(array(
		// 	'page_title' 	=> 'Opciones de Menú',
		// 	'menu_title'	=> 'Menú',
		// 	'parent_slug'	=> 'eala-general-settings',
		// ));
		
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Opciones de Cabecera',
			'menu_title'	=> 'Cabecera',
			'parent_slug'	=> 'eala-general-settings',
		));

		// acf_add_options_sub_page(array(
		// 	'page_title' 	=> 'Opciones de Pie de página',
		// 	'menu_title'	=> 'Pie de página',
		// 	'parent_slug'	=> 'eala-general-settings',
		// ));
		
	}

	// (Optional) Hide the ACF admin menu item.
		// add_filter('acf/settings/show_admin', 'my_acf_settings_show_admin');
		// function my_acf_settings_show_admin( $show_admin ) {
		// 	return false;
		// }


