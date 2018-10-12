<?php

namespace InterInvest\Aspone2Bundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Internal\Hydration\IterableResult;
use II\Bundle\DeclarableAsponeBundle\Entity;
use II\Bundle\MigrationBundle\Repository\AbstractRepository;
use InterInvest\Aspone2Bundle\Entity\AsponeDeposit;

/**
 * AsponeDeclarationHistoriqueRepository
 *
 * @package InterInvest\Aspone2Bundle\Repository
 *
 */
class AsponeDeclarationHistoriqueRepository extends EntityRepository
{

    public function getHistoriqueByDeclaration($idDeclaration)
    {
        $query = $this->createQueryBuilder('hist')
            ->where('hist.declaration_id = :id')->setParameter('id', $idDeclaration);

        return $query->getQuery()->getResult();
    }


    
    public function getDateEnvoiDeclarationTva($asponeDeclaration)
    {
        $query = $this->createQueryBuilder('hist')
            ->where('hist.declaration = :asponeDeclaration')->setParameter('asponeDeclaration', $asponeDeclaration)
            ->andWhere('hist.isfinal = 1');

        return $query->getQuery()->getResult();
    }
}
