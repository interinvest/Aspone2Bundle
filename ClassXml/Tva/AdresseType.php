<?php

namespace InterInvest\Aspone2Bundle\ClassXml\Tva;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class representing AdresseType
 *
 *
 * XSD Type: Adresse
 */
class AdresseType
{

    /**
     * @property string $adresseNumero
     * @Serializer\SerializedName("AdresseNumero")
     */
    private $adresseNumero = null;

    /**
     * @property string $adresseT
     * @Serializer\SerializedName("AdresseType")
     *
     */
    private $adresseT = null;

    /**
     * @property string $adresseVoie
     * @Serializer\SerializedName("AdresseVoie")
     */
    private $adresseVoie = null;

    /**
     * @property string $adresseComplement
     * @Serializer\SerializedName("AdresseComplement")
     */
    private $adresseComplement = null;

    /**
     * @property string $adresseHameau
     * @Serializer\SerializedName("AdresseHammeau")
     */
    private $adresseHameau = null;

    /**
     * @property string $adresseCodePostal
     * @Serializer\SerializedName("AdresseCodePostal")
     */
    private $adresseCodePostal = null;

    /**
     * @property string $adresseVille
     * @Serializer\SerializedName("AdresseVille")
     */
    private $adresseVille = null;

    /**
     * @property string $adresseCodePays
     * @Serializer\SerializedName("AdresseCodePays")
     */
    private $adresseCodePays = null;

    /**
     * Gets as adresseNumero
     *
     * @return string
     */
    public function getAdresseNumero()
    {
        return $this->adresseNumero;
    }

    /**
     * Sets a new adresseNumero
     *
     * @param string $adresseNumero
     * @return self
     */
    public function setAdresseNumero($adresseNumero)
    {
        $this->adresseNumero = $adresseNumero;
        return $this;
    }

    /**
     * Gets as adresseT
     *
     * @return string
     */
    public function getAdresseT()
    {
        return $this->adresseT;
    }

    /**
     * Sets a new adresseT
     *
     * @param string $adresseT
     * @return self
     */
    public function setAdresseT($adresseT)
    {
        $this->adresseT = $adresseT;
        return $this;
    }

    /**
     * Gets as adresseVoie
     *
     * @return string
     */
    public function getAdresseVoie()
    {
        return $this->adresseVoie;
    }

    /**
     * Sets a new adresseVoie
     *
     * @param string $adresseVoie
     * @return self
     */
    public function setAdresseVoie($adresseVoie)
    {
        $this->adresseVoie = $adresseVoie;
        return $this;
    }

    /**
     * Gets as adresseComplement
     *
     * @return string
     */
    public function getAdresseComplement()
    {
        return $this->adresseComplement;
    }

    /**
     * Sets a new adresseComplement
     *
     * @param string $adresseComplement
     * @return self
     */
    public function setAdresseComplement($adresseComplement)
    {
        $this->adresseComplement = $adresseComplement;
        return $this;
    }

    /**
     * Gets as adresseHameau
     *
     * @return string
     */
    public function getAdresseHameau()
    {
        return $this->adresseHameau;
    }

    /**
     * Sets a new adresseHameau
     *
     * @param string $adresseHameau
     * @return self
     */
    public function setAdresseHameau($adresseHameau)
    {
        $this->adresseHameau = $adresseHameau;
        return $this;
    }

    /**
     * Gets as adresseCodePostal
     *
     * @return string
     */
    public function getAdresseCodePostal()
    {
        return $this->adresseCodePostal;
    }

    /**
     * Sets a new adresseCodePostal
     *
     * @param string $adresseCodePostal
     * @return self
     */
    public function setAdresseCodePostal($adresseCodePostal)
    {
        $this->adresseCodePostal = $adresseCodePostal;
        return $this;
    }

    /**
     * Gets as adresseVille
     *
     * @return string
     */
    public function getAdresseVille()
    {
        return $this->adresseVille;
    }

    /**
     * Sets a new adresseVille
     *
     * @param string $adresseVille
     * @return self
     */
    public function setAdresseVille($adresseVille)
    {
        $this->adresseVille = $adresseVille;
        return $this;
    }

    /**
     * Gets as adresseCodePays
     *
     * @return string
     */
    public function getAdresseCodePays()
    {
        return $this->adresseCodePays;
    }

    /**
     * Sets a new adresseCodePays
     *
     * @param string $adresseCodePays
     * @return self
     */
    public function setAdresseCodePays($adresseCodePays)
    {
        $this->adresseCodePays = $adresseCodePays;
        return $this;
    }


}

