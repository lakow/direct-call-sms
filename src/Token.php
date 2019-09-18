<?php

/**
 * Obtem o OAuth access_token que é utilizado em 
 * todos os métodos da API DirectCall Soft
 */
class Token
{
    /**
     * Endpoint
     * 
     * @var string
     */
    const URI_API = 'https://api.directcallsoft.com/request_token';

    /**
     * Cria um novo access token
     * 
     * @return string
     */
    public static function create()
    {
        $directCall = new DirectCall;

        $args = array(
            'body' => array(
                'client_id'     => $directCall->getOption('client_id'),
                'client_secret' => $directCall->getOption('secret')
            ),
            'timeout' => '10'
        );

        $response = wp_remote_post(self::URI_API , $args);

        if ($response instanceof WP_Error) {
            throw new Exception('Houve uma falha ao tentar acessar ' . self::URI_API);
        }

        $response = json_decode($response['body'], TRUE);

        if ($response['access_token'] === false) {
            throw new Exception($response['msg']);
        }

        return $response['access_token'];
    }
}
