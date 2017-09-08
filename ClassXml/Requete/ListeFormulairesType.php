<?php

namespace InterInvest\Aspone2Bundle\ClassXml\Requete;

/**
 * Class representing ListeFormulairesType
 *
 *
 * XSD Type: ListeFormulaires
 */
class ListeFormulairesType
{

    /**
     * @property \InterInvest\Aspone2Bundle\ClassXml\Requete\FormulaireType $identif
     */
    private $identif = null;

    /**
     * Gets as identif
     *
     * @return \InterInvest\Aspone2Bundle\ClassXml\Requete\FormulaireType
     */
    public function getIdentif()
    {
        return $this->identif;
    }

    /**
     * Sets a new identif
     *
     * @param \InterInvest\Aspone2Bundle\ClassXml\Requete\FormulaireType $identif
     * @return self
     */
    public function setIdentif(\InterInvest\Aspone2Bundle\ClassXml\Requete\FormulaireType $identif)
    {
        $this->identif = $identif;
        return $this;
    }


}

