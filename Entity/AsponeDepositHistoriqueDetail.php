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
     * @var AsponeDepositHistorique
     *
     * @ORM\ManyToOne(targetEntity="InterInvest\Aspone2Bundle\Entity\AsponeDepositHistorique", inversedBy="details")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="deposit_historique_id", referencedColumnName="id")
     * })
     */
    private $depositHistorique;


    /**
     * Set depositHistorique
     *
     * @param \InterInvest\Aspone2Bundle\Entity\AsponeDepositHistorique $depositHistorique
     *
     * @return AsponeDepositHistoriqueDetail
     */
    public function setDepositHistorique(\InterInvest\Aspone2Bundle\Entity\AsponeDepositHistorique $depositHistorique = null)
    {
        $this->depositHistorique = $depositHistorique;

        return $this;
    }

    /**
     * Get depositHistorique
     *
     * @return \InterInvest\Aspone2Bundle\Entity\AsponeDepositHistorique
     */
    public function getDepositHistorique()
    {
        return $this->depositHistorique;
    }
}
