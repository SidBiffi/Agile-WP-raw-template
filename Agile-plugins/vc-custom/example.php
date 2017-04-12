<?php

    /*
    Element Description: Example
    */
     
    // Element Class 
    class theme_nameExample extends WPBakeryShortCode {
         
        // Element Init
        function __construct() {
            add_action( 'init', array( $this, 'example_mapping' ) );
            add_shortcode( 'icons', array( $this, 'example_html' ) );
        }
         
        // Element Mapping
        public function example_mapping() {
             
            // Stop all if VC is not enabled
            if ( !defined( 'WPB_VC_VERSION' ) ) {
                return;
            }
             
            // Map the block with vc_map()
            vc_map( 
                array(
                    'name' => __('Example', 'text-domain'),
                    'base' => 'example',
                    'description' => __('Example', 'text-domain'), 
                    'category' => __('Custom template Elements', 'text-domain'),   
                    'icon' => plugin_dir_url( __DIR__).'/assets/img/logo.png',            
                    'params' => array(   
                             
                        array(
                            'type' => 'textfield',
                            'heading' => __( 'Example', 'text-domain' ),
                            'param_name' => 'example',
                            'value' => __( '', 'text-domain' ),
                            'description' => __( 'Example', 'text-domain' ),
                            'admin_label' => false,
                            'weight' => 0,
                            'group' => 'Custom Group',
                        ),                   

                    ),
                )
            );                                
            
        }
         
         
        // Element HTML
        public function example_html( $atts ) {
             
            // Params extraction
            extract(
                shortcode_atts(
                    array(
                        'example'   => ''
                    ), 
                    $atts
                )
            );
             
            // Fill $html var with data
            $html = '
                <h2 class="example">' . $example . '</h2>
            ';      
             
            return $html;
             
        }
         
    } // End Element Class 

    // Element Class Init
    new theme_nameExample();   

?>