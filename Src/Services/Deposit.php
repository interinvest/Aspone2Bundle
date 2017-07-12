<?php
/**
 * Created by PhpStorm.
 * User: bmari
 * Date: 05/07/2017
 * Time: 17:30
 */

namespace InterInvest\Bundle\Aspone\Src\Services;

use Doctrine\ORM\EntityManager;
use InterInvest\AsponeBundle\Entity\Deposit;
use InterInvest\Bundle\Aspone\Src\Entity\AsponeDeclaration;
use InterInvest\Bundle\Aspone\Src\Entity\AsponeDeposit;
use InterInvest\Bundle\Aspone\Src\Services\Formulaire;
use InterInvest\Bundle\Aspone\Src\Services\SOAP;

class _Deposit
{
    /* @var $em EntityManager */
    private $em;
    /* @var $sFormulaire Formulaire */
    private $sFormulaire;

    private $type;
    private $test;

    public function __construct(EntityManager $em, Formulaire $sFormulaire)
    {
        $this->em = $em;
        $this->sFormulaire = $sFormulaire;
    }


    public function init($type, $test)
    {
        $this->type = $type;
        $this->test = $test;
    }

    public function createDeposit($declarations)
    {
        $i = 0;
        /* @var $declaration AsponeDeclaration */
        foreach($declarations as $declaration) {
            if ($i == 0) {
                /* @var $deposit AsponeDeposit */
                $deposit = new Deposit();
                $deposit->setEtat(Deposit::ETAT_NON_FINI)
                    ->setIsTest($this->test)
                    ->setType($this->type);
            }

            $this->sFormulaire->init($declaration);
            if($this->sFormulaire->saveXml()){
                $deposit->addDeclaration($declaration);
                $i++;
            }

            if($i == 100){
                $this->em->persist($deposit);
                $i = 0;
            }
        }
        $this->em->flush();
    }


    public function sendDeposit()
    {

    }
}