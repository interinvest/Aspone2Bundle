<?php

namespace InterInvest\Bundle\Aspone\src\Entity\Paiement;

/**
 * Class representing GroupeFonctionnelType
 *
 *
 * XSD Type: GroupeFonctionnel
 */
class GroupeFonctionnelType
{

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * @property \InterInvest\Bundle\Aspone\src\Entity\Paiement\Declaration[] $declaration
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
     * @param \InterInvest\Bundle\Aspone\src\Entity\Paiement\Declaration $declaration
     */
    public function addToDeclaration(\InterInvest\Bundle\Aspone\src\Entity\Paiement\Declaration $declaration)
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
     * @return \InterInvest\Bundle\Aspone\src\Entity\Paiement\Declaration[]
     */
    public function getDeclaration()
    {
        return $this->declaration;
    }

    /**
     * Sets a new declaration
     *
     * @param \InterInvest\Bundle\Aspone\src\Entity\Paiement\Declaration[] $declaration
     * @return self
     */
    public function setDeclaration(array $declaration)
    {
        $this->declaration = $declaration;
        return $this;
    }


}

