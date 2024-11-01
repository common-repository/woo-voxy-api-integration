<?php
/*
Plugin Name: WooCommerce Voxy API Integration
Description: Enables WooCommerce subscription products & regular products to be associated with Voxy organizations.
Version: 1.0.6
Author: Mircea Sandu
Author URI: http://mircian.com/

Textdomain: wva
*/


// prevent accessing this file directly
if (!defined('ABSPATH')) {
    exit;
}


/**
 * Class wva_main
 * Main plugin Class used for hooking and including
 */
class wva_main {

    public $version = '1.0.6';

    public function __construct() {

        $this->define_constants();
        $this->includes();
        $this->init_hooks();

    }

    private function define_constants() {

        define('WVA_PLUGIN_FILE', __FILE__);
        define('WVA_PLUGIN_BASENAME', plugin_basename(__FILE__));
        define('WVA_VERSION', $this->version);

    }

    private function init_hooks() {

    }

    public function setup() {

    }

    private function includes() {

        include_once 'inc/wva_organizations.php';

        include_once 'inc/wva_api_handler.php';

        include_once 'inc/wva_admin.php';

        include_once 'inc/wva_user.php';

        include_once 'inc/wva_woo_integration.php';

        include_once 'inc/wva_phone_number.php';

        include_once 'inc/wva_shortcodes.php';

    }

}

new wva_main();
    

