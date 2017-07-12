<?php

namespace InterInvest\Bundle\Aspone\Src\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use InterInvest\Bundle\Aspone\Src\Entity\AsponeDeclaration;

/**
 * AsponeDeclarationRepository
 *
 * repository methods below.
 * @method AsponeDeclaration findById($idAsponeDeclaration)
 */
class AsponeDeclarationRepository extends EntityRepository
{
    /** @var QueryBuilder $query */
    protected $query;



    /**
     * @return QueryBuilder
     */
    public function initQuery()
    {
        $this->query = $this->createQueryBuilder("ad");

        return $this->query;
    }


    /**
     * @param string $groupe
     *
     * @return array
     */
    public function getDeclarationsSansDeposit($groupe)
    {
        $type = [
          'TVA' => ['IDT','RBT'],
          'TDFC' => ['IDF'],
        ];

        $query = $this->initQuery();
        $query->where('ad.identifiant is null')
            ->andWhere('IDENTITY(ad.deposit) is null')
            ->andWhere('ad.type in (:types)')->setParameter('type', $type[$groupe]);

        return $query->getQuery()->getResult();
    }
}
