<?php

namespace InterInvest\Aspone2Bundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use InterInvest\Aspone2Bundle\Repository\DeclarableTVARepository;
use Doctrine\ORM\EntityManager;
use InterInvest\Aspone2Bundle\Services\Deposit;


/**
 * Created by PhpStorm.
 * User: bmari
 * Date: 17/07/2017
 * Time: 14:09
 */

class CreateDepositCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('aspone:deposit:create')
            ->setDescription('Création des xml et des déposit')
            ->addOption('type', null, InputOption::VALUE_REQUIRED, 'type de déposit (TVA, TDFC)')
            ->addOption('test', null, InputOption::VALUE_OPTIONAL, 'Est-ce un test? (0/1)', 1);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        /* @var $em EntityManager */
        $em = $this->getContainer()->get('doctrine')->getManager();

        if($input->getOption('type') == 'TVA') {
            /* @var DeclarableTVARepository $declarationsrepo */
            $declarationsrepo = $em->getRepository("InterInvestAspone2Bundle:DeclarableTVA");
            $declarations = $declarationsrepo->getDeclarableTVASansDeposit();
        }

        /* @var $sDeposit Deposit */
        $sDeposit = $this->getContainer()->get('aspone.services.deposit');
        $sDeposit->init($input->getOption('type'), $input->getOption('test'));
        $sDeposit->createDeposit($declarations);
    }
}