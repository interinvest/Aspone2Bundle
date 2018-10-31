<?php

namespace InterInvest\Aspone2Bundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * DeclarationHistoriqueDetail
 *
 * @ORM\Table(name="aspone_declaration_historique_detail")
 * @ORM\Entity(repositoryClass="InterInvest\Aspone2Bundle\Repository\AsponeDeclarationHistoriqueDetailRepository")
 */
class AsponeDeclarationHistoriqueDetail extends AsponeDetail
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
     * @var AsponeDeclarationHistorique
     *
     * @ORM\ManyToOne(targetEntity="InterInvest\Aspone2Bundle\Entity\AsponeDeclarationHistorique", inversedBy="details")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="declaration_historique_id", referencedColumnName="id")
     * })
     */
    private $declarationHistorique;


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
     * Set declarationHistorique
     *
     * @param \InterInvest\Aspone2Bundle\Entity\AsponeDeclarationHistorique $declarationHistorique
     *
     *
     */
    public function setDeclarationHistorique(\InterInvest\Aspone2Bundle\Entity\AsponeDeclarationHistorique $declarationHistorique = null)
    {
        $this->declarationHistorique = $declarationHistorique;

        return $this;
    }

    /**
     * Get declarationHistorique
     *
     * @return \InterInvest\Aspone2Bundle\Entity\AsponeDeclarationHistorique
     */
    public function getDeclarationHistorique()
    {
        return $this->declarationHistorique;
    }

}
