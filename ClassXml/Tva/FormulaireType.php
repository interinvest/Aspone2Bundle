<?php

namespace InterInvest\Aspone2Bundle\ClassXml\Tva;


use JMS\Serializer\Annotation as Serializer;

/**
 * Class representing FormulaireType
 *
 *
 * XSD Type: Formulaire
 */
class FormulaireType
{

    /**
     * @property string $millesime
     * @Serializer\XmlAttribute()
     * @Serializer\SerializedName("Millesime")
     */
    private $millesime = null;

    /**
     * @property \InterInvest\Aspone2Bundle\ClassXml\Tva\ZoneType[] $zone
     * @Serializer\XmlList(inline = true, entry = "Zone")
     */
    private $zone = array(
        
    );

    /**
     * Gets as millesime
     *
     * @return string
     */
    public function getMillesime()
    {
        return $this->millesime;
    }

    /**
     * Sets a new millesime
     *
     * @param string $millesime
     * @return self
     */
    public function setMillesime($millesime)
    {
        $this->millesime = $millesime;
        return $this;
    }

    /**
     * Adds as zone
     *
     * @return self
     * @param \InterInvest\Aspone2Bundle\ClassXml\Tva\ZoneType $zone
     */
    public function addToZone(\InterInvest\Aspone2Bundle\ClassXml\Tva\ZoneType $zone)
    {
        $this->zone[] = $zone;
        return $this;
    }

    /**
     * isset zone
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetZone($index)
    {
        return isset($this->zone[$index]);
    }

    /**
     * unset zone
     *
     * @param scalar $index
     * @return void
     */
    public function unsetZone($index)
    {
        unset($this->zone[$index]);
    }

    /**
     * Gets as zone
     *
     * @return \InterInvest\Aspone2Bundle\ClassXml\Tva\ZoneType[]
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * Sets a new zone
     *
     * @param \InterInvest\Aspone2Bundle\ClassXml\Tva\ZoneType[] $zone
     * @return self
     */
    public function setZone(array $zone)
    {
        $this->zone = $zone;
        return $this;
    }


}

