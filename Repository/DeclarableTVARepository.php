<?php

namespace InterInvest\Aspone2Bundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

/**
 * DeclarableTVARepository
 *
 */
class DeclarableTVARepository extends EntityRepository
{
    /** @var QueryBuilder $query */
    protected $query;



    /**
     * @return QueryBuilder
     */
    public function initQuery()
    {
        $this->query = $this->createQueryBuilder("dTVA");

        return $this->query;
    }


    /**
     *
     * @return array
     */
    public function getDeclarableTVASansDeposit()
    {
        $query = $this->initQuery();
        $query->innerJoin('dTVA.asponeDeclaration', 'ad')
            ->where('ad.identifiant is null')
            ->andWhere('IDENTITY(ad.deposit) is null')
            ->select(['dTVA', 'ad']);

        return $query->getQuery()->getResult();
    }
}
