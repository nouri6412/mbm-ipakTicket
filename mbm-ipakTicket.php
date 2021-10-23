<?php

/**
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://mbmti.ir
 * @since             1.0.0
 * @package           MBM_IPAK_TICKET
 *
 * @wordpress-plugin
 * Plugin Name:       ایپک ( تیکتینگ )
 * Plugin URI:        http://mbmti.ir
 * Description:       سیستم تیکتینگ ایپک
 * Version:           1.0.0
 * Author:            ایپک
 * Author URI:        http://mbmti.ir/Author
 * Text Domain:       mbm-ipak-ticket
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) die;

/* General Definition
******************************/
define('MBM_IPAK_TICKET_VERSION', '1.0.0');

define('MBM_IPAK_TICKET_BASE', plugin_dir_path(__FILE__));
define('MBM_IPAK_TICKET_URI', plugin_dir_url(__FILE__));
define('MBM_IPAK_TICKET_FILE', __FILE__);
define('MBM_IPAK_TICKET_Include', MBM_IPAK_TICKET_BASE . 'include/');
define('MBM_IPAK_TICKET_View', MBM_IPAK_TICKET_BASE . 'view/');

require MBM_IPAK_TICKET_Include . 'ticket.php';
require MBM_IPAK_TICKET_Include . 'home.php';

function MBM_Ipak_Ticket_Init()
{
    if (class_exists('MBM_Ipak_Core')) {
        $MBM_Ipak_Ticket = new MBM_Ipak_Ticket();
    } else {
        function sample_admin_notice__error() {
            $class = 'notice notice-error';
            $message = 'برای استفاده از افزونه تیکتینگ باید افزونه حسابداری ایپک را نصب نمائید که کاملا رایگان است';
         
            printf( '<div class="%1$s"><p style="color: #fff;background: red;">%2$s</p></div>', esc_attr( $class ), esc_html( $message ) ); 
        }
        add_action( 'admin_notices', 'sample_admin_notice__error' );
    }
}

add_action("init","MBM_Ipak_Ticket_Init");
