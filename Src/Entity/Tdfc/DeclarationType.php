<?php

namespace InterInvest\Bundle\Aspone\src\Entity\Tdfc;

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
     */
    private $type = null;

    /**
     * @property string $reference
     */
    private $reference = null;

    /**
     * @property \InterInvest\Bundle\Aspone\src\Entity\Tdfc\EmetteurType $emetteur
     */
    private $emetteur = null;

    /**
     * @property \InterInvest\Bundle\Aspone\src\Entity\Tdfc\RedacteurType $redacteur
     */
    private $redacteur = null;

    /**
     * @property \InterInvest\Bundle\Aspone\src\Entity\Tdfc\RedevableType $redevable
     */
    private $redevable = null;

    /**
     * @property \InterInvest\Bundle\Aspone\src\Entity\Tdfc\PartenaireEdiType $partenaireEdi
     */
    private $partenaireEdi = null;

    /**
     * @property \InterInvest\Bundle\Aspone\src\Entity\Tdfc\DestinataireType[]
     * $listeDestinataires
     */
    private $listeDestinataires = null;

    /**
     * @property \InterInvest\Bundle\Aspone\src\Entity\Tdfc\ListeFormulairesType
     * $listeFormulaires
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
     * @return \InterInvest\Bundle\Aspone\src\Entity\Tdfc\EmetteurType
     */
    public function getEmetteur()
    {
        return $this->emetteur;
    }

    /**
     * Sets a new emetteur
     *
     * @param \InterInvest\Bundle\Aspone\src\Entity\Tdfc\EmetteurType $emetteur
     * @return self
     */
    public function setEmetteur(\InterInvest\Bundle\Aspone\src\Entity\Tdfc\EmetteurType $emetteur)
    {
        $this->emetteur = $emetteur;
        return $this;
    }

    /**
     * Gets as redacteur
     *
     * @return \InterInvest\Bundle\Aspone\src\Entity\Tdfc\RedacteurType
     */
    public function getRedacteur()
    {
        return $this->redacteur;
    }

    /**
     * Sets a new redacteur
     *
     * @param \InterInvest\Bundle\Aspone\src\Entity\Tdfc\RedacteurType $redacteur
     * @return self
     */
    public function setRedacteur(\InterInvest\Bundle\Aspone\src\Entity\Tdfc\RedacteurType $redacteur)
    {
        $this->redacteur = $redacteur;
        return $this;
    }

    /**
     * Gets as redevable
     *
     * @return \InterInvest\Bundle\Aspone\src\Entity\Tdfc\RedevableType
     */
    public function getRedevable()
    {
        return $this->redevable;
    }

    /**
     * Sets a new redevable
     *
     * @param \InterInvest\Bundle\Aspone\src\Entity\Tdfc\RedevableType $redevable
     * @return self
     */
    public function setRedevable(\InterInvest\Bundle\Aspone\src\Entity\Tdfc\RedevableType $redevable)
    {
        $this->redevable = $redevable;
        return $this;
    }

    /**
     * Gets as partenaireEdi
     *
     * @return \InterInvest\Bundle\Aspone\src\Entity\Tdfc\PartenaireEdiType
     */
    public function getPartenaireEdi()
    {
        return $this->partenaireEdi;
    }

    /**
     * Sets a new partenaireEdi
     *
     * @param \InterInvest\Bundle\Aspone\src\Entity\Tdfc\PartenaireEdiType $partenaireEdi
     * @return self
     */
    public function setPartenaireEdi(\InterInvest\Bundle\Aspone\src\Entity\Tdfc\PartenaireEdiType $partenaireEdi)
    {
        $this->partenaireEdi = $partenaireEdi;
        return $this;
    }

    /**
     * Adds as destinataire
     *
     * @return self
     * @param \InterInvest\Bundle\Aspone\src\Entity\Tdfc\DestinataireType $destinataire
     */
    public function addToListeDestinataires(\InterInvest\Bundle\Aspone\src\Entity\Tdfc\DestinataireType $destinataire)
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
     * @return \InterInvest\Bundle\Aspone\src\Entity\Tdfc\DestinataireType[]
     */
    public function getListeDestinataires()
    {
        return $this->listeDestinataires;
    }

    /**
     * Sets a new listeDestinataires
     *
     * @param \InterInvest\Bundle\Aspone\src\Entity\Tdfc\DestinataireType[]
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
     * @return \InterInvest\Bundle\Aspone\src\Entity\Tdfc\ListeFormulairesType
     */
    public function getListeFormulaires()
    {
        return $this->listeFormulaires;
    }

    /**
     * Sets a new listeFormulaires
     *
     * @param \InterInvest\Bundle\Aspone\src\Entity\Tdfc\ListeFormulairesType
     * $listeFormulaires
     * @return self
     */
    public function setListeFormulaires(\InterInvest\Bundle\Aspone\src\Entity\Tdfc\ListeFormulairesType $listeFormulaires)
    {
        $this->listeFormulaires = $listeFormulaires;
        return $this;
    }


}

