<?php
/**
 * Plugin Name: WooCommerce Custom Customer Invoice Email
 * Plugin URI: http://www.skyverge.com/blog/how-to-add-a-custom-woocommerce-email/
 * Description: Demo plugin for adding a custom WooCommerce email to send to customers
 * Author: SkyVerge and Anita Cheng
 * Version: 0.1
 *
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 *
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 *  Add a custom email to the list of emails WooCommerce should load on settings page
 *
 * @since 0.1
 * @param array $email_classes available email classes
 * @return array filtered available email classes
 */
function custom_woocommerce_email( $email_classes ) {

	// include our custom email class
	require_once( 'includes/class-wc-custom-email.php' );

	// add the email class to the list of email classes that WooCommerce loads
	$email_classes['WC_Custom_Email'] = new WC_Custom_Email();

	return $email_classes;

}
add_filter( 'woocommerce_email_classes', 'custom_woocommerce_email' );

// Add custom email to Resend Order Emails in WooCommerce Order Admin Meta Box
function change_email_links($arr) {
    $arr = array( 'new_order', 'customer_processing_order', 'customer_completed_order', 'customer_invoice','custom_name' );
    return $arr;
}

 add_filter( 'woocommerce_resend_order_emails_available', 'change_email_links', 10, 1 );