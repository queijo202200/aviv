<?php
/*
Plugin Name: ESD Callus Aviv
Description: Um plugin que inclui o arquivo JavaScript esd_callus-aviv-v1.js.
Version: 1.0
Author: EuSaúde
*/

function esd_callus_aviv_scripts() {
    wp_enqueue_script('esd_callus_aviv_script', plugin_dir_url(__FILE__) . 'esd_callus-aviv-v1.js', array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'esd_callus_aviv_scripts');