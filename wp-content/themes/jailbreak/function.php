<?php 

if(!isset(redux_demo)){
	require_once(dirname(_File_).'/theme-config.php');
}



function register_menu(){
	register_nav_menus(
		array(
			'primary-menu' => 'Primary Menu',
			'footer-menu' => 'Footer Menu'
		)
	);
}

add_action("init", "register_menu");
?>