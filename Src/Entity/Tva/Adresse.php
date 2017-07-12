<?php

namespace InterInvest\Bundle\Aspone\src\Entity\Tva;

/**
 * Class representing Adresse
 */
class Adresse extends AdresseType
{

    /**
     * @property \InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseNumero $adresseNumero
     */
    private $adresseNumero = null;

    /**
     * @property \InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseType $adresseType
     */
    private $adresseType = null;

    /**
     * @property \InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseRepetabilite $adresseRepetabilite
     */
    private $adresseRepetabilite = null;

    /**
     * @property \InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseVoie $adresseVoie
     */
    private $adresseVoie = null;

    /**
     * @property \InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseComplement $adresseComplement
     */
    private $adresseComplement = null;

    /**
     * @property \InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseHameau $adresseHameau
     */
    private $adresseHameau = null;

    /**
     * @property \InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseCodePostal $adresseCodePostal
     */
    private $adresseCodePostal = null;

    /**
     * @property \InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseVille $adresseVille
     */
    private $adresseVille = null;

    /**
     * @property \InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseCodePays $adresseCodePays
     */
    private $adresseCodePays = null;

    /**
     * @property \InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseEtrangere1 $adresseEtrangere1
     */
    private $adresseEtrangere1 = null;

    /**
     * @property \InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseEtrangere2 $adresseEtrangere2
     */
    private $adresseEtrangere2 = null;

    /**
     * @property \InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseEtrangere3 $adresseEtrangere3
     */
    private $adresseEtrangere3 = null;

    /**
     * @property \InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseEtrangere4 $adresseEtrangere4
     */
    private $adresseEtrangere4 = null;

    /**
     * @property \InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseCodeDivisionTerritoriale $adresseCodeDivisionTerritoriale
     */
    private $adresseCodeDivisionTerritoriale = null;

    /**
     * @property \InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseDivisionTerritoriale $adresseDivisionTerritoriale
     */
    private $adresseDivisionTerritoriale = null;


    /**
     * Gets as adresseNumero
     *
     * @return \InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseNumero
     */
    public function getAdresseNumero()
    {
        return $this->adresseNumero;
    }

    /**
     * Sets a new adresseNumero
     *
     * @param \InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseNumero $adresseNumero
     * @return self
     */
    public function setAdresseNumero(\InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseNumero $adresseNumero)
    {
        $this->adresseNumero = $adresseNumero;
        return $this;
    }


    /**
     * Gets as adresseType
     *
     * @return \InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseType
     */
    public function getAdresseType()
    {
        return $this->adresseType;
    }

    /**
     * Sets a new adresseType
     *
     * @param \InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseNumero $adresseType
     * @return self
     */
    public function setAdresseType(\InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseNumero $adresseType)
    {
        $this->adresseType = $adresseType;
        return $this;
    }


    /**
     * Gets as adresseRepetabilite
     *
     * @return \InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseRepetabilite
     */
    public function getAdresseRepetabilite()
    {
        return $this->adresseRepetabilite;
    }

    /**
     * Sets a new adresseRepetabilite
     *
     * @param \InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseRepetabilite $adresseRepetabilite
     * @return self
     */
    public function setAdresseRepetabilite(\InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseRepetabilite $adresseRepetabilite)
    {
        $this->adresseRepetabilite = $adresseRepetabilite;
        return $this;
    }


    /**
     * Gets as adresseVoie
     *
     * @return \InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseVoie
     */
    public function getAdresseVoie()
    {
        return $this->adresseVoie;
    }

    /**
     * Sets a new adresseVoie
     *
     * @param \InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseRepetabilite $adresseVoie
     * @return self
     */
    public function setAdresseVoie(\InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseRepetabilite $adresseVoie)
    {
        $this->adresseVoie = $adresseVoie;
        return $this;
    }


    /**
     * Gets as adresseComplement
     *
     * @return \InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseComplement
     */
    public function getAdresseComplement()
    {
        return $this->adresseComplement;
    }

    /**
     * Sets a new adresseComplement
     *
     * @param \InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseComplement $adresseComplement
     * @return self
     */
    public function setAdresseComplement(\InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseComplement $adresseComplement)
    {
        $this->adresseComplement = $adresseComplement;
        return $this;
    }


    /**
     * Gets as adresseHameau
     *
     * @return \InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseHameau
     */
    public function getAdresseHameau()
    {
        return $this->adresseHameau;
    }

    /**
     * Sets a new adresseHameau
     *
     * @param \InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseHameau $adresseHameau
     * @return self
     */
    public function setAdresseHameau(\InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseHameau $adresseHameau)
    {
        $this->adresseHameau = $adresseHameau;
        return $this;
    }


    /**
     * Gets as adresseCodePostal
     *
     * @return \InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseCodePostal
     */
    public function getAdresseCodePostal()
    {
        return $this->adresseCodePostal;
    }

