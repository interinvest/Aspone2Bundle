<?php

namespace InterInvest\Aspone2Bundle\Repository;

use Doctrine\ORM\EntityRepository;
use InterInvest\Aspone2Bundle\Entity\AsponeDeposit;

/**
 * AsponeDepositRepository
 *
 * @package InterInvest\Aspone2Bundle\Repository
 *
 */
class AsponeDepositRepository extends EntityRepository
{

    public function getDepositsEnvoyes()
    {
        $dateMin = new \DateTime();
        $dateMin->modify('-3 hours');

        $query = $this->createQueryBuilder('depo')
            ->where('depo.etat = :etat')->setParameter('etat', AsponeDeposit::ETAT_NON_FINI)
            ->andWhere('depo.identifiant is not null')
            ->andWhere('depo.retourImmediat = 1')
            ->andWhere('depo.dateEnvoi <= :dateMin')->setParameter('dateMin', $dateMin);

        return $query->getQuery()->iterate();
    }


}
