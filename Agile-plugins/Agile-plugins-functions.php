<?php
/*	
	Plugin Name: Agile plugins
	Description: Useful functons
	Author: Pietro Biffi Paolo Locatelli
	Version: 0.1  
*/ 

	// HIDE ADMIN BAR
	require_once( dirname(__file__).'/hide-admin-bar.php' );

	// THUMBNAIL
	require_once( dirname(__file__).'/thumbnails.php' );

	// VISUAL COMPOSER
	require_once( dirname(__file__).'/visual-composer.php' );	

	// CUSTOM POST TYPE
	require_once( dirname(__file__).'/cpt.php' );	
?>