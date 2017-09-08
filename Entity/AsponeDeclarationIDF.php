<?php

namespace InterInvest\Aspone2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AsponeDeclarationIDF
 *
 * @ORM\Table(name="aspone_declaration")
 * @ORM\MappedSuperclass()
 * @ORM\Entity()
 */
class AsponeDeclarationIDF extends AsponeDeclaration
{


    /**
     * @return string
     */
    public function getType()
    {
        return 'IDF';
    }

    /**
     * @param string $type
     */
    public function setType()
    {
        $this->type = 'IDF';
    }

    public function getGroupe()
    {
        return "TDFC";
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
     * @return AsponeDeclarationIDF
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
     * Set etat
     *
     * @param integer $etat
     *
     * @return AsponeDeclarationIDF
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
     * @return AsponeDeclarationIDF
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
     * @return AsponeDeclarationIDF
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
     * @return AsponeDeclarationIDF
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
     * @return AsponeDeclarationIDF
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
     * @return AsponeDeclarationIDF
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
     * Set deposit
     *
     * @param \InterInvest\Aspone2Bundle\Entity\AsponeDeposit $deposit
     *
     * @return AsponeDeclarationIDF
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
     * Add historique
     *
     * @param \InterInvest\Aspone2Bundle\Entity\AsponeDeclarationHistorique $historique
     *
     * @return AsponeDeclarationIDF
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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->historiques = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
