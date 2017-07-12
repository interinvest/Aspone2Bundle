<?php

namespace InterInvest\Bundle\Aspone\Src\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\DependencyInjection\Container;

/**
 * AsponeDeclarationIDF
 * @ORM\Entity()
 */
abstract class AsponeDeclarationIDF extends AsponeDeclaration
{

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=5, nullable=true)
     */
    protected $type = "IDF";


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
        return "TDFC";
    }
}