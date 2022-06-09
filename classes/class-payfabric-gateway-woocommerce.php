<?php

if (!defined('ABSPATH')) {
    exit;
}

/**
 * The core plugin class.
 * This is used to define admin-specific hooks and public-facing site hooks.
 */
class Payfabric_Gateway_Woocommerce {
    /**
     * Define the core functionality of the plugin.
     *
     * Load the dependencies and set the hooks for the admin area and
     * the public-facing side of the site.
     *
     */
    public function __construct() {
        $this->load_dependencies();
        $this->define_admin_hooks();
    }

    /**
     * Load the required dependencies for this plugin.
     *
     * @since    1.0.0
     * @access   private
     */
    private function load_dependencies() {
        /**
         * The class responsible for defining all actions that occur in the admin area.
         */
        require_once plugin_dir_path(dirname(__FILE__)) . 'admin/class-payfabric-gateway.php';
    }

    /**
     * Register all of the hooks related to the admin area functionality
     * of the plugin.
     *
     * @since    1.0.0
     * @access   private
     */
    private function define_admin_hooks() {
        $plugin_admin = new PayFabric();
        add_filter('woocommerce_payment_gateways', array($plugin_admin, 'add_new_gateway'));//Add new gateway as Woocommerce payment methods.
        add_action('woocommerce_update_options_payment_gateways_' . $plugin_admin->id, array($plugin_admin, 'process_admin_options'));//Update gateway
        add_action('woocommerce_receipt_payfabric', array($plugin_admin, 'receipt_page'));//Generate button or iframe ready to pay on receipt page
        add_action('wp', array($plugin_admin, 'payfabric_response_handler'));//Payment response handler get
        //add_action('wp', array($plugin_admin, 'set_wc_notice'));//Set a notice with the payment status on the order success page
        add_action( 'woocommerce_admin_order_data_after_shipping_address', array($plugin_admin, 'show_evo_transaction_id') );//Customize admin order detail page to show transaction ID
        add_action( 'woocommerce_api_payfabric', array($plugin_admin, 'handle_call_back') );//Payment response handler if a post request
        //         add_action( 'woocommerce_order_status_on-hold_to_processing', array( $plugin_admin, 'capture_payment' ) );
        //         add_action( 'woocommerce_order_status_on-hold_to_completed', array( $plugin_admin, 'capture_payment' ) );
        //         add_action( 'woocommerce_order_status_on-hold_to_cancelled', array( $this, 'cancel_payment' ) );
        //         add_action( 'woocommerce_order_status_on-hold_to_refunded', array( $this, 'cancel_payment' ) );
        
        add_filter( 'woocommerce_order_actions', array( $plugin_admin, 'add_capture_charge_order_action' ) );//add the Capture Online Order actions
        add_action( 'woocommerce_order_action_payfabric_capture_charge', array( $plugin_admin, 'maybe_capture_charge' ) );//Capture when the Capture Online is submitted
        add_filter( 'woocommerce_order_actions', array( $plugin_admin, 'add_void_charge_order_action' ) );//add the VOID Online Order actions
        add_action( 'woocommerce_order_action_payfabric_void_charge', array( $plugin_admin, 'maybe_void_charge' ) );//Void when the Void Online is submitted
    }

}
