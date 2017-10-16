<?php

namespace InterInvest\Aspone2Bundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * AsponeDeposit
 *
 * @ORM\Table(name="aspone_deposit")
 * @ORM\Entity(repositoryClass="InterInvest\Aspone2Bundle\Repository\AsponeDepositRepository")
 */
class AsponeDeposit
{

    const ETAT_NON_FINI = 0;
    const ETAT_OK = 1;
    const ETAT_ERREUR = 2;

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
     * @ORM\Column(name="type", type="string", length=9, nullable=true, options={"default": ""})
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="identifiant", type="string", length=100, nullable=true)
     */
    private $identifiant;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_envoi", type="datetime", nullable=true)
     * @Gedmo\Timestampable(on="create")
     */
    private $dateEnvoi;

    /**
     * @var integer
     *
     * @ORM\Column(name="retour_immediat", type="smallint", nullable=false, options={"default": 0})
     */
    private $retourImmediat = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat", type="smallint", nullable=false, options={"default": 0})
     */
    private $etat = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="numads", type="integer", nullable=true, options={"default": 0})
     */
    private $numads = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="interchangeid", type="integer", nullable=true, options={"default": 0})
     */
    private $interchangeid = 0;

    /**
     * @var boolean
     *
     * @ORM\Column(name="istest", type="boolean", nullable=true, options={"default": false})
     */
    private $istest = false;


    /**
     * @var ArrayCollection
     */
    protected $declarations;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="AsponeDepositHistorique", mappedBy="deposit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="deposit_id")
     * })
     */
    protected $historiques;


    public function __construct()
    {
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
     * Set type
     *
     * @param string $type
     *
     * @return AsponeDeposit
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set identifiant
     *
     * @param string $identifiant
     *
     * @return AsponeDeposit
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
     * Set dateEnvoi
     *
     * @param \DateTime $dateEnvoi
     *
     * @return AsponeDeposit
     */
    public function setDateEnvoi($dateEnvoi)
    {
        $this->dateEnvoi = $dateEnvoi;

        return $this;
    }

    /**
     * Get dateEnvoi
     *
     * @return \DateTime
     */
    public function getDateEnvoi()
    {
        return $this->dateEnvoi;
    }

    /**
     * Set retourImmediat
     *
     * @param integer $retourImmediat
     *
     * @return AsponeDeposit
     */
    public function setRetourImmediat($retourImmediat)
    {
        $this->retourImmediat = $retourImmediat;

        return $this;
    }

    /**
     * Get retourImmediat
     *
     * @return integer
     */
    public function getRetourImmediat()
    {
        return $this->retourImmediat;
    }

    /**
     * Set etat
     *
     * @param integer $etat
     *
     * @return AsponeDeposit
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
     * Set numads
     *
     * @param integer $numads
     *
     * @return AsponeDeposit
     */
    public function setNumads($numads)
    {
        $this->numads = $numads;

        return $this;
    }

    /**
     * Get numads
     *
     * @return integer
     */
    public function getNumads()
    {
        return $this->numads;
    }

    /**
     * Set interchangeid
     *
     * @param integer $interchangeid
     *
     * @return AsponeDeposit
     */
    public function setInterchangeid($interchangeid)
    {
        $this->interchangeid = $interchangeid;

        return $this;
    }

    /**
     * Get interchangeid
     *
     * @return integer
     */
    public function getInterchangeid()
    {
        return $this->interchangeid;
    }

    /**
     * Set istest
     *
     * @param boolean $istest
     *
     * @return AsponeDeposit
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
     * Add declaration
     *
     * @param AsponeDeclaration $declaration
     *
     * @return AsponeDeposit
     */
    public function addDeclaration(AsponeDeclaration $declaration)
    {
        $this->declarations[] = $declaration;
        $declaration->setDeposit($this);

        return $this;
    }


    /**
     * Add historique
     *
     * @param \InterInvest\Aspone2Bundle\Entity\AsponeDepositHistorique $historique
     *
     * @return AsponeDeposit
     */
    public function addHistorique(\InterInvest\Aspone2Bundle\Entity\AsponeDepositHistorique $historique)
    {
        $this->historiques[] = $historique;
        $historique->setDeposit($this);

        return $this;
    }

    /**
     * Remove historique
     *
     * @param \InterInvest\Aspone2Bundle\Entity\AsponeDepositHistorique $historique
     */
    public function removeHistorique(\InterInvest\Aspone2Bundle\Entity\AsponeDepositHistorique $historique)
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
