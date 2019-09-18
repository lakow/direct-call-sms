<?php

// Carrega as principais dependencias
require_once(DC_SMS_PLUGIN . 'src/options/dc-adm-options.php');
require_once(DC_SMS_PLUGIN . 'src/DirectCall.php');
require_once(DC_SMS_PLUGIN . 'src/Token.php');
require_once(DC_SMS_PLUGIN . 'src/SendSms.php');

function wp_sms($destiny, $message) {
    return SendSms::send($destiny, $message);
}

do_action('wp_sms', $destiny, $message);
