<?php

namespace InterInvest\Bundle\Aspone\src\Entity\Requete;

/**
 * Class representing ListeFormulairesType
 *
 *
 * XSD Type: ListeFormulaires
 */
class ListeFormulairesType
{

    /**
     * @property \InterInvest\Bundle\Aspone\src\Entity\Requete\FormulaireType $identif
     */
    private $identif = null;

    /**
     * Gets as identif
     *
     * @return \InterInvest\Bundle\Aspone\src\Entity\Requete\FormulaireType
     */
    public function getIdentif()
    {
        return $this->identif;
    }

    /**
     * Sets a new identif
     *
     * @param \InterInvest\Bundle\Aspone\src\Entity\Requete\FormulaireType $identif
     * @return self
     */
    public function setIdentif(\InterInvest\Bundle\Aspone\src\Entity\Requete\FormulaireType $identif)
    {
        $this->identif = $identif;
        return $this;
    }


}

