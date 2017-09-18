<?php
/**
 * Created by PhpStorm.
 * User: bmari
 * Date: 05/07/2017
 * Time: 16:58
 */

namespace InterInvest\Aspone2Bundle\Services;

use II\Bundle\SoapBundle\SoapClient\SoapClient;
use Symfony\Component\HttpKernel\Kernel;

class SOAP
{
    /* @var $kernel Kernel */
    private $kernel;
    private $soap;




    public function __construct(Kernel $kernel)
    {
        $this->kernel = $kernel;
        $this->initSoap();
    }


    private function initSoap()
    {
        $options = array(
            'soap_version' => SOAP_1_1,
            'stream_context' => $this->kernel->getContainer()->getParameter('aspone.context'),
            'authentification' => SOAP_AUTHENTICATION_BASIC,
            'trace' => 1
        );
        $soap = new SoapClient($this->kernel->getContainer()->getParameter('aspone.wsdl.monitoring'), $options);

        $soap->setContext($this->kernel->getContainer()->getParameter('aspone.context'));
        $soap->setContextLogin($this->kernel->getContainer()->getParameter('aspone.contextLogin'));
        $soap->setContextPassword($this->kernel->getContainer()->getParameter('aspone.contextPassword'));
        $soap->setPassword($this->kernel->getContainer()->getParameter('aspone.password'));
        $soap->setUsername($this->kernel->getContainer()->getParameter('aspone.username'));
        $soap->setService($this->kernel->getContainer()->getParameter('aspone.serviceVersion.0'));
        $soap->setServiceVersion('1.0');
        $soap->setSoapHeaders();
        $soap->__setLocation($this->kernel->getContainer()->getParameter('aspone.location.monitoring'));

        $this->soap = $soap;
    }

    public function getSoap()
    {
        return $this->soap;
    }
}
