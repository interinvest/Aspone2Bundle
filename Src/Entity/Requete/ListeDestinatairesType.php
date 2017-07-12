<?php

namespace InterInvest\Bundle\Aspone\src\Entity\Requete;

/**
 * Class representing ListeDestinatairesType
 *
 *
 * XSD Type: ListeDestinataires
 */
class ListeDestinatairesType
{

    /**
     * @property \InterInvest\Bundle\Aspone\src\Entity\Requete\DestinataireType
     * $destinataire
     */
    private $destinataire = null;

    /**
     * Gets as destinataire
     *
     * @return \InterInvest\Bundle\Aspone\src\Entity\Requete\DestinataireType
     */
    public function getDestinataire()
    {
        return $this->destinataire;
    }

    /**
     * Sets a new destinataire
     *
     * @param \InterInvest\Bundle\Aspone\src\Entity\Requete\DestinataireType $destinataire
     * @return self
     */
    public function setDestinataire(\InterInvest\Bundle\Aspone\src\Entity\Requete\DestinataireType $destinataire)
    {
        $this->destinataire = $destinataire;
        return $this;
    }


}

