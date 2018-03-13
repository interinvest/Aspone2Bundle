<?php

namespace InterInvest\Aspone2Bundle\ClassXml\Tdfc;



use JMS\Serializer\Annotation as Serializer;

/**
 * Class representing ZoneType
 *
 *
 * XSD Type: Zone
 */
class ZoneType
{

    /**
     * @property string $id
     * @Serializer\XmlAttribute()
     */
    private $id = null;

    /**
     * @property string $valeur
     * @Serializer\SerializedName("Valeur")
     */
    private $valeur = null;

    /**
     * @property string $identifiant
     * @Serializer\SerializedName("Identifiant")
     */
    private $identifiant = null;

    /**
     * @property string $designation
     * @Serializer\SerializedName("Designation")
     */
    private $designation = null;

    /**
     * @property string $designationSuite1
     * @Serializer\SerializedName("DesignationSuite1")
     */
    private $designationSuite1 = null;

    /**
     * @property string $designationSuite2
     * @Serializer\SerializedName("DesignationSuite2")
     */
    private $designationSuite2 = null;

    /**
     * @property string $adresseNumero
     * @Serializer\SerializedName("AdresseNumero")
     */
    private $adresseNumero = null;

    /**
     * @property string $adresseT
     * @Serializer\SerializedName("AdresseType")
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
     * @Serializer\SerializedName("AdresseHameau")
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
     * @property string $telephone
     * @Serializer\SerializedName("Telephone")
     */
    private $telephone = null;

    /**
     * @property string $email
     * @Serializer\SerializedName("Email")
     */
    private $email = null;

    /**
     * @property string $texteLibre1
     * @Serializer\SerializedName("TexteLibre1")
     */
    private $texteLibre1 = null;

    /**
     * @property string $texteLibre2
     * @Serializer\SerializedName("TexteLibre2")
     */
    private $texteLibre2 = null;

    /**
     * @property string $texteLibre3
     * @Serializer\SerializedName("TexteLibre3")
     */
    private $texteLibre3 = null;

    /**
     * @property string $texteLibre4
     * @Serializer\SerializedName("TexteLibre4")
     */
    private $texteLibre4 = null;

    /**
     * @property string $texteLibre5
     * @Serializer\SerializedName("TexteLibre5")
     */
    private $texteLibre5 = null;

    /**
     * @property string $monnaieCible
     * @Serializer\SerializedName("MonnaieCible")
     */
    private $monnaieCible = null;

    /**
     * @property string $monnaieSource
     * @Serializer\SerializedName("MonnaieSource")
     */
    private $monnaieSource = null;

    /**
     * @property string $tauxChange
     * @Serializer\SerializedName("TauxChange")
     */
    private $tauxChange = null;

    /**
     * @property \InterInvest\Aspone2Bundle\ClassXml\Tdfc\OccurrenceType[] $occurrence
     * @Serializer\XmlList(inline = true, entry = "Occurrence")
     */
    private $occurrence = array(
        
    );

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as valeur
     *
     * @return string
     */
    public function getValeur()
    {
        return $this->valeur;
    }

    /**
     * Sets a new valeur
     *
     * @param string $valeur
     * @return self
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;
        return $this;
    }

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
     * Gets as designationSuite2
     *
     * @return string
     */
    public function getDesignationSuite2()
    {
        return $this->designationSuite2;
    }

    /**
     * Sets a new designationSuite2
     *
     * @param string $designationSuite2
     * @return self
     */
    public function setDesignationSuite2($designationSuite2)
    {
        $this->designationSuite2 = $designationSuite2;
        return $this;
    }

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

    /**
     * Gets as telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Sets a new telephone
     *
     * @param string $telephone
     * @return self
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * Gets as email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Gets as texteLibre1
     *
     * @return string
     */
    public function getTexteLibre1()
    {
        return $this->texteLibre1;
    }

    /**
     * Sets a new texteLibre1
     *
     * @param string $texteLibre1
     * @return self
     */
    public function setTexteLibre1($texteLibre1)
    {
        $this->texteLibre1 = $texteLibre1;
        return $this;
    }

