<?php

namespace InterInvest\Aspone2Bundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use DateTime;

/**
 * TdDeclarationTva
 *
 * @ORM\Entity()
 * @ORM\Table(name="td_declaration_tva", indexes={
 *     @ORM\Index(name="annee", columns={"annee"}),
 *     @ORM\Index(name="trimestre", columns={"trimestre"}),
 *     @ORM\Index(name="date_declaration", columns={"date_declaration"}),
 *     @ORM\Index(name="teledeclare", columns={"teledeclare"})})
 */
class TdDeclarationTva
{
    const ETAT_INIT = 0;
    const ETAT_OK = 1;
    const ETAT_ERREUR = 2;
    const ETAT_ENCOURS = 3;

    const DIRECTION_IMPOT_TAHITI = 24;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="annee", type="smallint", nullable=false)
     */
    protected $annee;

    /**
     * @var integer
     *
     * @ORM\Column(name="trimestre", type="smallint", nullable=false)
     */
    protected $trimestre;

    /**
     * @var integer
     *
     * @ORM\Column(name="N3310_01_CA", type="integer", nullable=false, options={"default":0})
     */
    protected $n331001Ca = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="N3310_3B_CG", type="integer", nullable=false, options={"default":0})
     */
    protected $n33103bCg = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="N3310_10_GM", type="integer", nullable=false, options={"default":0})
     */
    protected $n331010Gm = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="N3310_19_HA", type="integer", nullable=false, options={"default":0})
     */
    protected $n331019Ha = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="N3310_20_HB", type="integer", nullable=false, options={"default":0})
     */
    protected $n331020Hb = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="N3310_21_HC", type="integer", nullable=false, options={"default":0})
     */
    protected $n331021Hc = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="N3310_22_HD", type="integer", nullable=false, options={"default":0})
     */
    protected $n331022Hd = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="N3310_25_JA", type="integer", nullable=false, options={"default":0})
     */
    protected $n331025Ja = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="N3310_26_JB", type="integer", nullable=false, options={"default":0})
     */
    protected $n331026Jb = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="N3310_27_JC", type="integer", nullable=false, options={"default":0})
     */
    protected $n331027Jc = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="N3310_28_KA", type="integer", nullable=false, options={"default":0})
     */
    protected $n331028Ka = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="N3310_NEANT_KF", type="boolean", nullable=false, options={"default":0})
     */
    protected $n3310NeantKf = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="T_IDENTIF_CA", type="string", length=8, nullable=true)
     */
    protected $tIdentifCa;

    /**
     * @var string
     *
     * @ORM\Column(name="T_IDENTIF_CB", type="string", length=8, nullable=true)
     */
    protected $tIdentifCb;

    /**
     * @var string
     *
     * @ORM\Column(name="T_IDENTIF_EA", type="string", length=10, nullable=true)
     */
    protected $tIdentifEa;

    /**
     * @var string
     *
     * @ORM\Column(name="T_IDENTIF_GA", type="string", length=30, nullable=true)
     */
    protected $tIdentifGa;

    /**
     * @var integer
     *
     * @ORM\Column(name="T_IDENTIF_HA", type="integer", nullable=false, options={"default":0})
     */
    protected $tIdentifHa = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="T_IDENTIF_KA", type="string", length=20, nullable=true)
     */
    protected $tIdentifKa;

    /**
     * @var integer
     *
     * @ORM\Column(name="N3519_DH", type="integer", nullable=false, options={"default":0})
     */
    protected $n3519Dh = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="N3519_DN", type="integer", nullable=false, options={"default":0})
     */
    protected $n3519Dn = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="teledeclare", type="smallint", nullable=false, options={"default":0})
     */
    protected $teledeclare = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="soldee", type="boolean", nullable=false, options={"default":0})
     */
    protected $soldee = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text", length=65535, nullable=true)
     */
    protected $commentaire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    protected $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    protected $updatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="date", nullable=true)
     */
    protected $deletedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_declaration", type="date", nullable=false)
     */
    protected $dateDeclaration;

    /**
     * @var string
     *
     * @ORM\Column(name="reference_obligation_fiscale", type="string", length=20, nullable=true)
     */
    protected $referenceObligationFiscale;

    /**
     * @var integer
     *
     * @ORM\Column(name="mois", type="integer", nullable=false)
     */
    protected $mois;

    /**
     * @var string
     *
     * @ORM\Column(name="periode", type="string", length=20, nullable=false)
     */
    protected $periode;

    /**
     * @var string
     *
     * @ORM\Column(name="erreurs", type="text", nullable=true, options={"default":""})
     */
    protected $erreurs;

    /**
     * @var integer
     *
     * @ORM\Column(name="snc_id", type="integer", nullable=false)
     */
    protected $societePortage;

    /**
     * @var integer
     *
     * @ORM\Column(name="direction_impot", type="integer", nullable=false)
     */
    protected $directionImpot;

    /**
     * @var integer
     *
     * @ORM\Column(name="infos_ec_id", type="integer", nullable=false)
     */
    protected $infosEc;

    /**
     * @var DeclarableTVA
     *
     * @ORM\OneToMany(targetEntity="DeclarableTVA", mappedBy="tdDeclarationTva")
     */
    protected $asponeDeclarationTva;

    /**e
     * Constructor
     */
    public function __construct()
    {
        $this->remboursementsTva = new ArrayCollection();
        $this->documents = new ArrayCollection();
        $this->virements = new ArrayCollection();
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
     * Set annee
     *
     * @param integer $annee
     *
     * @return TdDeclarationTva
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return integer
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set trimestre
     *
     * @param integer $trimestre
     *
     * @return TdDeclarationTva
     */
    public function setTrimestre($trimestre)
    {
        $this->trimestre = $trimestre;

        return $this;
    }

    /**
     * Get trimestre
     *
     * @return integer
     */
    public function getTrimestre()
    {
        return $this->trimestre;
    }

    /**
     * Set n331001Ca
     *
     * @param integer $n331001Ca
     *
     * @return TdDeclarationTva
     */
    public function setN331001Ca($n331001Ca)
    {
        $this->n331001Ca = $n331001Ca;

        return $this;
    }

    /**
     * Get n331001Ca
     *
     * @return integer
     */
    public function getN331001Ca()
    {
        return $this->n331001Ca;
    }

    /**
     * Set n33103bCg
     *
     * @param integer $n33103bCg
     *
     * @return TdDeclarationTva
     */
    public function setN33103bCg($n33103bCg)
    {
        $this->n33103bCg = $n33103bCg;

        return $this;
    }

    /**
     * Get n33103bCg
     *
     * @return integer
     */
    public function getN33103bCg()
    {
        return $this->n33103bCg;
    }

    /**
     * Set n331010Gm
     *
     * @param integer $n331010Gm
     *
     * @return TdDeclarationTva
     */
    public function setN331010Gm($n331010Gm)
    {
        $this->n331010Gm = $n331010Gm;

        return $this;
    }

    /**
     * Get n331010Gm
     *
     * @return integer
     */
    public function getN331010Gm()
    {
        return $this->n331010Gm;
    }

    /**
     * Set n331019Ha
     *
     * @param integer $n331019Ha
     *
     * @return TdDeclarationTva
     */
    public function setN331019Ha($n331019Ha)
    {
        $this->n331019Ha = $n331019Ha;

        return $this;
    }

    /**
     * Get n331019Ha
     *
     * @return integer
     */
    public function getN331019Ha()
    {
        return $this->n331019Ha;
    }

    /**
     * Set n331020Hb
     *
     * @param integer $n331020Hb
     *
     * @return TdDeclarationTva
     */
    public function setN331020Hb($n331020Hb)
    {
        $this->n331020Hb = $n331020Hb;

        return $this;
    }

    /**
     * Get n331020Hb
     *
     * @return integer
     */
    public function getN331020Hb()
    {
        return $this->n331020Hb;
    }

    /**
     * Set n331021Hc
     *
     * @param integer $n331021Hc
     *
     * @return TdDeclarationTva
     */
    public function setN331021Hc($n331021Hc)
    {
        $this->n331021Hc = $n331021Hc;

        return $this;
    }

    /**
     * Get n331021Hc
     *
     * @return integer
     */
    public function getN331021Hc()
    {
        return $this->n331021Hc;
    }

    /**
     * Set n331022Hd
     *
     * @param integer $n331022Hd
     *
     * @return TdDeclarationTva
     */
    public function setN331022Hd($n331022Hd)
    {
        $this->n331022Hd = $n331022Hd;

        return $this;
    }

    /**
     * Get n331022Hd
     *
     * @return integer
     */
    public function getN331022Hd()
    {
        return $this->n331022Hd;
    }

    /**
     * Set n331025Ja
     *
     * @param integer $n331025Ja
     *
     * @return TdDeclarationTva
     */
    public function setN331025Ja($n331025Ja)
    {
        $this->n331025Ja = $n331025Ja;

        return $this;
    }

    /**
     * Get n331025Ja
     *
     * @return integer
     */
    public function getN331025Ja()
    {
        return $this->n331025Ja;
    }

    /**
     * Set n331026Jb
     *
     * @param integer $n331026Jb
     *
     * @return TdDeclarationTva
     */
    public function setN331026Jb($n331026Jb)
    {
        $this->n331026Jb = $n331026Jb;

        return $this;
    }

    /**
     * Get n331026Jb
     *
     * @return integer
     */
    public function getN331026Jb()
    {
        return $this->n331026Jb;
    }

    /**
     * Set n331027Jc
     *
     * @param integer $n331027Jc
     *
     * @return TdDeclarationTva
     */
    public function setN331027Jc($n331027Jc)
    {
        $this->n331027Jc = $n331027Jc;

        return $this;
    }

    /**
     * Get n331027Jc
     *
     * @return integer
     */
    public function getN331027Jc()
    {
        return $this->n331027Jc;
    }

    /**
     * Set n331028Ka
     *
     * @param integer $n331028Ka
     *
     * @return TdDeclarationTva
     */
    public function setN331028Ka($n331028Ka)
    {
        $this->n331028Ka = $n331028Ka;

        return $this;
    }

    /**
     * Get n331028Ka
     *
     * @return integer
     */
    public function getN331028Ka()
    {
        return $this->n331028Ka;
    }

    /**
     * Set n3310NeantKf
     *
     * @param boolean $n3310NeantKf
     *
     * @return TdDeclarationTva
     */
    public function setN3310NeantKf($n3310NeantKf)
    {
        $this->n3310NeantKf = $n3310NeantKf;

        return $this;
    }

    /**
     * Get n3310NeantKf
     *
     * @return boolean
     */
    public function getN3310NeantKf()
    {
        return $this->n3310NeantKf;
    }

    /**
     * Set tIdentifCa
     *
     * @param string $tIdentifCa
     *
     * @return TdDeclarationTva
     */
    public function setTIdentifCa($tIdentifCa)
    {
        $this->tIdentifCa = $tIdentifCa;

        return $this;
    }

    /**
     * Get tIdentifCa
     *
     * @return string
     */
    public function getTIdentifCa()
    {
        return $this->tIdentifCa;
    }

    /**
     * Set tIdentifCb
     *
     * @param string $tIdentifCb
     *
     * @return TdDeclarationTva
     */
    public function setTIdentifCb($tIdentifCb)
    {
        $this->tIdentifCb = $tIdentifCb;

        return $this;
    }

    /**
     * Get tIdentifCb
     *
     * @return string
     */
    public function getTIdentifCb()
    {
        return $this->tIdentifCb;
    }

    /**
     * Set tIdentifEa
     *
     * @param string $tIdentifEa
     *
     * @return TdDeclarationTva
     */
    public function setTIdentifEa($tIdentifEa)
    {
        $this->tIdentifEa = $tIdentifEa;

        return $this;
    }

    /**
     * Get tIdentifEa
     *
     * @return string
     */
    public function getTIdentifEa()
    {
        return $this->tIdentifEa;
    }

    /**
     * Set tIdentifGa
     *
     * @param string $tIdentifGa
     *
     * @return TdDeclarationTva
     */
    public function setTIdentifGa($tIdentifGa)
    {
        $this->tIdentifGa = $tIdentifGa;

        return $this;
    }

    /**
     * Get tIdentifGa
     *
     * @return string
     */
    public function getTIdentifGa()
    {
        return $this->tIdentifGa;
    }

    /**
     * Set tIdentifHa
     *
     * @param integer $tIdentifHa
     *
     * @return TdDeclarationTva
     */
    public function setTIdentifHa($tIdentifHa)
    {
        $this->tIdentifHa = $tIdentifHa;

        return $this;
    }

    /**
     * Get tIdentifHa
     *
     * @return integer
     */
    public function getTIdentifHa()
    {
        return $this->tIdentifHa > 0 ? $this->tIdentifHa : null;
    }

    /**
     * Set tIdentifKa
     *
     * @param string $tIdentifKa
     *
     * @return TdDeclarationTva
     */
    public function setTIdentifKa($tIdentifKa)
    {
        $this->tIdentifKa = $tIdentifKa;

        return $this;
    }

    /**
     * Get tIdentifKa
     *
     * @return string
     */
    public function getTIdentifKa()
    {
        return !empty($this->tIdentifKa) && !is_null($this->getTIdentifHa()) ? $this->tIdentifKa : null;
    }

    /**
     * Set n3519Dh
     *
     * @param integer $n3519Dh
     *
     * @return TdDeclarationTva
     */
    public function setN3519Dh($n3519Dh)
    {
        $this->n3519Dh = $n3519Dh;

        return $this;
    }

    /**
     * Get n3519Dh
     *
     * @return integer
     */
    public function getN3519Dh()
    {
        return $this->n3519Dh;
    }

    /**
     * Set n3519Dn
     *
     * @param integer $n3519Dn
     *
     * @return TdDeclarationTva
     */
    public function setN3519Dn($n3519Dn)
    {
        $this->n3519Dn = $n3519Dn;

        return $this;
    }

    /**
     * Get n3519Dn
     *
     * @return integer
     */
    public function getN3519Dn()
    {
        return $this->n3519Dn;
    }

    /**
     * Set teledeclare
     *
     * @param integer $teledeclare
     *
     * @return TdDeclarationTva
     */
    public function setTeledeclare($teledeclare)
    {
        $this->teledeclare = $teledeclare;

        return $this;
    }

    /**
     * Get teledeclare
     *
     * @return integer
     */
    public function getTeledeclare()
    {
        return $this->teledeclare;
    }

    /**
     * Set soldee
     *
     * @param boolean $soldee
     *
     * @return TdDeclarationTva
     */
    public function setSoldee($soldee)
    {
        $this->soldee = $soldee;

        return $this;
    }

    /**
     * Get soldee
     *
     * @return boolean
     */
    public function getSoldee()
    {
        return $this->soldee;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return TdDeclarationTva
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return TdDeclarationTva
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return TdDeclarationTva
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }


    /**
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     *
     * @return TdDeclarationTva
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    /**
     * Get deletedAt
     *
     * @return \DateTime
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    /**
     * Set dateDeclaration
     *
     * @param \DateTime $dateDeclaration
     *
     * @return TdDeclarationTva
     */
    public function setDateDeclaration($dateDeclaration)
    {
        $this->dateDeclaration = $dateDeclaration;

        return $this;
    }

    /**
     * Get dateDeclaration
     *
     * @return \DateTime
     */
    public function getDateDeclaration()
    {
        return $this->dateDeclaration;
    }

    /**
     * Set referenceObligationFiscale
     *
     * @param string $referenceObligationFiscale
     *
     * @return TdDeclarationTva
     */
    public function setReferenceObligationFiscale($referenceObligationFiscale)
    {
        $this->referenceObligationFiscale = $referenceObligationFiscale;

        return $this;
    }

    /**
     * Get referenceObligationFiscale
     *
     * @return string
     */
    public function getReferenceObligationFiscale()
    {
        return $this->referenceObligationFiscale;
    }

    /**
     * Set societePortage
     *
     * @return TdDeclarationTva
     */
    public function setSocietePortage($societePortage = null)
    {
        $this->societePortage = $societePortage;

        return $this;
    }

    /**
     * Get societePortage
     *
     */
    public function getSocietePortage()
    {
        return $this->societePortage;
    }

    /**
     * Set directionImpot
     *
     * @return TdDeclarationTva
     */
    public function setDirectionImpot($directionImpot = null)
    {
        $this->directionImpot = $directionImpot;

        return $this;
    }

    /**
     * Get directionImpot
     *
     */
    public function getDirectionImpot()
    {
        return $this->directionImpot;
    }

    /**
     * Set infosEc
     *
     *
     * @return TdDeclarationTva
     */
    public function setInfosEc($infosEc = null)
    {
        $this->infosEc = $infosEc;

        return $this;
    }

    /**
     * Get infosEc
     *
     */
    public function getInfosEc()
    {
        return $this->infosEc;
    }

    /**
     * Get remboursementsTva
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRemboursementsTva()
    {
        return $this->remboursementsTva;
    }

    /**
     * Set mois
     *
     * @param integer $mois
     *
     * @return TdDeclarationTva
     */
    public function setMois($mois)
    {
        $this->mois = $mois;

        return $this;
    }

    /**
     * Get mois
     *
     * @return integer
     */
    public function getMois()
    {
        return $this->mois;
    }

    /**
     * Set periode
     *
     * @param string $periode
     *
     * @return TdDeclarationTva
     */
    public function setPeriode($periode)
    {
        $this->periode = $periode;

        return $this;
    }

    /**
     * Get periode
     *
     * @return string
     */
    public function getPeriode()
    {
        return $this->periode;
    }

    /**
     * Get documents
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * @return DateTime
     */
    public function getDateLimiteDeclaration()
    {
        if ($this->getPeriode() == 'trimestrielle') {
            if ($this->getMois() == 3) {
                return new \DateTime($this->getAnnee() . '-04-21');
            } elseif ($this->getMois() == 6) {
                return new \DateTime($this->getAnnee() . '-07-21');
            } elseif ($this->getMois() == 9) {
                return new \DateTime($this->getAnnee() . '-10-21');
            } else {
                return new \DateTime(($this->getAnnee() + 1) . '-01-21');
            }
        } else {
            return new \DateTime($this->getAnnee() . '-' . $this->getMois() . '-' . \cal_days_in_month(CAL_GREGORIAN, $this->getMois(), $this->getAnnee()));
        }
    }

    /**
     * @return string
     */
    public function getPeriodeToString()
    {
        if ($this->getPeriode() == 'trimestrielle') {
            if ($this->getMois() == 3) {
                $periode = "1er trimestre " . $this->getAnnee();
            } elseif ($this->getMois() == 6) {
                $periode = "2eme trimestre " . $this->getAnnee();
            } elseif ($this->getMois() == 9) {
                $periode = "3eme trimestre " . $this->getAnnee();
            } else {
                $periode = "4eme trimestre " . $this->getAnnee();
            }
        } else {
            $mois = array('', 'janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
            $periode = $mois[$this->getMois()] . ' ' . $this->getAnnee();
        }

        return $periode;
    }

    /**
     * Set erreurs
     *
     * @param string $erreurs
     *
     * @return TdDeclarationTva
     */
    public function setErreurs($erreurs)
    {
        $this->erreurs = $erreurs;

        return $this;
    }

    /**
     * Get erreurs
     *
     * @return string
     */
    public function getErreurs()
    {
        return $this->erreurs;
    }

    /**
     * @return mixed
     */
    public function getAsponeDeclarationTva()
    {
        return $this->asponeDeclarationTva;
    }

    /**
     * @param mixed $asponeDeclarationTva
     */
    public function setAsponeDeclarationTva($asponeDeclarationTva)
    {
        $this->asponeDeclarationTva = $asponeDeclarationTva;
    }


    /**
     * Add DeclarableTVA
     *
     * @param DeclarableTVA $asponeDeclarationTva
     *
     * @return TdDeclarationTva
     */
    public function addAsponeDeclarationTva(DeclarableTVA $asponeDeclarationTva)
    {
        $this->asponeDeclarationTva[] = $asponeDeclarationTva;

        return $this;
    }

    /**
     * Remove DeclarableTVA
     *
     * @param DeclarableTVA $asponeDeclarationTva
     */
    public function removeAsponeDeclarationTva(DeclarableTVA $asponeDeclarationTva)
    {
        $this->asponeDeclarationTva->removeElement($asponeDeclarationTva);
    }

}
