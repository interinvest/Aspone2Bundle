<?php

namespace InterInvest\Aspone2Bundle\ClassXml\Requete;

/**
 * Class representing XmlEdiType
 *
 *
 * XSD Type: XmlEdi
 */
class XmlEdiType
{

    /**
     * @property string $test
     */
    private $test = null;

    /**
     * @property \InterInvest\Aspone2Bundle\ClassXml\Requete\GroupeFonctionnelType
     * $groupeFonctionnel
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
     * @return \InterInvest\Aspone2Bundle\ClassXml\Requete\GroupeFonctionnelType
     */
    public function getGroupeFonctionnel()
    {
        return $this->groupeFonctionnel;
    }

    /**
     * Sets a new groupeFonctionnel
     *
     * @param \InterInvest\Aspone2Bundle\ClassXml\Requete\GroupeFonctionnelType
     * $groupeFonctionnel
     * @return self
     */
    public function setGroupeFonctionnel(\InterInvest\Aspone2Bundle\ClassXml\Requete\GroupeFonctionnelType $groupeFonctionnel)
    {
        $this->groupeFonctionnel = $groupeFonctionnel;
        return $this;
    }


}

