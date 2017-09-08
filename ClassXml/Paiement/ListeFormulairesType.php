<?php

namespace InterInvest\Aspone2Bundle\ClassXml\Paiement;

/**
 * Class representing ListeFormulairesType
 *
 *
 * XSD Type: ListeFormulaires
 */
class ListeFormulairesType
{

    /**
     * @property \InterInvest\Aspone2Bundle\ClassXml\Paiement\FormulaireType $identif
     */
    private $identif = null;

    /**
     * @property \InterInvest\Aspone2Bundle\ClassXml\Paiement\FormulaireDeclaratifType[]
     * $formulaire
     */
    private $formulaire = array(
        
    );

    /**
     * Gets as identif
     *
     * @return \InterInvest\Aspone2Bundle\ClassXml\Paiement\FormulaireType
     */
    public function getIdentif()
    {
        return $this->identif;
    }

    /**
     * Sets a new identif
     *
     * @param \InterInvest\Aspone2Bundle\ClassXml\Paiement\FormulaireType $identif
     * @return self
     */
    public function setIdentif(\InterInvest\Aspone2Bundle\ClassXml\Paiement\FormulaireType $identif)
    {
        $this->identif = $identif;
        return $this;
    }

    /**
     * Adds as formulaire
     *
     * @return self
     * @param \InterInvest\Aspone2Bundle\ClassXml\Paiement\FormulaireDeclaratifType
     * $formulaire
     */
    public function addToFormulaire(\InterInvest\Aspone2Bundle\ClassXml\Paiement\FormulaireDeclaratifType $formulaire)
    {
        $this->formulaire[] = $formulaire;
        return $this;
    }

    /**
     * isset formulaire
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFormulaire($index)
    {
        return isset($this->formulaire[$index]);
    }

    /**
     * unset formulaire
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFormulaire($index)
    {
        unset($this->formulaire[$index]);
    }

    /**
     * Gets as formulaire
     *
     * @return \InterInvest\Aspone2Bundle\ClassXml\Paiement\FormulaireDeclaratifType[]
     */
    public function getFormulaire()
    {
        return $this->formulaire;
    }

    /**
     * Sets a new formulaire
     *
     * @param \InterInvest\Aspone2Bundle\ClassXml\Paiement\FormulaireDeclaratifType[]
     * $formulaire
     * @return self
     */
    public function setFormulaire(array $formulaire)
    {
        $this->formulaire = $formulaire;
        return $this;
    }


}

