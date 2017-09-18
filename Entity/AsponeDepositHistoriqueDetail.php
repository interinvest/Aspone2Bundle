<?php

namespace InterInvest\Aspone2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DepositHistoriqueDetail
 *
 * @ORM\Table(name="aspone_deposit_historique_detail")
 * @ORM\Entity
 */
class AsponeDepositHistoriqueDetail
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
     * @ORM\Column(name="name", type="string", length=50, nullable=true, options={"default":""})
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=true, options={"default":""})
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="detaillabel", type="text", length=2500, nullable=true, options={"default":""})
     */
    private $detail;

    /**
     * @var boolean
     *
     * @ORM\Column(name="iserror", type="boolean", nullable=true, options={"default":false})
     */
    private $iserror = false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isfinal", type="boolean", nullable=true, options={"default":false})
     */
    private $isfinal = false;

    /**
     * @var string
     *
     * @ORM\Column(name="code_erreur", type="string", length=10, nullable=true, options={"default":""})
     */
    private $codeErreur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", length=2, nullable=true)
     */
    private $date;

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
     * @return AsponeDepositHistoriqueDetail
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
     * @return AsponeDepositHistoriqueDetail
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
     * Set detail
     *
     * @param string $detail
     *
     * @return AsponeDepositHistoriqueDetail
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;

        return $this;
    }

    /**
     * Get detail
     *
     * @return string
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Set iserror
     *
     * @param boolean $iserror
     *
     * @return AsponeDepositHistoriqueDetail
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
     * @return AsponeDepositHistoriqueDetail
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
     * Set codeErreur
     *
     * @param string $codeErreur
     *
     * @return AsponeDepositHistoriqueDetail
     */
    public function setCodeErreur($codeErreur)
    {
        $this->codeErreur = $codeErreur;

        return $this;
    }

    /**
     * Get codeErreur
     *
     * @return string
     */
    public function getCodeErreur()
    {
        return $this->codeErreur;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return AsponeDepositHistoriqueDetail
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
