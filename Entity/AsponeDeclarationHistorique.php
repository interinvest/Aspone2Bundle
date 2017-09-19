<?php

namespace interinvest\aspone2bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DeclarationHistorique
 *
 * @ORM\Table(name="aspone_declaration_historique")
 * @ORM\Entity
 */
class AsponeDeclarationHistorique
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true, options={"default": ""})
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=true, options={"default": ""})
     */
    private $label;

    /**
     * @var boolean
     *
     * @ORM\Column(name="iserror", type="boolean", nullable=true, options={"default": false})
     */
    private $iserror = false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isfinal", type="boolean", nullable=true, options={"default": false})
     */
    private $isfinal = false;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", length=2, nullable=true)
     */
    private $date;


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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return AsponeDeclarationHistorique
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set label
     *
     * @param string $label
     *
     * @return AsponeDeclarationHistorique
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set iserror
     *
     * @param boolean $iserror
     *
     * @return AsponeDeclarationHistorique
     */
    public function setIserror($iserror)
    {
        $this->iserror = $iserror;

        return $this;
    }

    /**
     * Get iserror
     *
     * @return boolean
     */
    public function getIserror()
    {
        return $this->iserror;
    }

    /**
     * Set isfinal
     *
     * @param boolean $isfinal
     *
     * @return AsponeDeclarationHistorique
     */
    public function setIsfinal($isfinal)
    {
        $this->isfinal = $isfinal;

        return $this;
    }

    /**
     * Get isfinal
     *
     * @return boolean
     */
    public function getIsfinal()
    {
        return $this->isfinal;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return AsponeDeclarationHistorique
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
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
