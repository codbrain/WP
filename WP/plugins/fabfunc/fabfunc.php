<?php
/*
Plugin Name: Fabulous Functionality
Plugin URI: http://
Description: Brief description of the plugin.
Version: 1.0
Author: Plugin author name
Author URI: http://plugin_author_page
*/


defined( "ABSPATH" ) or die;

define( "FABFUNC_PLUGIN_DIR", plugin_dir_path( __FILE__ ) );
define( "FABFUNC_PLUGIN_URL", plugin_dir_url( __FILE__ ) );
define( "FABFUNC_PLUGIN_NAME", dirname ( plugin_basename( __FILE__ ) ) );

register_activation_hook( __FILE__, 'fabfunc_activate' );

function fabfunc_activate(){
    require_once FABFUNC_PLUGIN_DIR . 'includes/class-fabfunc-activate.php';
    Fabfunc_Activate::activate();
}

require_once FABFUNC_PLUGIN_DIR . 'includes/class-fabfunc.php';
function run_fabfunc() {
    $plugin = new Fabfunc();
    
}

run_fabfunc();