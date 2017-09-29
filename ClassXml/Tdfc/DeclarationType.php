<?php

namespace InterInvest\Aspone2Bundle\ClassXml\Tdfc;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class representing DeclarationType
 *
 *
 * XSD Type: Declaration
 */
class DeclarationType
{

    /**
     * @property string $type
     * @Serializer\XmlAttribute()
     * @Serializer\SerializedName("Type")
     */
    private $type = null;

    /**
     * @property string $reference
     * @Serializer\XmlAttribute()
     * @Serializer\SerializedName("Reference")
     */
    private $reference = null;

    /**
     * @property \InterInvest\Aspone2Bundle\ClassXml\Tdfc\EmetteurType $emetteur
     * @Serializer\SerializedName("Emetteur")
     */
    private $emetteur = null;

    /**
     * @property \InterInvest\Aspone2Bundle\ClassXml\Tdfc\RedacteurType $redacteur
     * @Serializer\SerializedName("Redacteur")
     */
    private $redacteur = null;

    /**
     * @property \InterInvest\Aspone2Bundle\ClassXml\Tdfc\RedevableType $redevable
     * @Serializer\SerializedName("Redevable")
     */
    private $redevable = null;

    /**
     * @property \InterInvest\Aspone2Bundle\ClassXml\Tdfc\PartenaireEdiType $partenaireEdi
     */
    private $partenaireEdi = null;

    /**
     * @property \InterInvest\Aspone2Bundle\ClassXml\Tdfc\DestinataireType[]
     * $listeDestinataires
     * @Serializer\XmlList(inline = false, entry = "Destinataire")
     * @Serializer\SerializedName("ListeDestinataires")
     */
    private $listeDestinataires = null;

    /**
     * @property \InterInvest\Aspone2Bundle\ClassXml\Tdfc\ListeFormulairesType
     * $listeFormulaires
     * @Serializer\SerializedName("ListeFormulaires")
     */
    private $listeFormulaires = null;

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * @param string $reference
     * @return self
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * Gets as emetteur
     *
     * @return \InterInvest\Aspone2Bundle\ClassXml\Tdfc\EmetteurType
     */
    public function getEmetteur()
    {
        return $this->emetteur;
    }

    /**
     * Sets a new emetteur
     *
     * @param \InterInvest\Aspone2Bundle\ClassXml\Tdfc\EmetteurType $emetteur
     * @return self
     */
    public function setEmetteur(\InterInvest\Aspone2Bundle\ClassXml\Tdfc\EmetteurType $emetteur)
    {
        $this->emetteur = $emetteur;
        return $this;
    }

    /**
     * Gets as redacteur
     *
     * @return \InterInvest\Aspone2Bundle\ClassXml\Tdfc\RedacteurType
     */
    public function getRedacteur()
    {
        return $this->redacteur;
    }

    /**
     * Sets a new redacteur
     *
     * @param \InterInvest\Aspone2Bundle\ClassXml\Tdfc\RedacteurType $redacteur
     * @return self
     */
    public function setRedacteur(\InterInvest\Aspone2Bundle\ClassXml\Tdfc\RedacteurType $redacteur)
    {
        $this->redacteur = $redacteur;
        return $this;
    }

    /**
     * Gets as redevable
     *
     * @return \InterInvest\Aspone2Bundle\ClassXml\Tdfc\RedevableType
     */
    public function getRedevable()
    {
        return $this->redevable;
    }

    /**
     * Sets a new redevable
     *
     * @param \InterInvest\Aspone2Bundle\ClassXml\Tdfc\RedevableType $redevable
     * @return self
     */
    public function setRedevable(\InterInvest\Aspone2Bundle\ClassXml\Tdfc\RedevableType $redevable)
    {
        $this->redevable = $redevable;
        return $this;
    }

    /**
     * Gets as partenaireEdi
     *
     * @return \InterInvest\Aspone2Bundle\ClassXml\Tdfc\PartenaireEdiType
     */
    public function getPartenaireEdi()
    {
        return $this->partenaireEdi;
    }

    /**
     * Sets a new partenaireEdi
     *
     * @param \InterInvest\Aspone2Bundle\ClassXml\Tdfc\PartenaireEdiType $partenaireEdi
     * @return self
     */
    public function setPartenaireEdi(\InterInvest\Aspone2Bundle\ClassXml\Tdfc\PartenaireEdiType $partenaireEdi)
    {
        $this->partenaireEdi = $partenaireEdi;
        return $this;
    }

    /**
     * Adds as destinataire
     *
     * @return self
     * @param \InterInvest\Aspone2Bundle\ClassXml\Tdfc\DestinataireType $destinataire
     */
    public function addToListeDestinataires(\InterInvest\Aspone2Bundle\ClassXml\Tdfc\DestinataireType $destinataire)
    {
        $this->listeDestinataires[] = $destinataire;
        return $this;
    }

    /**
     * isset listeDestinataires
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetListeDestinataires($index)
    {
        return isset($this->listeDestinataires[$index]);
    }

    /**
     * unset listeDestinataires
     *
     * @param scalar $index
     * @return void
     */
    public function unsetListeDestinataires($index)
    {
        unset($this->listeDestinataires[$index]);
    }

    /**
     * Gets as listeDestinataires
     *
     * @return \InterInvest\Aspone2Bundle\ClassXml\Tdfc\DestinataireType[]
     */
    public function getListeDestinataires()
    {
        return $this->listeDestinataires;
    }

    /**
     * Sets a new listeDestinataires
     *
     * @param \InterInvest\Aspone2Bundle\ClassXml\Tdfc\DestinataireType[]
     * $listeDestinataires
     * @return self
     */
    public function setListeDestinataires(array $listeDestinataires)
    {
        $this->listeDestinataires = $listeDestinataires;
        return $this;
    }

    /**
     * Gets as listeFormulaires
     *
     * @return \InterInvest\Aspone2Bundle\ClassXml\Tdfc\ListeFormulairesType
     */
    public function getListeFormulaires()
    {
        return $this->listeFormulaires;
    }

    /**
     * Sets a new listeFormulaires
     *
     * @param \InterInvest\Aspone2Bundle\ClassXml\Tdfc\ListeFormulairesType
     * $listeFormulaires
     * @return self
     */
    public function setListeFormulaires(\InterInvest\Aspone2Bundle\ClassXml\Tdfc\ListeFormulairesType $listeFormulaires)
    {
        $this->listeFormulaires = $listeFormulaires;
        return $this;
    }


}

