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
        $beSimpleTeledeclaration = $this->kernel->getContainer()->get('besimple.soap.client.builder.teledeclarations');
        $builder = new SoapClientBuilder($beSimpleTeledeclaration->getWsdl(), array('debug'=>false));
        $builder->withMtomAttachments();
        $builder->withTrace(1);
        $builder->withWsdl($beSimpleTeledeclaration->getWsdl());
        $builder->withSoapVersion11();
        /* @var $soap SoapClient */
        $soap = $builder->build();
        $soap->setContextLogin($this->kernel->getContainer()->getParameter('aspone2.contextLogin'));
        $soap->setContextPassword($this->kernel->getContainer()->getParameter('aspone2.contextPassword'));
        $soap->setPassword($this->kernel->getContainer()->getParameter('aspone2.password'));
        $soap->setUsername($this->kernel->getContainer()->getParameter('aspone2.username'));
        //$soap->setServiceVersion('1.1');
        $soap->setContext($this->kernel->getContainer()->getParameter('aspone2.context'));
        $soap->setService(SOAP_1_1);
        $soap->setSoapHeaders();
        $soap->__setLocation("http://aspone.fr/mb/webservices");

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
