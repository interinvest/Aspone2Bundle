<?php
/**
 * Created by PhpStorm.
 * User: bmari
 * Date: 05/07/2017
 * Time: 17:30
 */

namespace InterInvest\Aspone2Bundle\Services;

use Doctrine\ORM\EntityManager;
use InterInvest\Aspone2Bundle\Entity\AsponeDeposit;

class Deposit
{
    private $em;
    /* @var $sFormulaire Formulaire */
    private $sFormulaire;
    /* @var $sSOAP SOAP */
    private $sSOAP;
    /* @var $deposit AsponeDeposit */
    private $deposit;

    public function __construct(EntityManager $em, Formulaire $sFormulaire, SOAP $sSOAP)
    {
        $this->em = $em;
        $this->sFormulaire = $sFormulaire;
        $this->sSOAP = $sSOAP;
    }


    public function init(AsponeDeposit $deposit)
    {
        $this->deposit = $deposit;
    }

    /* @var $deposit AsponeDeposit */
    public function sendDeposit()
    {
        $xml = "";
        foreach($this->deposit->getDeclarations() as $declaration){
            $this->sFormulaire->init($declaration);
            $xml .= $this->sFormulaire->getXml();
        }

        $this->sSOAP->initSoap();
        $soap = $this->sSOAP->getSoap();
        $soap->addDocument('Depot ' . $this->deposit->getType(), $this->deposit->getType(), $xml);

        $response = $soap->getResponse();
        if ($response) {
            $this->deposit->setDateEnvoi(new \DateTime());
            $this->deposit->setRetourImmediat(strpos($response, 'SUCCESS') === 0 ? AsponeDeposit::ETAT_OK : AsponeDeposit::ETAT_ERREUR);
            $identif = str_replace(array('SUCCESS', 'ERROR'), '', $response);
            $this->deposit->setIdentifiant($identif);
            $this->deposit->setEtat(AsponeDeposit::ETAT_NON_FINI);

            return $response;
        }

        return false;
    }
}
