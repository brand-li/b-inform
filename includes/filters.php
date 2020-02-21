<?php
defined('ABSPATH') || exit;


add_filter('wpnotif_filter_message', 'wpnotif_add_tracking_details', 10, 2);


function wpnotif_add_tracking_details($msg, $order)
{

    $tracking_links = wpnotif_get_wc_tracking_links($order);

    if (empty($tracking_links))
        return $msg;

    $tracking_link_string = implode(',', $tracking_links);
    $tracking_link_string = htmlspecialchars_decode($tracking_link_string);
    $msg = str_replace('{{wc-tracking-link}}', $tracking_link_string, $msg);


    return $msg;
}

function wpnotif_get_wc_tracking_links($order)
{
    if (class_exists('WC_Shipment_Tracking_Actions')) {
        $st = WC_Shipment_Tracking_Actions::get_instance();
    } else if (is_plugin_active('woo-advanced-shipment-tracking/woocommerce-advanced-shipment-tracking.php')) {
        $st = WC_Advanced_Shipment_Tracking_Actions::get_instance();
    } else {
        return array();
    }
    $order_id = $order->get_order_number();

    $tracking_items = $st->get_tracking_items($order_id);
    if (!empty($tracking_items)) {
        $tracking_links = array();
        foreach ($tracking_items as $tracking_item) {
            $formated_item = $st->get_formatted_tracking_item($order_id, $tracking_item);
            $tracking_links[] = $formated_item['formatted_tracking_link'];
            break;
        }

    }
    return $tracking_links;
}