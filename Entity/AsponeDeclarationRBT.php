<?php

namespace InterInvest\Aspone2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AsponeDeclarationRBT
 *
 * @ORM\Table(name="aspone_declaration")
 * @ORM\MappedSuperclass()
 * @ORM\Entity()
 */
class AsponeDeclarationRBT extends AsponeDeclaration
{



    /**
     * @return string
     */
    public function getType()
    {
        return 'RBT';
    }

    /**
     * @param string $type
     */
    public function setType()
    {
        $this->type = 'RBT';
    }

    public function getGroupe()
    {
        return "TVA";
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
     * @return AsponeDeclarationRBT
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
     * @return AsponeDeclarationRBT
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
     * @return AsponeDeclarationRBT
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
     * @return AsponeDeclarationRBT
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
     * @return AsponeDeclarationRBT
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
     * @return AsponeDeclarationRBT
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
     * @return AsponeDeclarationRBT
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
     * @return AsponeDeclarationRBT
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
     * @return AsponeDeclarationRBT
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
