<?php

/**
 * Provides settings inputs for admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @since      1.0.0
 *
 * @package    PayFabric_Gateway_Woocommerce
 * @subpackage PayFabric_Gateway_Woocommerce/admin
 */
if (!defined('ABSPATH')) {
    exit;
}
/*Define live and test gateway host */
!defined('LIVEGATEWAY') && define('LIVEGATEWAY', 'https://www.payfabric.com');
!defined('TESTGATEWAY') && define('TESTGATEWAY', 'https://sandbox.payfabric.com');

/*
* Define log dir, severity level of logging mode and whether enable on-screen debug ouput.
* PLEASE DO NOT USE "DEBUG" LOGGING MODE IN PRODUCTION
*/
!defined('PayFabric_LOG_SEVERITY') && define('PayFabric_LOG_SEVERITY', 'INFO');
!defined('PayFabric_LOG_DIR') && define('PayFabric_LOG_DIR', dirname(__FILE__) . '/logs');
!defined('PayFabric_DEBUG') && define('PayFabric_DEBUG', false);

/*Define the control parameter value to determine whether the LOG functionality show or not */
$show_log_field = '0';
/*Define the control parameter value to determine whether the AUTH functionality show or not */
$show_auth_fields = '1';
/*Define whether integration mode should be shown or not, 1 means to show, 0 means not */
$integration_show = '1';


$admin_fields_array = array();
$admin_fields_array['enabled'] = array(
    'title' => __('Enable/Disable', 'payfabric-gateway-woocommerce'),
    'type' => 'checkbox',
    'label' => __('Enable PayFabric gateway', 'payfabric-gateway-woocommerce'),
    'description' => __('Enable or disable the gateway.', 'payfabric-gateway-woocommerce'),
    'desc_tip' => true,
    'default' => 'no'
);
$admin_fields_array['title'] = array(
    'title' => __('Title', 'payfabric-gateway-woocommerce'),
    'type' => 'text',
    'description' => __('The title which the user sees during checkout.', 'payfabric-gateway-woocommerce'),
    'desc_tip' => true,
    'default' => __('PayFabric', 'payfabric-gateway-woocommerce')
);

$admin_fields_array['description'] = array(
    'title' => __('Description', 'payfabric-gateway-woocommerce'),
    'type' => 'textarea',
    'description' => __('The description which the user sees during checkout.', 'payfabric-gateway-woocommerce'),
    'desc_tip' => true,
    'default' => __("Pay via PayFabric", 'payfabric-gateway-woocommerce')
);

$admin_fields_array['testmode'] = array(
    'title' => __('PayFabric test mode', 'payfabric-gateway-woocommerce'),
    'type' => 'checkbox',
    'label' => __('Enable test mode', 'payfabric-gateway-woocommerce'),
    'description' => __('Enable or disable the test mode for the gateway to test the payment method.', 'payfabric-gateway-woocommerce'),
    'desc_tip' => true,
    'default' => 'yes'
);
$admin_fields_array['advanced'] = array(
    'title' => __('Advanced options', 'payfabric-gateway-woocommerce'),
    'type' => 'title',
    'description' => '',
);
$admin_fields_array['api_merchant'] = array(
    'title' => __('Merchant data', 'payfabric-gateway-woocommerce'),
    'type' => 'title',
    'description' => __('In this section You can set up your merchant data for PayFabric system.', 'payfabric-gateway-woocommerce')
);
$admin_fields_array['api_merchant_id'] = array(
    'title' => __('Device ID', 'payfabric-gateway-woocommerce'),
    'type' => 'text',
    'description' => __('Device ID from PayFabric', 'payfabric-gateway-woocommerce'),
    'desc_tip' => true,
    'default' => ''
);
$admin_fields_array['api_password'] = array(
    'title' => __('Password', 'payfabric-gateway-woocommerce'),
    'type' => 'password',
    'description' => __('Device password from PayFabric', 'payfabric-gateway-woocommerce'),
    'desc_tip' => true,
    'default' => ''
);

if ($integration_show) {
    $admin_fields_array['api_payment_modes'] = array(
        'title' => __('Payment mode', 'payfabric-gateway-woocommerce'),
        'type' => 'select',
        'description' => __('For an iframe mode, the gateway payment page will be inside the shopping site.
            For a redirect mode, the shopping site will be redirected to the gateway payment page.'),
        'desc_tip' => true,
        'default' => 0,
        'options' => array(
            __('Iframe', 'payfabric-gateway-woocommerce'),
            __('Redirect', 'payfabric-gateway-woocommerce'),
            __('Direct', 'payfabric-gateway-woocommerce')
        )
    );
}

if ($show_auth_fields) {
    //Purchase or Auth
    $admin_fields_array['api_payment_action'] = array(
        'title' => __('Payment action', 'payfabric-gateway-woocommerce'),
        'type' => 'select',
        'description' => __('Specify transaction type.', 'payfabric-gateway-woocommerce'),
        'desc_tip' => true,
        'default' => 0,
        'options' => array(
            __('Purchase', 'payfabric-gateway-woocommerce'),
            __('Auth', 'payfabric-gateway-woocommerce')
        )
    );
}
//choose the default paid order status
$admin_fields_array['api_success_status'] = array(
    'title' => __('Success status', 'payfabric-gateway-woocommerce'),
    'type' => 'select',
    'description' => __('Status of order after successful payment.', 'payfabric-gateway-woocommerce'),
    'desc_tip' => true,
    'default' => 0,
    'options' => array(
        __('Processing', 'payfabric-gateway-woocommerce'),
        __('Completed', 'payfabric-gateway-woocommerce')
    )
);

if ($show_log_field) {
    $admin_fields_array['log_mode'] = array(
        'title' => __('Logging', 'payfabric-gateway-woocommerce'),
        'type' => 'checkbox',
        'label' => __('Enable log debug', 'payfabric-gateway-woocommerce'),
        'description' => __('Log payment events, such as gateway transaction callback, if enabled, log file will be found inside: wp-content/uploads/wc-logs', 'payfabric-gateway-woocommerce'),
        'desc_tip' => false,
        'default' => 'no'
    );
}


return $admin_fields_array;
