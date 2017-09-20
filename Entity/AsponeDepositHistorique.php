<?php

namespace InterInvest\Aspone2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DepositHistorique
 *
 * @ORM\Table(name="aspone_deposit_historique")
 * @ORM\Entity
 */
class AsponeDepositHistorique extends AsponeHistorique
{

    /**
     * @var AsponeDeposit
     *
     * @ORM\ManyToOne(targetEntity="AsponeDeposit", inversedBy="historiques")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="deposit_id", referencedColumnName="id")
     * })
     */
    private $deposit;

    /**
     * @ORM\OneToMany(targetEntity="InterInvest\Aspone2Bundle\Entity\AsponeDepositHistoriqueDetail", mappedBy="depositHistorique")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="deposit_historique_id")
     * })
     */
    private $details;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->details = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set deposit
     *
     * @param \InterInvest\Aspone2Bundle\Entity\AsponeDeposit $deposit
     *
     * @return AsponeDepositHistorique
     */
    public function setDeposit(\InterInvest\Aspone2Bundle\Entity\AsponeDeposit $deposit = null)
    {
        $this->deposit = $deposit;

        return $this;
    }

    /**
     * Get deposit
     *
     * @return \InterInvest\Aspone2Bundle\Entity\AsponeDeposit
     */
    public function getDeposit()
    {
        return $this->deposit;
    }

    /**
     * Add detail
     *
     * @param \InterInvest\Aspone2Bundle\Entity\AsponeDepositHistoriqueDetail $detail
     *
     * @return AsponeDepositHistorique
     */
    public function addDetail(\InterInvest\Aspone2Bundle\Entity\AsponeDepositHistoriqueDetail $detail)
    {
        $this->details[] = $detail;

        return $this;
    }

    /**
     * Remove detail
     *
     * @param \InterInvest\Aspone2Bundle\Entity\AsponeDepositHistoriqueDetail $detail
     */
    public function removeDetail(\InterInvest\Aspone2Bundle\Entity\AsponeDepositHistoriqueDetail $detail)
    {
        $this->details->removeElement($detail);
    }

    /**
     * Get details
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDetails()
    {
        return $this->details;
    }
}
