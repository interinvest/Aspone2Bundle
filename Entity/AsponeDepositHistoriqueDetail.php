<?php

namespace InterInvest\Aspone2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DepositHistoriqueDetail
 *
 * @ORM\Table(name="aspone_deposit_historique_detail")
 * @ORM\Entity
 */
class AsponeDepositHistoriqueDetail extends AsponeDetail
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

}
