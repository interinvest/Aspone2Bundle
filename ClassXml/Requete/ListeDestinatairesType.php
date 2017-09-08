<?php

namespace InterInvest\Aspone2Bundle\ClassXml\Requete;

/**
 * Class representing ListeDestinatairesType
 *
 *
 * XSD Type: ListeDestinataires
 */
class ListeDestinatairesType
{

    /**
     * @property \InterInvest\Aspone2Bundle\ClassXml\Requete\DestinataireType
     * $destinataire
     */
    private $destinataire = null;

    /**
     * Gets as destinataire
     *
     * @return \InterInvest\Aspone2Bundle\ClassXml\Requete\DestinataireType
     */
    public function getDestinataire()
    {
        return $this->destinataire;
    }

    /**
     * Sets a new destinataire
     *
     * @param \InterInvest\Aspone2Bundle\ClassXml\Requete\DestinataireType $destinataire
     * @return self
     */
    public function setDestinataire(\InterInvest\Aspone2Bundle\ClassXml\Requete\DestinataireType $destinataire)
    {
        $this->destinataire = $destinataire;
        return $this;
    }


}

