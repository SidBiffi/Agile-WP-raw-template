<?php

		// scripts 


		function theme_name_scripts() {

			//jquery-bootstrap
			wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/js/jquery.js' );		    		
			//wp_enqueue_script( 'yourscriptname', get_stylesheet_directory_uri() . '/js/yourscriptname.js'  );

		}

		add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
?>
