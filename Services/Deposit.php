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
        /* @var $deposit AsponeDeposit */
        $deposit = new AsponeDeposit();
        $deposit->setEtat(0)
            ->setIsTest($this->test)
            ->setType($this->type);

        $i = 0;
        foreach($declarations as $declaration) {

            $this->sFormulaire->init($declaration);
            if($this->sFormulaire->saveXml()){
                $deposit->addDeclaration($declaration);
                $i++;
            }

            if($i == 100){
                $this->em->persist($deposit);
                $i = 0;

                $deposit = new AsponeDeposit();
                $deposit->setEtat(0)
                    ->setIsTest($this->test)
                    ->setType($this->type);
            }
        }
        $this->em->persist($deposit);
        $this->em->flush();
    }


    public function sendDeposit()
    {

    }
}