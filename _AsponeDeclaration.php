<?php

namespace InterInvest\Bundle\Aspone\Src\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * AsponeDeclaration
 * @ORM\Entity(repositoryClass="InterInvest\Bundle\Aspone\Src\Repository\AsponeDeclarationRepository")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="type", type="string")
 * @ORM\DiscriminatorMap({"IDT" = "AsponeDeclarationIDT", "RBT" = "AsponeDeclarationRBT", "IDF" = "AsponeDeclarationIDF"})
 */
abstract class AsponeDeclaration
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="identifiant", type="string", length=100, nullable=true)
     */
    protected $identifiant;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat", type="integer", length=2, nullable=true)
     */
    protected $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="declarant_siren", type="string", length=20, nullable=true)
     */
    protected $declarantSiren;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="periode_start", type="datetime", nullable=true)
     */
    protected $periodeStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="periode_end", type="datetime", nullable=true)
     */
    protected $periodeEnd;

    /**
     * @var string
     *
     * @ORM\Column(name="reference_client", type="string", length=100, nullable=true)
     */
    protected $referenceClient;

    /**
     * @var string
     *
     * @ORM\Column(name="formulaires", type="string", length=255, nullable=true)
     */
    protected $formulaires;

    /**
     * @var AsponeDeposit
     *
     * @ORM\ManyToOne(targetEntity="InterInvest\Bundle\Aspone\src\Entity\Deposit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="deposit_id", referencedColumnName="id")
     * })
     */
    protected $deposit;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="InterInvest\Bundle\Aspone\src\Entity\DeclarationHistorique", mappedBy="declaration")
     */
    protected $historiques;



    public function __get($name)
    {
        return False;
    }


    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getIdentifiant()
    {
        return $this->identifiant;
    }

    /**
     * @param string $identifiant
     */
    public function setIdentifiant($identifiant)
    {
        $this->identifiant = $identifiant;
    }

    /**
     * @return int
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param int $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }

    /**
     * @return string
     */
    public function getDeclarantSiren()
    {
        return $this->declarantSiren;
    }

    /**
     * @param string $declarantSiren
     */
    public function setDeclarantSiren($declarantSiren)
    {
        $this->declarantSiren = $declarantSiren;
    }

    /**
     * @return \DateTime
     */
    public function getPeriodeStart()
    {
        return $this->periodeStart;
    }

    /**
     * @param \DateTime $periodeStart
     */
    public function setPeriodeStart($periodeStart)
    {
        $this->periodeStart = $periodeStart;
    }

    /**
     * @return \DateTime
     */
    public function getPeriodeEnd()
    {
        return $this->periodeEnd;
    }

    /**
     * @param \DateTime $periodeEnd
     */
    public function setPeriodeEnd($periodeEnd)
    {
        $this->periodeEnd = $periodeEnd;
    }

    /**
     * @return AsponeDeposit
     */
    public function getDeposit()
    {
        return $this->deposit;
    }

    /**
     * @param AsponeDeposit $deposit
     */
    public function setDeposit($deposit)
    {
        $this->deposit = $deposit;
    }

    /**
     * @return String
     */
    public function getReferenceClient()
    {
        return $this->referenceClient;
    }

    /**
     * @param String $referenceClient
     */
    public function setReferenceClient($referenceClient)
    {
        $this->referenceClient = $referenceClient;
    }

    /**
     * @return string
     */
    public function getFormulaires()
    {
        return $this->formulaires;
    }

    /**
     * @param string $formulaires
     */
    public function setFormulaires($formulaires)
    {
        $this->formulaires = $formulaires;
    }

    public function getMillesime()
    {
        return $this->periodeStart->format('Y');
    }
}