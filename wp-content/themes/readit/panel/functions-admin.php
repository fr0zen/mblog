<?php
/**
 * readit admin functions
 *
 * @package readit
 */

// admin area styling
function readit_custom_colors() {
   echo '<style type="text/css">
          #setting-error-tgmpa {
			border-left: 4px solid #37b492;
			padding: 15px 20px;
			}
		  #setting-error-tgmpa p {
			font-size: 14px;
			font-weight: 300 !important; 
			color: #404040;
			margin: 0;
		  }
		  #setting-error-tgmpa p strong {
			font-weight: 300 !important;
		  }
		  #setting-error-tgmpa p strong a {
			font-size: 14px !important;
			text-decoration: none !important;
			color: #37b492 !important;
			font-weight: 600 !important;
		  }
			
         </style>';
}

add_action('admin_head', 'readit_custom_colors'); 

/**
 *TGM Plugin activation.
 */
require_once get_template_directory() . '/panel/class-tgm-plugin-activation.php';
 
add_action( 'tgmpa_register', 'readit_recommend_plugin' );
function readit_recommend_plugin() {
 
    $plugins = array(
        // Include plugin from the WordPress Plugin Repository
		array(
			'name'		=> 'Shortcodes Ultimate', // http://wordpress.org/plugins/shortcodes-ultimate/
			'slug'		=> 'shortcodes-ultimate',
			'required'	=> false
		), 
		
		array(
			'name' 		=> 'Contact Form 7', // http://wordpress.org/plugins/contact-form-7/
			'slug' 		=> 'contact-form-7',
			'required' 	=> false 
		), 
		   
    );
 
    tgmpa( $plugins); 
 
}
