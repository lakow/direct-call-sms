<?php 

/**
 * Load form adm options
 */
function dc_adm_frontend(){
  require_once(DC_SMS_PLUGIN .'src/templates/options.php');
}

/**
 * Register settings in manage options
 */
function dc_register_adm_options(){
    add_options_page( 'Direct Call SMS Settings', 'Direct Call SMS', 'manage_options', 'dc-plugin', 'dc_adm_frontend');
}
add_action('admin_menu','dc_register_adm_options');

/**
 * Register settings
 */
function dc_load_settings_api(){
    register_setting('dc_sms_options', 'dc_sms_config');
}
add_action('admin_init','dc_load_settings_api');