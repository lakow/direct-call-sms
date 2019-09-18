<?php

class DirectCall
{
    private $options;

    public function __construct ()
    {
        $this->options = get_option('dc_sms_config');
    }

    public function getOption($name)
    {
        if ($this->has($name)) {
            return $this->options[$name];
        }

        throw new Exception('Opção ' . $name .' não encontrada, verifique as configurações do plugin');
    }

    public function has($name)
    {
        return array_key_exists($name, $this->options);
    }
}
