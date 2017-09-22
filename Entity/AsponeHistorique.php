<?php

namespace InterInvest\Aspone2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AsponeHistorique
 *
 * @ORM\MappedSuperclass()
 */
abstract class AsponeHistorique
{

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
     * @var AsponeDeposit
     *
     * @ORM\ManyToOne(targetEntity="AsponeDeposit", inversedBy="historiques")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="deposit_id", referencedColumnName="id")
     * })
     */
    private $deposit;


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
     * Set deposit
     *
     * @param \InterInvest\Aspone2Bundle\Entity\AsponeDeposit $deposit
     *
     *
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
     * Set declaration
     *
     * @param \InterInvest\Aspone2Bundle\Entity\AsponeDeclaration $declaration
     *
     *
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
}
