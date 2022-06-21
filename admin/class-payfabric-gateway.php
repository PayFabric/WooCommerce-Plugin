<?php

/**
 * The main-specific functionality of the plugin.
 *
 * @sincesuccessful
 *
 * @package    PayFabric_Gateway_Woocommerce
 * @subpackage PayFabric_Gateway_Woocommerce/admin
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * The main-specific functionality of the plugin.
 *
 * Defines the plugin name, version,
 *
 * @package    PayFabric_Gateway_Woocommerce
 * @subpackage PayFabric_Gateway_Woocommerce/admin
 */
class PayFabric extends WC_Payment_Gateway {
    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string $plugin_name The ID of this plugin.
     */
    public $plugin_name;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string $version The current version of this plugin.
     */
    public $version;

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     */
    public function __construct() {

        $this->plugin_name = 'PayFabric-gateway-woocommerce';
        $this->version = '1.1.0';

        $this->id = 'payfabric';
        $this->method_title = __('PayFabric', 'payfabric-gateway-woocommerce');
        $this->method_description = __('PayFabric gateway sends customers to PayFabric to enter their payment information and redirects back to shop when the payment was completed.', 'payfabric-gateway-woocommerce');
        //$this->order_button_text = __('Proceed to PayFabric', 'payfabric-gateway-woocommerce');

        $this->title = $this->get_option('title');
        $this->description = $this->get_option('description');
        $this->testmode = 'yes' === $this->get_option('testmode', 'no');
        $this->icon = apply_filters( 'payfabric-gateway-woocommerce', plugin_dir_url(__FILE__).'assets/images/logo.jpg');
        $this->api_merchant_id = $this->get_option('api_merchant_id');
        $this->api_password = $this->get_option('api_password');
        $this->api_success_status = $this->get_option('api_success_status');
        $this->api_payment_action = $this->get_option('api_payment_action');
        $this->api_payment_modes = $this->get_option('api_payment_modes');

        //Load default Settings
        $this->init_form_fields();
        $this->init_settings();

        // define support for refunds
        $this->supports = array(
            'refunds'
        );
    }

    /**
     * Payment form on checkout page
     */
    public function payment_fields() {
        try {
            wp_enqueue_script(strtolower($this->plugin_name), plugin_dir_url(__FILE__) . 'assets/js/payfabric-gateway-woocommerce.js', ['jquery'], $this->version, true);
            wp_enqueue_style(strtolower($this->plugin_name), plugin_dir_url(__FILE__) . 'assets/css/payfabric-gateway-woocommerce.css', array(), $this->version, 'all');
            $description = $this->get_description();
            if ($description) {
                echo apply_filters('wc_payfabric_description', wpautop(wp_kses_post($description)), $this->id);
            }
            include_once('class-payfabric-gateway-request.php');
            $payfabric_request = new PayFabric_Gateway_Request($this);
            echo $payfabric_request->generate_payfabric_gateway_iframe($this->testmode);
        } catch (Exception $e) {
            wc_print_notice($e->getMessage(), 'error');
        }
    }

    /**
     * Init settings for gateways.
     */
    public function init_settings() {
        parent::init_settings();
        $this->enabled  = ! empty( $this->settings['enabled'] ) && 'yes' === $this->settings['enabled'] ? 'yes' : 'no';
    }

    public function logging($message){
        if('yes' === $this->get_option('log_mode', 'no')){
            $logger = new WC_Logger();
            $logger->add("$this->id", $message);
        }
    }

    /**
     * Get admin options template
     *
     * @since    1.0.0
     */
    public function admin_options() {
        include('payfabric-gateway-admin-settings-template.php');
    }

    /**
     * Get Form fields array
     *
     * @since    1.0.0
     */
    public function init_form_fields() {
        //If direct payment mode then show payment feilds directly
        if(2 == $this->api_payment_modes)   $this->has_fields = true;
        $this->form_fields = include('payfabric-gateway-admin-settings.php');
    }

