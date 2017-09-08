<?php
/**
 * Created by PhpStorm.
 * User: bmari
 * Date: 05/07/2017
 * Time: 16:58
 */

namespace InterInvest\Aspone2Bundle\Services;


use Ii\Aspone2Bundle\SoapClient\SoapClient;
use Symfony\Component\DependencyInjection\Container;

class SOAP
{
    private $container;
    private $soap;




    public function __construct(Container $container)
    {
        $this->container = $container;
        $this->initSoap();
    }


    private function initSoap()
    {
        $options = array(
            'soap_version' => SOAP_1_1,
            'stream_context' => $this->container->getParameter('aspone.context'),
            'authentification' => SOAP_AUTHENTICATION_BASIC,
            'trace' => 1
        );
        $soap = new SoapClient($this->container->getParameter('aspone.wsdl.monitoring'), $options);

        $soap->setContext($this->container->getParameter('aspone.context'));
        $soap->setContextLogin($this->container->getParameter('aspone.contextLogin'));
        $soap->setContextPassword($this->container->getParameter('aspone.contextPassword'));
        $soap->setPassword($this->container->getParameter('aspone.password'));
        $soap->setUsername($this->container->getParameter('aspone.username'));
        $soap->setService($this->container->getParameter('aspone.serviceVersion.0'));
        $soap->setServiceVersion('1.0');
        $soap->setSoapHeaders();
        $soap->__setLocation($this->container->getParameter('aspone.location.monitoring'));

        $this->soap = $soap;
    }

    public function getSoap()
    {
        return $this->soap;
    }
}