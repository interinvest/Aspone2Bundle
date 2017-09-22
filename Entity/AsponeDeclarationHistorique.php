<?php

namespace InterInvest\Aspone2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DeclarationHistorique
 *
 * @ORM\Table(name="aspone_declaration_historique")
 * @ORM\Entity
 */
class AsponeDeclarationHistorique extends AsponeHistorique
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
     * @ORM\OneToMany(targetEntity="InterInvest\Aspone2Bundle\Entity\AsponeDeclarationHistoriqueDetail", mappedBy="declarationHistorique")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="declaration_historique_id")
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Add detail
     *
     * @param \InterInvest\Aspone2Bundle\Entity\AsponeDeclarationHistoriqueDetail $detail
     *
     * @return AsponeDeclarationHistorique
     */
    public function addDetail(\InterInvest\Aspone2Bundle\Entity\AsponeDeclarationHistoriqueDetail $detail)
    {
        $this->details[] = $detail;

        return $this;
    }

    /**
     * Remove detail
     *
     * @param \InterInvest\Aspone2Bundle\Entity\AsponeDeclarationHistoriqueDetail $detail
     */
    public function removeDetail(\InterInvest\Aspone2Bundle\Entity\AsponeDeclarationHistoriqueDetail $detail)
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
