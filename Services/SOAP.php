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

    public function soapBuiler($builder)
    {
        /* @var $soap SoapClient */
        $soap = $builder->build();
        $soap->setContextLogin($this->kernel->getContainer()->getParameter('aspone2.contextLogin'));
        $soap->setContextPassword($this->kernel->getContainer()->getParameter('aspone2.contextPassword'));
        $soap->setPassword($this->kernel->getContainer()->getParameter('aspone2.password'));
        $soap->setUsername($this->kernel->getContainer()->getParameter('aspone2.username'));
        $soap->setServiceVersion('1.1');
        $soap->setContext($this->kernel->getContainer()->getParameter('aspone2.context'));
        $soap->setService($this->kernel->getContainer()->getParameter('aspone2.serviceVersion.1'));
        $soap->setSoapHeaders();

        return $soap;
    }


    public function initSoapDepot()
    {
        $builder = new SoapClientBuilder($this->kernel->getContainer()->getParameter('aspone2.wsdl.teledeclarations'), array('debug'=>false));
        $builder->withMtomAttachments();
        $builder->withTrace(true);
        $builder->withWsdl($this->kernel->getContainer()->getParameter('aspone2.wsdl.teledeclarations'));

        $soap = $this->soapBuiler($builder);
        $soap->__setLocation($this->kernel->getContainer()->getParameter('aspone2.location.teledeclarations'));

        $this->soap = $soap;
    }

    public function initSoapSuivi()
    {
        $builder = new SoapClientBuilder($this->kernel->getContainer()->getParameter('aspone2.wsdl.monitoring'), array('debug'=>false));
        $builder->withMtomAttachments();
        $builder->withTrace(true);
        $builder->withWsdl($this->kernel->getContainer()->getParameter('aspone2.wsdl.monitoring'));

        $soap = $this->soapBuiler($builder);
        $soap->__setLocation($this->kernel->getContainer()->getParameter('aspone2.location.monitoring'));

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
