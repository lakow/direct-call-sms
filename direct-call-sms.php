<?php

/**
 * Plugin Name: Direct Call SMS
 * Description: Inclui a função para envio de sms através da API da Direct Call
 * Author: Carlos Alberto Sena
 * Version: 1.1
 * Author URI: https://github.com/lakow/direct-call-sms
 */

// Medida de segurança
if(!defined('ABSPATH')) {
    exit('Access denied');
}

// Define a constante com o caminho absoluto do plugin
define('DC_SMS_PLUGIN', plugin_dir_path(__FILE__));

// Inicia o plugin
require_once(DC_SMS_PLUGIN . 'src/bootstrap.php');