    /**
     * Gets as texteLibre2
     *
     * @return string
     */
    public function getTexteLibre2()
    {
        return $this->texteLibre2;
    }

    /**
     * Sets a new texteLibre2
     *
     * @param string $texteLibre2
     * @return self
     */
    public function setTexteLibre2($texteLibre2)
    {
        $this->texteLibre2 = $texteLibre2;
        return $this;
    }

    /**
     * Gets as texteLibre3
     *
     * @return string
     */
    public function getTexteLibre3()
    {
        return $this->texteLibre3;
    }

    /**
     * Sets a new texteLibre3
     *
     * @param string $texteLibre3
     * @return self
     */
    public function setTexteLibre3($texteLibre3)
    {
        $this->texteLibre3 = $texteLibre3;
        return $this;
    }

    /**
     * Gets as texteLibre4
     *
     * @return string
     */
    public function getTexteLibre4()
    {
        return $this->texteLibre4;
    }

    /**
     * Sets a new texteLibre4
     *
     * @param string $texteLibre4
     * @return self
     */
    public function setTexteLibre4($texteLibre4)
    {
        $this->texteLibre4 = $texteLibre4;
        return $this;
    }

    /**
     * Gets as texteLibre5
     *
     * @return string
     */
    public function getTexteLibre5()
    {
        return $this->texteLibre5;
    }

    /**
     * Sets a new texteLibre5
     *
     * @param string $texteLibre5
     * @return self
     */
    public function setTexteLibre5($texteLibre5)
    {
        $this->texteLibre5 = $texteLibre5;
        return $this;
    }

    /**
     * Gets as monnaieCible
     *
     * @return string
     */
    public function getMonnaieCible()
    {
        return $this->monnaieCible;
    }

    /**
     * Sets a new monnaieCible
     *
     * @param string $monnaieCible
     * @return self
     */
    public function setMonnaieCible($monnaieCible)
    {
        $this->monnaieCible = $monnaieCible;
        return $this;
    }

    /**
     * Gets as monnaieSource
     *
     * @return string
     */
    public function getMonnaieSource()
    {
        return $this->monnaieSource;
    }

    /**
     * Sets a new monnaieSource
     *
     * @param string $monnaieSource
     * @return self
     */
    public function setMonnaieSource($monnaieSource)
    {
        $this->monnaieSource = $monnaieSource;
        return $this;
    }

    /**
     * Gets as tauxChange
     *
     * @return string
     */
    public function getTauxChange()
    {
        return $this->tauxChange;
    }

    /**
     * Sets a new tauxChange
     *
     * @param string $tauxChange
     * @return self
     */
    public function setTauxChange($tauxChange)
    {
        $this->tauxChange = $tauxChange;
        return $this;
    }

    /**
     * Adds as occurrence
     *
     * @return self
     * @param \InterInvest\Aspone2Bundle\ClassXml\Tdfc\OccurrenceType $occurrence
     */
    public function addToOccurrence(\InterInvest\Aspone2Bundle\ClassXml\Tdfc\OccurrenceType $occurrence)
    {
        $this->occurrence[] = $occurrence;
        return $this;
    }

    /**
     * isset occurrence
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOccurrence($index)
    {
        return isset($this->occurrence[$index]);
    }

    /**
     * unset occurrence
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOccurrence($index)
    {
        unset($this->occurrence[$index]);
    }

    /**
     * Gets as occurrence
     *
     * @return \InterInvest\Aspone2Bundle\ClassXml\Tdfc\OccurrenceType[]
     */
    public function getOccurrence()
    {
        return $this->occurrence;
    }

    /**
     * Sets a new occurrence
     *
     * @param \InterInvest\Aspone2Bundle\ClassXml\Tdfc\OccurrenceType[] $occurrence
     * @return self
     */
    public function setOccurrence(array $occurrence)
    {
        $this->occurrence = $occurrence;
        return $this;
    }


}

