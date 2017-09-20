<?php
/**
 * Created by PhpStorm.
 * User: bmari
 * Date: 05/07/2017
 * Time: 16:58
 */

namespace InterInvest\Aspone2Bundle\Services;

use InterInvest\Aspone2Bundle\Services\SoapClient\SoapClientBuilder;
use Symfony\Component\HttpKernel\Kernel;
use InterInvest\Aspone2Bundle\Services\SoapClient\SoapClient;

class SOAP
{
    /* @var $kernel Kernel */
    private $kernel;
    /* @var $soap SoapClient */
    private $soap;


    public function __construct(Kernel $kernel)
    {
        $this->kernel = $kernel;
    }


    public function initSoap()
    {
        $builder = new SoapClientBuilder($this->kernel->getContainer()->getParameter('aspone.wsdl.teledeclarations'), array('debug'=>false));
        $builder->withMtomAttachments();
        $builder->withTrace(true);
        $builder->withWsdl($this->kernel->getContainer()->getParameter('aspone.wsdl.teledeclarations'));

        /* @var $soap SoapClient */
        $soap = $builder->build();
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

    /**
     * @return SoapClient
     */
    public function getSoap()
    {
        return $this->soap;
    }
}
