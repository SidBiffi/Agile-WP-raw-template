<?php
		//set post tumbnails to an array of post types
		function custom_theme_setup() {
			add_theme_support( 'post-thumbnails', array( 'page' ) );

		}
		add_action( 'after_setup_theme', 'custom_theme_setup' );
?>