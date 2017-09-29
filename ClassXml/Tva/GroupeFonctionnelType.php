<?php

namespace InterInvest\Aspone2Bundle\ClassXml\Tva;


use JMS\Serializer\Annotation as Serializer;

/**
 * Class representing GroupeFonctionnelType
 *
 *
 * XSD Type: GroupeFonctionnel
 */
class GroupeFonctionnelType
{

    /**
     * @Serializer\XmlAttribute()
     * @Serializer\SerializedName("Type")
     * @property string $type
     */
    private $type = null;

    /**
     * @property \InterInvest\Aspone2Bundle\ClassXml\Tva\Declaration[] $declaration
     * @Serializer\XmlList(inline = true, entry = "Declaration")
     */
    private $declaration = array(
        
    );

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
     * Adds as declaration
     *
     * @return self
     * @param \InterInvest\Aspone2Bundle\ClassXml\Tva\Declaration $declaration
     */
    public function addToDeclaration(\InterInvest\Aspone2Bundle\ClassXml\Tva\Declaration $declaration)
    {
        $this->declaration[] = $declaration;
        return $this;
    }

    /**
     * isset declaration
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDeclaration($index)
    {
        return isset($this->declaration[$index]);
    }

    /**
     * unset declaration
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDeclaration($index)
    {
        unset($this->declaration[$index]);
    }

    /**
     * Gets as declaration
     *
     * @return \InterInvest\Aspone2Bundle\ClassXml\Tva\Declaration[]
     */
    public function getDeclaration()
    {
        return $this->declaration;
    }

    /**
     * Sets a new declaration
     *
     * @param \InterInvest\Aspone2Bundle\ClassXml\Tva\Declaration[] $declaration
     * @return self
     */
    public function setDeclaration(array $declaration)
    {
        $this->declaration = $declaration;
        return $this;
    }


}

