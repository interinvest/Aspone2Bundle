<?php

namespace InterInvest\Aspone2Bundle\Entity\Tdfc;

/**
 * Class representing RedevableType
 *
 *
 * XSD Type: Redevable
 */
class RedevableType
{

    /**
     * @property string $identifiant
     */
    private $identifiant = null;

    /**
     * @property string $designation
     */
    private $designation = null;

    /**
     * @property string $designationSuite1
     */
    private $designationSuite1 = null;

    /**
     * @property \InterInvest\Aspone2Bundle\Entity\Tdfc\Adresse $adresse
     */
    private $adresse = null;

    /**
     * @property string $referenceDossier
     */
    private $referenceDossier = null;

    /**
     * @property string $rof
     */
    private $rof = null;

    /**
     * Gets as identifiant
     *
     * @return string
     */
    public function getIdentifiant()
    {
        return $this->identifiant;
    }

    /**
     * Sets a new identifiant
     *
     * @param string $identifiant
     * @return self
     */
    public function setIdentifiant($identifiant)
    {
        $this->identifiant = $identifiant;
        return $this;
    }

    /**
     * Gets as designation
     *
     * @return string
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Sets a new designation
     *
     * @param string $designation
     * @return self
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;
        return $this;
    }

    /**
     * Gets as designationSuite1
     *
     * @return string
     */
    public function getDesignationSuite1()
    {
        return $this->designationSuite1;
    }

    /**
     * Sets a new designationSuite1
     *
     * @param string $designationSuite1
     * @return self
     */
    public function setDesignationSuite1($designationSuite1)
    {
        $this->designationSuite1 = $designationSuite1;
        return $this;
    }

    /**
     * Gets as adresse
     *
     * @return \InterInvest\Aspone2Bundle\Entity\Tdfc\Adresse
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Sets a new adresse
     *
     * @param \InterInvest\Aspone2Bundle\Entity\Tdfc\Adresse $adresse
     * @return self
     */
    public function setAdresse(\InterInvest\Aspone2Bundle\Entity\Tdfc\Adresse $adresse)
    {
        $this->adresse = $adresse;
        return $this;
    }

    /**
     * Gets as referenceDossier
     *
     * @return string
     */
    public function getReferenceDossier()
    {
        return $this->referenceDossier;
    }

    /**
     * Sets a new referenceDossier
     *
     * @param string $referenceDossier
     * @return self
     */
    public function setReferenceDossier($referenceDossier)
    {
        $this->referenceDossier = $referenceDossier;
        return $this;
    }

    /**
     * Gets as rof
     *
     * @return string
     */
    public function getRof()
    {
        return $this->rof;
    }

    /**
     * Sets a new rof
     *
     * @param string $rof
     * @return self
     */
    public function setRof($rof)
    {
        $this->rof = $rof;
        return $this;
    }


}

