<?php

namespace InterInvest\Aspone2Bundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Internal\Hydration\IterableResult;
use II\Bundle\DeclarableAsponeBundle\Entity;
use II\Bundle\MigrationBundle\Repository\AbstractRepository;
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
        $query = $this->createQueryBuilder('depo')
            ->where('depo.etat = :etat')->setParameter('etat', AsponeDeposit::ETAT_NON_FINI)
            ->andWhere('depo.identifiant is not null')
            ->andWhere('depo.retourImmediat = 1');

        return $query->getQuery()->iterate();
    }


}
