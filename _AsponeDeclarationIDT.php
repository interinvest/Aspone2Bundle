<?php

namespace InterInvest\Bundle\Aspone\Src\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AsponeDeclarationIDT
 * @ORM\Entity()
 */
abstract class AsponeDeclarationIDT extends AsponeDeclaration
{

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=5, nullable=true)
     */
    protected $type = "IDT";


    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    public function getGroupe()
    {
        return "TVA";
    }
}