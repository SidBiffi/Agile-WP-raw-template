<?php
		//add js image uploader to backend
		function prfx_image_enqueue() {
		        wp_register_script( 'meta-box-image', plugin_dir_url( __FILE__ ) . '/assets/js/meta-box-image.js', array( 'jquery' ) );
		        wp_localize_script( 'meta-box-image', 'meta_image',
		            array(
		                'title' => __( 'Choose or Upload' ),
		                'button' => __( 'Use this' ),
		            )
		        );
		        wp_enqueue_script( 'meta-box-image' );
		}
		add_action( 'admin_enqueue_scripts', 'prfx_image_enqueue' );
		add_action( 'admin_enqueue_scripts', 'meta_box_scripts' );
		function meta_box_scripts() {
		    global $post;
		    wp_enqueue_media( array( 
		        'post' => $post->ID, 
		    ) );
		}
?>
