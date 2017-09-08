<?php

namespace InterInvest\Aspone2Bundle\ClassXml\Requete;

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
     * @property \InterInvest\Aspone2Bundle\ClassXml\Requete\EmetteurType $emetteur
     */
    private $emetteur = null;

    /**
     * @property \InterInvest\Aspone2Bundle\ClassXml\Requete\RedacteurType $redacteur
     */
    private $redacteur = null;

    /**
     * @property \InterInvest\Aspone2Bundle\ClassXml\Requete\RedevableType $redevable
     */
    private $redevable = null;

    /**
     * @property \InterInvest\Aspone2Bundle\ClassXml\Requete\PartenaireEdiType
     * $partenaireEdi
     */
    private $partenaireEdi = null;

    /**
     * @property \InterInvest\Aspone2Bundle\ClassXml\Requete\ListeDestinatairesType
     * $listeDestinataires
     */
    private $listeDestinataires = null;

    /**
     * @property \InterInvest\Aspone2Bundle\ClassXml\Requete\ListeFormulairesType
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
     * @return \InterInvest\Aspone2Bundle\ClassXml\Requete\EmetteurType
     */
    public function getEmetteur()
    {
        return $this->emetteur;
    }

    /**
     * Sets a new emetteur
     *
     * @param \InterInvest\Aspone2Bundle\ClassXml\Requete\EmetteurType $emetteur
     * @return self
     */
    public function setEmetteur(\InterInvest\Aspone2Bundle\ClassXml\Requete\EmetteurType $emetteur)
    {
        $this->emetteur = $emetteur;
        return $this;
    }

    /**
     * Gets as redacteur
     *
     * @return \InterInvest\Aspone2Bundle\ClassXml\Requete\RedacteurType
     */
    public function getRedacteur()
    {
        return $this->redacteur;
    }

    /**
     * Sets a new redacteur
     *
     * @param \InterInvest\Aspone2Bundle\ClassXml\Requete\RedacteurType $redacteur
     * @return self
     */
    public function setRedacteur(\InterInvest\Aspone2Bundle\ClassXml\Requete\RedacteurType $redacteur)
    {
        $this->redacteur = $redacteur;
        return $this;
    }

    /**
     * Gets as redevable
     *
     * @return \InterInvest\Aspone2Bundle\ClassXml\Requete\RedevableType
     */
    public function getRedevable()
    {
        return $this->redevable;
    }

    /**
     * Sets a new redevable
     *
     * @param \InterInvest\Aspone2Bundle\ClassXml\Requete\RedevableType $redevable
     * @return self
     */
    public function setRedevable(\InterInvest\Aspone2Bundle\ClassXml\Requete\RedevableType $redevable)
    {
        $this->redevable = $redevable;
        return $this;
    }

    /**
     * Gets as partenaireEdi
     *
     * @return \InterInvest\Aspone2Bundle\ClassXml\Requete\PartenaireEdiType
     */
    public function getPartenaireEdi()
    {
        return $this->partenaireEdi;
    }

    /**
     * Sets a new partenaireEdi
     *
     * @param \InterInvest\Aspone2Bundle\ClassXml\Requete\PartenaireEdiType $partenaireEdi
     * @return self
     */
    public function setPartenaireEdi(\InterInvest\Aspone2Bundle\ClassXml\Requete\PartenaireEdiType $partenaireEdi)
    {
        $this->partenaireEdi = $partenaireEdi;
        return $this;
    }

    /**
     * Gets as listeDestinataires
     *
     * @return \InterInvest\Aspone2Bundle\ClassXml\Requete\ListeDestinatairesType
     */
    public function getListeDestinataires()
    {
        return $this->listeDestinataires;
    }

    /**
     * Sets a new listeDestinataires
     *
     * @param \InterInvest\Aspone2Bundle\ClassXml\Requete\ListeDestinatairesType
     * $listeDestinataires
     * @return self
     */
    public function setListeDestinataires(\InterInvest\Aspone2Bundle\ClassXml\Requete\ListeDestinatairesType $listeDestinataires)
    {
        $this->listeDestinataires = $listeDestinataires;
        return $this;
    }

    /**
     * Gets as listeFormulaires
     *
     * @return \InterInvest\Aspone2Bundle\ClassXml\Requete\ListeFormulairesType
     */
    public function getListeFormulaires()
    {
        return $this->listeFormulaires;
    }

    /**
     * Sets a new listeFormulaires
     *
     * @param \InterInvest\Aspone2Bundle\ClassXml\Requete\ListeFormulairesType
     * $listeFormulaires
     * @return self
     */
    public function setListeFormulaires(\InterInvest\Aspone2Bundle\ClassXml\Requete\ListeFormulairesType $listeFormulaires)
    {
        $this->listeFormulaires = $listeFormulaires;
        return $this;
    }


}

