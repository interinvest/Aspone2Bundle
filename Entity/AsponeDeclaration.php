<?php

namespace InterInvest\Aspone2Bundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * AsponeDeclaration
 * @ORM\MappedSuperclass()
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
     */
    protected $type;

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
     * @var boolean
     *
     * @ORM\Column(name="istest", type="boolean", nullable=true, options={"default": false})
     */
    private $istest = false;
    
    /**
     * @var AsponeDeposit
     *
     * @ORM\ManyToOne(targetEntity="InterInvest\Aspone2Bundle\Entity\AsponeDeposit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="deposit_id", referencedColumnName="id")
     * })
     */
    protected $deposit;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="InterInvest\Aspone2Bundle\Entity\AsponeDeclarationHistorique", mappedBy="declaration")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="declaration_id")
     * })
     */
    protected $historiques;

    public function __get($name)
    {
        return False;
    }

    public function getMillesime()
    {
        return $this->periodeEnd->format('Y');
    }



    /**
     * Constructor
     */
    public function __construct()
    {
        $this->historiques = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set identifiant
     *
     * @param string $identifiant
     *
     * @return AsponeDeclaration
     */
    public function setIdentifiant($identifiant)
    {
        $this->identifiant = $identifiant;

        return $this;
    }

    /**
     * Get identifiant
     *
     * @return string
     */
    public function getIdentifiant()
    {
        return $this->identifiant;
    }


    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }


    /**
     * Set etat
     *
     * @param integer $etat
     *
     * @return AsponeDeclaration
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return integer
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set declarantSiren
     *
     * @param string $declarantSiren
     *
     * @return AsponeDeclaration
     */
    public function setDeclarantSiren($declarantSiren)
    {
        $this->declarantSiren = $declarantSiren;

        return $this;
    }

    /**
     * Get declarantSiren
     *
     * @return string
     */
    public function getDeclarantSiren()
    {
        return $this->declarantSiren;
    }

    /**
     * Set periodeStart
     *
     * @param \DateTime $periodeStart
     *
     * @return AsponeDeclaration
     */
    public function setPeriodeStart($periodeStart)
    {
        $this->periodeStart = $periodeStart;

        return $this;
    }

    /**
     * Get periodeStart
     *
     * @return \DateTime
     */
    public function getPeriodeStart()
    {
        return $this->periodeStart;
    }

    /**
     * Set periodeEnd
     *
     * @param \DateTime $periodeEnd
     *
     * @return AsponeDeclaration
     */
    public function setPeriodeEnd($periodeEnd)
    {
        $this->periodeEnd = $periodeEnd;

        return $this;
    }

    /**
     * Get periodeEnd
     *
     * @return \DateTime
     */
    public function getPeriodeEnd()
    {
        return $this->periodeEnd;
    }

    /**
     * Set referenceClient
     *
     * @param string $referenceClient
     *
     * @return AsponeDeclaration
     */
    public function setReferenceClient($referenceClient)
    {
        $this->referenceClient = $referenceClient;

        return $this;
    }

    /**
     * Get referenceClient
     *
     * @return string
     */
    public function getReferenceClient()
    {
        return $this->referenceClient;
    }

    /**
     * Set formulaires
     *
     * @param string $formulaires
     *
     * @return AsponeDeclaration
     */
    public function setFormulaires($formulaires)
    {
        $this->formulaires = $formulaires;

        return $this;
    }

    /**
     * Get formulaires
     *
     * @return string
     */
    public function getFormulaires()
    {
        return $this->formulaires;
    }

    /**
     * Set istest
     *
     * @param boolean $istest
     *
     * @return AsponeDeclaration
     */
    public function setIstest($istest)
    {
        $this->istest = $istest;

        return $this;
    }

    /**
     * Get istest
     *
     * @return boolean
     */
    public function getIstest()
    {
        return $this->istest;
    }
    

    /**
     * Set deposit
     *
     * @param AsponeDeposit $deposit
     *
     * @return AsponeDeclaration
     */
    public function setDeposit(AsponeDeposit $deposit = null)
    {
        $this->deposit = $deposit;

        return $this;
    }

    /**
     * Get deposit
     *
     * @return AsponeDeposit
     */
    public function getDeposit()
    {
        return $this->deposit;
    }
    
    
    /**
     * Add historique
     *
     * @param \InterInvest\Aspone2Bundle\Entity\AsponeDeclarationHistorique $historique
     *
     * @return \AsponeDeclaration
     */
    public function addHistorique(\InterInvest\Aspone2Bundle\Entity\AsponeDeclarationHistorique $historique)
    {
        $this->historiques[] = $historique;

        return $this;
    }

    /**
     * Remove historique
     *
     * @param \InterInvest\Aspone2Bundle\Entity\AsponeDeclarationHistorique $historique
     */
    public function removeHistorique(\InterInvest\Aspone2Bundle\Entity\AsponeDeclarationHistorique $historique)
    {
        $this->historiques->removeElement($historique);
    }

    /**
     * Get historiques
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getHistoriques()
    {
        return $this->historiques;
    }
}
