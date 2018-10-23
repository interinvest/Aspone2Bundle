<?php

namespace InterInvest\Aspone2Bundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Internal\Hydration\IterableResult;
use II\Bundle\DeclarableAsponeBundle\Entity;
use II\Bundle\MigrationBundle\Repository\AbstractRepository;
use InterInvest\Aspone2Bundle\Entity\AsponeDeclaration;
use InterInvest\Aspone2Bundle\Entity\AsponeDeclarationHistorique;
use InterInvest\Aspone2Bundle\Entity\AsponeDeposit;

/**
 * AsponeDeclarationHistoriqueDetailRepository
 *
 * @package InterInvest\Aspone2Bundle\Repository
 *
 */
class AsponeDeclarationHistoriqueDetailRepository extends EntityRepository
{

    public function getRetoursDeclaration(AsponeDeclarationHistorique $historique)
    {
        $query = $this->createQueryBuilder('histDetail')
            ->where('histDetail.declarationHistorique = :historique')->setParameter('historique', $historique)
            ->orderBy('histDetail.id', 'desc');

        return $query->getQuery()->getResult();
    }

}
