<?php

namespace InterInvest\Aspone2Bundle\ClassXml\Tva;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class representing XmlEdiType
 *
 *
 * XSD Type: XmlEdi
 *
 * @Serializer\XmlDiscriminator(cdata=false)
 * @Serializer\XmlRoot("XmlEdi")
 */
class XmlEdiType
{

    /**
     * @property string $test
     * @Serializer\XmlAttribute()
     * @Serializer\SerializedName("Test")
     */
    private $test = null;

    /**
     * @property \InterInvest\Aspone2Bundle\ClassXml\Tva\GroupeFonctionnelType
     * $groupeFonctionnel
     * @Serializer\SerializedName("GroupeFonctionnel")
     */
    private $groupeFonctionnel = null;

    /**
     * Gets as test
     *
     * @return string
     */
    public function getTest()
    {
        return $this->test;
    }

    /**
     * Sets a new test
     *
     * @param string $test
     * @return self
     */
    public function setTest($test)
    {
        $this->test = $test;
        return $this;
    }

    /**
     * Gets as groupeFonctionnel
     *
     * @return \InterInvest\Aspone2Bundle\ClassXml\Tva\GroupeFonctionnelType
     */
    public function getGroupeFonctionnel()
    {
        return $this->groupeFonctionnel;
    }

    /**
     * Sets a new groupeFonctionnel
     *
     * @param \InterInvest\Aspone2Bundle\ClassXml\Tva\GroupeFonctionnelType
     * $groupeFonctionnel
     * @return self
     */
    public function setGroupeFonctionnel(\InterInvest\Aspone2Bundle\ClassXml\Tva\GroupeFonctionnelType $groupeFonctionnel)
    {
        $this->groupeFonctionnel = $groupeFonctionnel;
        return $this;
    }


}