    /**
     * Sets a new adresseCodePostal
     *
     * @param \InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseCodePostal $adresseCodePostal
     * @return self
     */
    public function setAdresseCodePostal(\InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseCodePostal $adresseCodePostal)
    {
        $this->adresseCodePostal = $adresseCodePostal;
        return $this;
    }

    /**
     * Gets as adresseVille
     *
     * @return \InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseVille
     */
    public function getAdresseVille()
    {
        return $this->adresseVille;
    }

    /**
     * Sets a new adresseVille
     *
     * @param \InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseVille $adresseVille
     * @return self
     */
    public function setAdresseVille(\InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseVille $adresseVille)
    {
        $this->adresseVille = $adresseVille;
        return $this;
    }


    /**
     * Gets as adresseCodePays
     *
     * @return \InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseCodePays
     */
    public function getAdresseCodePays()
    {
        return $this->adresseCodePays;
    }

    /**
     * Sets a new adresseCodePays
     *
     * @param \InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseCodePays $adresseCodePays
     * @return self
     */
    public function setAdresseCodePays(\InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseCodePays $adresseCodePays)
    {
        $this->adresseCodePays = $adresseCodePays;
        return $this;
    }


    /**
     * Gets as adresseEtrangere1
     *
     * @return \InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseEtrangere1
     */
    public function getAdresseEtrangere1()
    {
        return $this->adresseEtrangere1;
    }

    /**
     * Sets a new adresseEtrangere1
     *
     * @param \InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseEtrangere1 $adresseEtrangere1
     * @return self
     */
    public function setAdresseEtrangere1(\InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseEtrangere1 $adresseEtrangere1)
    {
        $this->adresseEtrangere1 = $adresseEtrangere1;
        return $this;
    }


    /**
     * Gets as adresseEtrangere2
     *
     * @return \InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseEtrangere2
     */
    public function getAdresseEtrangere2()
    {
        return $this->adresseEtrangere2;
    }

    /**
     * Sets a new adresseEtrangere2
     *
     * @param \InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseEtrangere2 $adresseEtrangere2
     * @return self
     */
    public function setAdresseEtrangere2(\InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseEtrangere2 $adresseEtrangere2)
    {
        $this->adresseEtrangere2 = $adresseEtrangere2;
        return $this;
    }


    /**
     * Gets as adresseEtrangere3
     *
     * @return \InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseEtrangere3
     */
    public function getAdresseEtrangere3()
    {
        return $this->adresseEtrangere3;
    }

    /**
     * Sets a new adresseEtrangere3
     *
     * @param \InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseEtrangere3 $adresseEtrangere3
     * @return self
     */
    public function setAdresseEtrangere3(\InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseEtrangere3 $adresseEtrangere3)
    {
        $this->adresseEtrangere3 = $adresseEtrangere3;
        return $this;
    }


    /**
     * Gets as adresseEtrangere4
     *
     * @return \InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseEtrangere4
     */
    public function getAdresseEtrangere4()
    {
        return $this->adresseEtrangere4;
    }

    /**
     * Sets a new adresseEtrangere4
     *
     * @param \InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseEtrangere4 $adresseEtrangere4
     * @return self
     */
    public function setAdresseEtrangere4(\InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseEtrangere4 $adresseEtrangere4)
    {
        $this->adresseEtrangere4 = $adresseEtrangere4;
        return $this;
    }


    /**
     * Gets as adresseCodeDivisionTerritoriale
     *
     * @return \InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseCodeDivisionTerritoriale
     */
    public function getAdresseCodeDivisionTerritoriale()
    {
        return $this->adresseCodeDivisionTerritoriale;
    }

    /**
     * Sets a new adresseCodeDivisionTerritoriale
     *
     * @param \InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseCodeDivisionTerritoriale $adresseCodeDivisionTerritoriale
     * @return self
     */
    public function setAdresseCodeDivisionTerritoriale(\InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseCodeDivisionTerritoriale $adresseCodeDivisionTerritoriale)
    {
        $this->adresseCodeDivisionTerritoriale = $adresseCodeDivisionTerritoriale;
        return $this;
    }


    /**
     * Gets as adresseDivisionTerritoriale
     *
     * @return \InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseDivisionTerritoriale
     */
    public function getAdresseDivisionTerritoriale()
    {
        return $this->adresseDivisionTerritoriale;
    }

    /**
     * Sets a new adresseDivisionTerritoriale
     *
     * @param \InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseDivisionTerritoriale $adresseDivisionTerritoriale
     * @return self
     */
    public function setAdresseDivisionTerritoriale(\InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseDivisionTerritoriale $adresseDivisionTerritoriale)
    {
        $this->adresseDivisionTerritoriale = $adresseDivisionTerritoriale;
        return $this;
    }
}

