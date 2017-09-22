<?php

namespace InterInvest\Aspone2Bundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * DeclarationHistoriqueDetail
 *
 * @ORM\Table(name="aspone_declaration_historique_detail")
 * @ORM\Entity
 */
class AsponeDeclarationHistoriqueDetail extends AsponeDetail
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }


}
