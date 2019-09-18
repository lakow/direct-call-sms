<?php

class SendSms
{
    /**
     * @var string
     */
    const MESSAGE_TEXT = 'texto';
    
    /**
     * @var string 
     */
    const MESSAGE_VOICE = 'voz';

     /**
      * @var string 
      */
    const URI_API = 'https://api.directcallsoft.com/sms/send';

    /**
     * @param string $destiny
     * @param string $message
     * @param SendSms|string $type
     * 
     * @return array $response
     */
    public static function send($destiny, $message, $type = SendSms::MESSAGE_TEXT)
    {
        $token = Token::create();
        $directCall = new DirectCall;

        $args = array(
            'body' => array(
                'tipo'=> $type,
                'origem' => $directCall->getOption('origin'),
                'access_token'=> $token,
                'destino'=> $destiny,
                'texto'=> $message
            ),
            'timeout' => '10'
        );


        $response = wp_remote_post(self::URI_API , $args);

        if ($response instanceof WP_Error) {
            throw new Exception('Houve uma falha ao tentar acessar ' . self::URI_API);
        }

        return json_decode($response['body'], TRUE);
    }
}
