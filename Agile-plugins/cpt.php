<?php

	add_action('init','custom_posts');
		function custom_posts() {

		   		register_post_type( 'event',

				array(

					'labels' => array(

						'name' => __( 'Events' ),

						'singular_name' => __( 'event' ),

						'add_new' => 'Add new evento',

				    	'add_new_item' => 'Add event',

				    	'edit_item' => 'Edit event',

				    	'new_item' => 'Add evento',

				    	'all_items' => 'Events',

				    	'view_item' => 'View events',

				    	'search_items' => 'Search events',

				    	'not_found' =>  'No events Found',

				    	'not_found_in_trash' => 'No events found in Trash', 

				    	'parent_item_colon' => '',

				    	'menu_name' => 'Events'

					),

				'public' => true,
				'menu_icon' => 'dashicons-calendar-alt',
				'has_archive' => false,
				'supports'        => array(
					'title', 'editor', 'thumbnail'
				),
				)

			);

		  add_action( 'add_meta_boxes', 'add_metaboxes' );
		  flush_rewrite_rules();
		}	


		function add_metaboxes() {

			add_meta_box('event_', 'Event', 'event_metabox', 'event', 'normal', 'default');

		 }
		

		//CAMPAGNA METABOX

		function event_metabox() {

				global $post;

				echo '<input type="hidden" name="event_noncename" id="evento_noncename" value="' . 

				wp_create_nonce( plugin_basename(__FILE__) ) . '" />';

				$di = get_post_meta($post->ID, '_di', true);
				$df = get_post_meta($post->ID, '_df', true);

				echo ('

					<table width="100%" align="center" > 

						<tr>  

							<td width="32.5%"> 

								<div style="margin-bottom:10px;"> <label for="_tl_pp">Event Start date :</label> </div> <input id="datepicker" style="width:70%;" type="text" name="_di" value="' . $di  . '" />

							</td>


							<td width="32.5%"> 

								<div style="margin-bottom:10px;"> <label for="_tl_sp">Event Finish date:</label> </div> <input id="datepicker2" style="width:70%;" type="text" name="_df" value="' . $df  . '" />

							</td>


						</tr>

					</table>
				');
		}

		function save_event_meta($post_id, $post) {


				if ( !wp_verify_nonce( $_POST['event_noncename'], plugin_basename(__FILE__) )) {

				return $post->ID;

				}


				if ( !current_user_can( 'edit_post', $post->ID ))

					return $post->ID;
				
				//data inizio - data fine

				$event_meta['_di'] = $_POST['_di'];
				$event_meta['_df'] = $_POST['_df'];


				foreach ($event_meta as $key => $value) { 

					if( $post->post_type == 'revision' ) return; 

					$value = implode(',', (array)$value); 

					if(get_post_meta($post->ID, $key, FALSE)) { 

						update_post_meta($post->ID, $key, $value);

					} else { 

						add_post_meta($post->ID, $key, $value);

					}

					if(!$value) delete_post_meta($post->ID, $key); 
				}

		}

		add_action('save_post', 'save_event_meta', 1, 2); 

		//add js image uploader to backend
		function datepicker_enqueue() {

				wp_enqueue_script( 'ui', plugin_dir_url( __FILE__ ) . 'assets/js/jquery-ui.js', array( 'jquery' ) );
				wp_enqueue_script( 'datepicker', plugin_dir_url( __FILE__ ) . 'assets/js/datepicker.js', array( 'jquery' ) );
				wp_enqueue_style( 'css', plugin_dir_url( __FILE__ ) . 'assets/css/datepicker.css' );
		}

		add_action( 'admin_enqueue_scripts', 'datepicker_enqueue' );

?>