<?php

namespace InterInvest\Aspone2Bundle\Services\SoapClient;

class WsseToken {
    private $UsernameToken;
    function __construct ($innerVal){
        $this->UsernameToken = $innerVal;
    }
}