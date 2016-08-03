<?php
/***
Plugin Name: Client Role
Plugin URI: - 
Description: Create Custom User level Client
Author: Alex King
Author URI: http://www.surgemedia.com.au
Version: 1.0.0.0
License: GPLv3 or later
***/

function add_roles_on_plugin_activation() {
	remove_role( 'client' );
	remove_role( 'Client' );

	  global $wp_roles;
	    if ( ! isset( $wp_roles ) )
	        $wp_roles = new WP_Roles();

	    $adm = $wp_roles->get_role('administrator');
	    //Adding a 'new_role' with all admin caps
	    $wp_roles->add_role('new_role', 'client', $adm->capabilities);
   }
   register_activation_hook( __FILE__, 'add_roles_on_plugin_activation' );
?>