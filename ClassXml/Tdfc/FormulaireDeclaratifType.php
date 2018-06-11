<?php

namespace InterInvest\Aspone2Bundle\ClassXml\Tdfc;


use JMS\Serializer\Annotation as Serializer;


/**
 * Class representing FormulaireDeclaratifType
 *
 *
 * XSD Type: FormulaireDeclaratif
 */
class FormulaireDeclaratifType extends FormulaireType
{

    /**
     * @property string $nom
     * @Serializer\XmlAttribute()
     * @Serializer\SerializedName("Nom")
     */
    private $nom = null;

    /**
     * @property string $repetition
     * @Serializer\XmlAttribute()
     * @Serializer\SerializedName("Repetition")
     */
    private $repetition = null;

    /**
     * Gets as nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Sets a new nom
     *
     * @param string $nom
     * @return self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Gets as repetition
     *
     * @return string
     */
    public function getRepetition()
    {
        return $this->repetition;
    }

    /**
     * Sets a new repetition
     *
     * @param string $repetition
     * @return self
     */
    public function setRepetition($repetition)
    {
        $this->repetition = $repetition;
        return $this;
    }


}

