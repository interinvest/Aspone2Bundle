<?php

namespace InterInvest\Aspone2Bundle\ClassXml\Tva;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class representing AdresseVille
 */
class AdresseVille
{

    /**
     * @property string $__value
     * @Serializer\XmlValue()
     */
    private $__value = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }


}

