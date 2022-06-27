<?php

/**
 * Plugin Name: WooCommerce PayFabric Gateway
 * Description: WooCommerce PayFabric Gateway integration.
 * Version: 2.0.0
 */

/**
 * Abort if the file is called directly
 */
if (!defined('WPINC')) {
    exit;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-payfabric-gateway-woocommerce-activator.php
 */
function activate_payfabric_gateway_woocommerce()
{
    require_once plugin_dir_path(__FILE__) . 'classes/class-payfabric-gateway-woocommerce-activator.php';
    Payfabric_Gateway_Woocommerce_Activator::activate();
}

register_activation_hook(__FILE__, 'activate_payfabric_gateway_woocommerce');


/**
 * Run the plugin after all plugins are loaded
 */
add_action('plugins_loaded', 'init_payfabric_gateway', 0);
function init_payfabric_gateway()
{
    if (!class_exists('WC_Payment_Gateway')) {
        return;
    }
    /**
     * Require class and init to register all hooks.
     *
     * @since    1.0.0
     */
    require plugin_dir_path(__FILE__) . 'classes/class-payfabric-gateway-woocommerce.php';
    new Payfabric_Gateway_Woocommerce();
}

// Add custom action links
add_filter('plugin_action_links_' . plugin_basename(__FILE__), 'payfabric_gateway_action_links');
function payfabric_gateway_action_links($links)
{
    $plugin_links = array(
        '<a href="' . admin_url('admin.php?page=wc-settings&tab=checkout&section=payfabric') . '">' . __('Settings', 'payfabric') . '</a>',
    );
    return array_merge($plugin_links, $links);
}