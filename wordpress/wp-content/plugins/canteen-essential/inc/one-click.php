<?php

//oneclick importer
function ocdi_import_files() {
	return array(
		array(
			'import_file_name'           => 'Main Home',
			'import_file_url'            => plugins_url( '/demo-data/demo1/content.xml' , __FILE__ ),
			'import_widget_file_url'     => plugins_url( '/demo-data/demo1/widgets.wie' , __FILE__ ),
			'import_preview_image_url'   => plugins_url( '/demo-data/demo1/preview.jpg' , __FILE__ ),
			'import_customizer_file_url'  => plugins_url( '/demo-data/demo1/customizer.dat' , __FILE__ ),
			'import_redux'           => array(
				array(
					'file_url'   => plugins_url( '/demo-data/demo1/redux.json' , __FILE__ ),
					'option_name' => 'canteen_theme_setting',
				),
			),
			'import_notice'                => __( '<p>To prevent any error, please use the clean wordpress site to import the demo data. </p><p>Or you can use this plugin 
			<a href="https://wordpress.org/plugins/wordpress-database-reset/" target="_blank">WordPress Database Reset</a> to reset/clear the database first.</p><p>After you import this demo, you will have to setup the elementor page builder.</p>', 'canteen-essential' ),
			'preview_url'                => 'http://canteen.smartinnovates.com/demo1/',
		),
		array(
			'import_file_name'           => 'Gallery',
			'import_file_url'            => plugins_url( '/demo-data/demo1/content.xml' , __FILE__ ),
			'import_widget_file_url'     => plugins_url( '/demo-data/demo1/widgets.wie' , __FILE__ ),
			'import_preview_image_url'   => plugins_url( '/demo-data/demo1/preview2.jpg' , __FILE__ ),
			'import_customizer_file_url'  => plugins_url( '/demo-data/demo1/customizer.dat' , __FILE__ ),
			'import_redux'           => array(
				array(
					'file_url'   => plugins_url( '/demo-data/demo1/redux.json' , __FILE__ ),
					'option_name' => 'canteen_theme_setting',
				),
			),
			'import_notice'                => __( '<p>To prevent any error, please use the clean wordpress site to import the demo data. </p><p>Or you can use this plugin 
			<a href="https://wordpress.org/plugins/wordpress-database-reset/" target="_blank">WordPress Database Reset</a> to reset/clear the database first.</p><p>After you import this demo, you will have to setup the elementor page builder.</p>', 'canteen-essential' ),
			'preview_url'                => 'http://canteen.smartinnovates.com/demo1/gallery',
		),
		array(
			'import_file_name'           => 'Minimal',
			'import_file_url'            => plugins_url( '/demo-data/demo1/content.xml' , __FILE__ ),
			'import_widget_file_url'     => plugins_url( '/demo-data/demo1/widgets.wie' , __FILE__ ),
			'import_preview_image_url'   => plugins_url( '/demo-data/demo1/preview3.jpg' , __FILE__ ),
			'import_customizer_file_url'  => plugins_url( '/demo-data/demo1/customizer.dat' , __FILE__ ),
			'import_redux'           => array(
				array(
					'file_url'   => plugins_url( '/demo-data/demo1/redux.json' , __FILE__ ),
					'option_name' => 'canteen_theme_setting',
				),
			),
			'import_notice'                => __( '<p>To prevent any error, please use the clean wordpress site to import the demo data. </p><p>Or you can use this plugin 
			<a href="https://wordpress.org/plugins/wordpress-database-reset/" target="_blank">WordPress Database Reset</a> to reset/clear the database first.</p><p>After you import this demo, you will have to setup the elementor page builder.</p>', 'canteen-essential' ),
			'preview_url'                => 'http://canteen.smartinnovates.com/demo1/minimal',
		)
	);
}
add_filter( 'pt-ocdi/import_files', 'ocdi_import_files' );


add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );





function ocdi_after_import( $selected_import ) {

	// Assign menus to their locations.
	$main_menu = get_term_by( 'name', 'Onepage Menu', 'nav_menu' );

	set_theme_mod( 'nav_menu_locations', array(
			'primary_menu' => $main_menu->term_id, // replace 'main-menu' here with the menu location identifier from register_nav_menu() function
		)
	);

	if ( 'Main Home' === $selected_import['import_file_name'] ) {
		// Assign front page.
		$front_page_id = get_page_by_title( 'Home-Main' );
	}
	elseif ( 'Gallery' === $selected_import['import_file_name'] ) {
		// Assign front page.
		$front_page_id = get_page_by_title( 'Gallery' );
	}
	elseif ( 'Minimal' === $selected_import['import_file_name'] ) {
		// Assign front page.
		$front_page_id = get_page_by_title( 'Minimal' );
	}
	update_option( 'show_on_front', 'page' );
	update_option( 'page_on_front', $front_page_id->ID );
	update_option( 'elementor_disable_color_schemes', 'yes' ); 
	update_option( 'elementor_disable_typography_schemes', 'yes' ); 
	update_option( 'elementor_load_fa4_shim', 'yes' ); 
	$cpt_support = [ 'page', 'post','product','portfolio','footer','header','sidepanel' ];
	update_option( 'elementor_cpt_support', $cpt_support ); //update 'Costom post type'
}
add_action( 'pt-ocdi/after_import', 'ocdi_after_import' );

