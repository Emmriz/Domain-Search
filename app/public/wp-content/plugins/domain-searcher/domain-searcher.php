<?php
/** 
 * Plugin Name: EmmrizTech Domain Searcher
 * Plugin URI: https://emmriztech.com.ng
 * Author: EmmrizTech
 * Description: A plugin to search for available domain names for renwal and registration of UG domains. 
 * Author URI: https://emmriztech.com.ng
 * Version: 1.0
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: emmriztech-domain-searcher
 */

// Exit if accessed directly
defined( 'ABSPATH' ) or die( 'Unauthorized Access!' );

add_shortcode( 'emmriztech_domains', 'add_input_form' );

function add_input_form(){ 
    return '<p>results here</p>';
}