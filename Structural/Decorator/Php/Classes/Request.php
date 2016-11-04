<?php

namespace DesignPatterns\Structural\Decorator\Php\Classes;

class Request
{

    const HTTP_REQUEST = 'HTTP REQUEST';

    private $_protocol;
    private $_params = [];

    public function __construct($_protocol = Request::HTTP_REQUEST, $_params = ['url' => '/', 'method' => 'GET', 'id' => null, 'SESSION_ID' => '123'])
    {
        $this->_protocol = $_protocol;
        $this->_params = $_params;
    }

    public function getProtocol()
    {
        return $this->_protocol;
    }

    public function getParams()
    {
        return $this->_params;
    }

    public function changeParam($key, $value)
    {
        $this->_params[$key] = $value;
    }

}