    /**
     * Process the payment and return the result.
     *
     * @param int $order_id
     * @return   array
     * @since    1.0.0
     */
    public function process_payment($order_id) {
        $order = wc_get_order($order_id);

        //If not a direct payment mode then go to order pay page
        if (2 != $this->api_payment_modes) {
            return array(
                'result' => 'success',
                'redirect' => $order->get_checkout_payment_url(true)
            );
        }

        include_once('class-payfabric-gateway-request.php');
        $payfabric_request = new PayFabric_Gateway_Request($this);
        $payfabric_request->do_update_process($this->testmode, $order);
        return array(
            'result' => 'success',
            'redirect' => $this->get_return_url($order),
            'key' => $order->get_order_key()
        );

    }

    /**
     * Register the stylesheets for frontend redirect loading box.
     *
     * @since    1.0.0
     */
    private function enqueue_styles() {
        wp_enqueue_style(strtolower($this->plugin_name), plugin_dir_url(__FILE__) . 'assets/css/payfabric-gateway-woocommerce.css', array(), $this->version, 'all');
    }

    /**
     * Add PayFabric as Woocommerce payment methods.
     *
     * @since    1.0.0
     */
    public function add_new_gateway($methods)
    {
        $methods[] = 'PayFabric';

        return $methods;
    }


    /**
     * Set a Woocommerce notice with the payment status on the order received page
     *
     * @since    1.0.0
     */
    public function set_wc_notice() {
        if ( isset($_GET['wcapi']) && isset($_GET['order_id']) && empty($_GET['wc-ajax'])) {
            $order_id = absint($_GET['order_id']);
            $order = wc_get_order($order_id);
            $payment_method = $order->get_payment_method();
            if ('payfabric' == strtolower($payment_method)) {
                $payfabric_message = get_post_meta($order_id, '_payfabric_gateway_message', true);
                if (!empty($payfabric_message)) {
                    $message = $payfabric_message['message'];
                    $message_type = $payfabric_message['message_type'];
                    wc_add_notice($message, $message_type);
                    delete_post_meta($order_id, '_payfabric_gateway_message');
                }
            }
        }
    }
    
    /**
     * Generate form ready to pay
     *
     * @since    1.0.0
     * @param    int $order_id
     */
    public function receipt_page($order_id) {
        try{
            include_once('class-payfabric-gateway-request.php');

            $this->enqueue_styles();

            $order = wc_get_order($order_id);
            $payfabric_request = new PayFabric_Gateway_Request($this);

            echo $payfabric_request->generate_payfabric_gateway_form($order, $this->testmode);
        }catch (Exception $e){
            wc_print_notice($e->getMessage(), 'error');
        }
    }
    //http://localhost/wordpress/index.php/shop/?wcapi=payfabric&order_id=266&TrxKey=21053100702444
    public function payfabric_response_handler() {
        try {
            if (isset($_GET['wcapi']) && isset($_GET['TrxKey']) && empty($_GET['wc-ajax'])) {
                if (isset($_GET['order_id'])) {
                    $order_id = $_GET['order_id'];
                } else {
                    return __('Bad identifier.', 'payfabric-gateway-woocommerce');
                }
                $merchantTxId = $_GET['TrxKey'];
                include_once('class-payfabric-gateway-request.php');

                $this->enqueue_styles();
                sleep(1.5); //the wordpress system has a cache system, sometimes the query will not call DB directly, this is to delay the calling
                $order = wc_get_order($order_id);
                $payfabric_request = new PayFabric_Gateway_Request($this);
                $payfabric_request->generate_check_request_form($order, $merchantTxId, $this->testmode);
            }
        }catch (Exception $e){
            return $e->getMessage();
        }
    }

    //customize admin order detail page to show EVO transaction ID
    public function show_evo_transaction_id($order){
        $transaction_id = get_post_meta($order->get_id(), '_transaction_id', true);
        if (!empty($transaction_id)) {
            echo '<h3>' . $this->method_title . ' ID </h3>';
            echo "<p>$transaction_id</p>";
        }
    }
    
