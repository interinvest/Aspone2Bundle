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
     * @var AsponeDeclaration
     *
     * @ORM\ManyToOne(targetEntity="AsponeDeclaration", inversedBy="historiques")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="declaration_id", referencedColumnName="id")
     * })
     */
    private $declaration;

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
     * Set declaration
     *
     * @param \InterInvest\Aspone2Bundle\Entity\AsponeDeclaration $declaration
     *
     * @return AsponeDeclarationHistorique
     */
    public function setDeclaration(\InterInvest\Aspone2Bundle\Entity\AsponeDeclaration $declaration = null)
    {
        $this->declaration = $declaration;

        return $this;
    }

    /**
     * Get declaration
     *
     * @return \InterInvest\Aspone2Bundle\Entity\AsponeDeclaration
     */
    public function getDeclaration()
    {
        return $this->declaration;
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