    //the method to process refund
    public function process_refund( $order_id, $amount = null, $reason = ''){
        try {
            $order = wc_get_order($order_id);
            if (!$order) {
                return new WP_Error('invalid_order', 'Invalid Order ID');
            }
            $transaction_id = get_post_meta($order->get_id(), '_transaction_id', true);
            if (!$transaction_id) {
                return new WP_Error('invalid_order', 'Invalid transaction ID');
            }
            include_once('class-payfabric-gateway-request.php');
            $payfabric_request = new PayFabric_Gateway_Request($this);
            return $payfabric_request->do_refund_process($this->testmode, $order, $transaction_id, $amount);
        }
        catch (Exception $e){
            return $e->getMessage();
        }
    }

    //the method to response to the Gateway callback when the user complete the payment
    public function handle_call_back(){
        try {
            if (isset($_GET['order_id'])) {
                $order_id = $_GET['order_id'];
            } else {
                return __('Bad identifier.', 'payfabric-gateway-woocommerce');
            }

            $raw_post = file_get_contents('php://input');
            $parts = parse_url($raw_post);
            parse_str($parts['path'], $query);
            $this->logging('Gateway callback: Order ID :' . $order_id . ' .POST: ' . json_encode($query));
            if (isset($query['TrxKey'])) {
                $merchantTxId = $query['TrxKey'];
            } else {
                return __('Bad identifier.', 'payfabric-gateway-woocommerce');
            }

            //the server will also call back the notification when  refund are made, this is to ignore the other action, only purchase
            if ($query['action'] != 'PURCHASE' && $query['action'] != 'AUTH' && $query['action'] != 'CAPTURE') {
                //sometimes bank transfer's callback action is CAPTURE
                return __('Bad identifier.', 'payfabric-gateway-woocommerce');
            }

            include_once('class-payfabric-gateway-request.php');

            $order = wc_get_order($order_id);
            $payfabric_request = new PayFabric_Gateway_Request($this);
            $payfabric_request->generate_check_request_form($order, $merchantTxId, $this->testmode);
        }catch (Exception $e){
            return $e->getMessage();
        }
    }
    /**
     * Capture payment when the order is changed from on-hold to complete or processing
     *
     * @param  int $order_id
     */
    public function capture_payment( $order_id ) {
        $order = wc_get_order( $order_id );
        if ( $order->get_payment_method() == 'payfabric' ) {
            $merchantTxId = get_post_meta( $order->get_id(), '_transaction_id', true );
            $old_wc         = version_compare( WC_VERSION, '3.0', '<' );
            $payment_status  = $old_wc ? get_post_meta( $order_id, '_payment_status', true ) : $order->get_meta( '_payment_status', true );
            if($merchantTxId && 'on-hold' == $payment_status){
                include_once('class-payfabric-gateway-request.php');
                $payfabric_request = new PayFabric_Gateway_Request($this);
                $amount = $order->get_total();
                $payfabric_request->do_capture_process($this->testmode,$order, $merchantTxId,$amount);
            }
        }
    }
    public function maybe_capture_charge( $order ) {
        try {
            if (!is_object($order)) {
                $order = wc_get_order($order);
            }

            $order_id = version_compare(WC_VERSION, '3.0', '<') ? $order->id : $order->get_id();
            $this->capture_payment($order_id);

            return true;
        }catch (Exception $e){
            return $e->getMessage();
        }
    }
    // add a drop down option of Capture Online button for the Order actions area
    public function add_capture_charge_order_action( $actions ) {
        if ( ! isset( $_REQUEST['post'] ) ) {
            return $actions;
        }
        
        $order = wc_get_order( $_REQUEST['post'] );
        
        $old_wc         = version_compare( WC_VERSION, '3.0', '<' );
        $order_id       = $old_wc ? $order->id : $order->get_id();
        $payment_method = $old_wc ? $order->payment_method : $order->get_payment_method();
        $payment_status  = $old_wc ? get_post_meta( $order_id, '_payment_status', true ) : $order->get_meta( '_payment_status', true );
        
        // exit if the order wasn't paid for with this gateway or the order has paid with Purchase action
        if ( 'payfabric' !== strtolower($payment_method) || 'on-hold' !== $payment_status ) {
            return $actions;
        }
        
        if ( ! is_array( $actions ) ) {
            $actions = array();
        }
        
        $actions['payfabric_capture_charge'] = esc_html__( 'Capture Online');
        
        return $actions;
    }
    // add a drop down option of VOID Online button for the Order actions area
    public function add_void_charge_order_action( $actions ) {
        if ( ! isset( $_REQUEST['post'] ) ) {
            return $actions;
        }

        $order = wc_get_order( $_REQUEST['post'] );
        
        $old_wc         = version_compare( WC_VERSION, '3.0', '<' );
        $order_id       = $old_wc ? $order->id : $order->get_id();
        $payment_method = $old_wc ? $order->payment_method : $order->get_payment_method();
        $payment_status  = $old_wc ? get_post_meta( $order_id, '_payment_status', true ) : $order->get_meta( '_payment_status', true );
        
        // exit if the order wasn't paid for with this gateway or the order has paid with Purchase action
        if ( 'payfabric' !== $payment_method || 'on-hold' !== $payment_status ) {
            return $actions;
        }
        
        if ( ! is_array( $actions ) ) {
            $actions = array();
        }
        
        $actions['payfabric_void_charge'] = esc_html__( 'VOID Online');
        
        return $actions;
    }
    /**
     * Cancel authorization
     *
     * @param  int $order_id
     */
    public function cancel_payment( $order_id ) {
        $order = wc_get_order( $order_id );
        if ( $order->get_payment_method() == 'payfabric' ) {
            $merchantTxId = get_post_meta( $order->get_id(), '_transaction_id', true );
            $old_wc         = version_compare( WC_VERSION, '3.0', '<' );
            $payment_status  = $old_wc ? get_post_meta( $order_id, '_payment_status', true ) : $order->get_meta( '_payment_status', true );
            if($merchantTxId && 'on-hold' == $payment_status){
                include_once('class-payfabric-gateway-request.php');
                $payfabric_request = new PayFabric_Gateway_Request($this);
                $payfabric_request->do_void_process($this->testmode,$order, $merchantTxId);
            }
        }
    }
    public function maybe_void_charge( $order ) {
        try {
            if (!is_object($order)) {
                $order = wc_get_order($order);
            }

            $order_id = version_compare(WC_VERSION, '3.0', '<') ? $order->id : $order->get_id();
            $this->cancel_payment($order_id);

            return true;
        }catch (Exception $e){
            return $e->getMessage();
        }
    }
    /**
     * Processes and saves options.
     * If there is an error thrown, will continue to save and validate fields, but will leave the erroring field out.
     * @return bool was anything saved?
     */
    public function process_admin_options() {
        try{
            $post_data = $this->get_post_data();
            $api_merchant_id = $this->get_field_key('api_merchant_id');
            $api_merchant_password = $this->get_field_key('api_password');
            $api_testmode = $this->get_field_key('testmode');
            $api_payment_action = $this->get_field_key('api_payment_action');
            $merchant_id = isset( $post_data[ $api_merchant_id ] ) ? $post_data[ $api_merchant_id ] : null;
            $merchant_password = isset( $post_data[ $api_merchant_password ] ) ? $post_data[ $api_merchant_password ] : null;
            $testmode = isset( $post_data[ $api_testmode ] ) ? $post_data[ $api_testmode ] : null;
            $payment_action = isset( $post_data[ $api_payment_action ] ) ? $post_data[ $api_payment_action ] : null;
            if(empty($merchant_id) || empty($merchant_password)){
                WC_Admin_Settings::add_error(__('Device ID or Password cannot be blank','payfabric-gateway-woocommerce'));
            }else{
                include_once('class-payfabric-gateway-request.php');
                $payfabric_request = new PayFabric_Gateway_Request($this);
                $payfabric_request->do_check_gateway($testmode, $merchant_id, $merchant_password, $payment_action);
                parent::process_admin_options();
            }
        }catch (Exception $e){
            WC_Admin_Settings::add_error( $e->getMessage() );
        }
    }

    public function get_session()
    {
        echo wp_send_json_success(
            array(
                'token' => WC()->session->get('transaction_token')
            )
        );
        wp_die();
    }
}
