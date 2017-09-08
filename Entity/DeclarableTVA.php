<?php
/**
 * Created by PhpStorm.
 * User: bmari
 * Date: 31/07/2017
 * Time: 10:19
 */

namespace InterInvest\Aspone2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class DeclarableTVA
 *
 * @ORM\Table(name="aspone_declaration_TVA")
 * @ORM\Entity(repositoryClass="InterInvest\Aspone2Bundle\Repository\DeclarableTVARepository")
 */
 class DeclarableTVA extends Declarable
{

    /**
     * @var TdDeclarationTva
     *
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="TdDeclarationTva", inversedBy="asponeDeclarationTva")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="td_declaration_tva_id", referencedColumnName="id")
     * })
     */
    private $tdDeclarationTva;


    /**
     * @var AsponeDeclarationIDT
     * @ORM\Id
     * @ORM\OneToOne(targetEntity="AsponeDeclarationIDT")
     * @ORM\JoinColumn(name="id", referencedColumnName="id")
     */
    private $asponeDeclaration;

    /**
     * Set tdDeclarationTva
     *
     * @param \InterInvest\Aspone2Bundle\Entity\TdDeclarationTva $tdDeclarationTva
     *
     * @return DeclarableTVA
     */
    public function setTdDeclarationTva(\InterInvest\Aspone2Bundle\Entity\TdDeclarationTva $tdDeclarationTva)
    {
        $this->tdDeclarationTva = $tdDeclarationTva;

        return $this;
    }

    /**
     * Get tdDeclarationTva
     *
     * @return \InterInvest\Aspone2Bundle\Entity\TdDeclarationTva
     */
    public function getTdDeclarationTva()
    {
        return $this->tdDeclarationTva;
    }

    /**
     * Set AsponeDeclarationIDT
     *
     * @param \InterInvest\Aspone2Bundle\Entity\AsponeDeclarationIDT $asponeDeclaration
     *
     * @return DeclarableTVA
     */
    public function setAsponeDeclaration(\InterInvest\Aspone2Bundle\Entity\AsponeDeclarationIDT $asponeDeclaration)
    {
        $this->asponeDeclaration = $asponeDeclaration;

        return $this;
    }

    /**
     * Get AsponeDeclarationIDT
     *
     * @return \InterInvest\Aspone2Bundle\Entity\AsponeDeclarationIDT
     */
    public function getAsponeDeclaration()
    {
        return $this->asponeDeclaration;
    }


    //Redacteur
    public function getRedacteurDesignation(){ return 'ENT_EDI_' . $this->asponeDeclaration->getGroupe(); }

    // Destinataire
    public function getDestinataireDesignation(){ return 'DGI_EDI_' . $this->asponeDeclaration->getGroupe(); }

    // Identif
    public function getTIDENTIFValeurCA(){ return $this->getTdDeclarationTva()->getTIdentifCa(); }
    public function getTIDENTIFValeurCB(){ return $this->getTdDeclarationTva()->getTIdentifCb(); }
    public function getTIDENTIFValeurEA(){ return $this->getTdDeclarationTva()->getTIdentifEa() ? "X" : ""; }
    public function getTIDENTIFIbanGa(){ return $this->getTdDeclarationTva()->getTIdentifGa(); }
    public function getTIDENTIFBicGa(){ return ""; /* TODO retourner code swift du rib */ }
    public function getTIDENTIFValeurHA(){ return $this->getTdDeclarationTva()->getTIdentifHa(); }
    public function getTIDENTIFValeurKA(){ return $this->getTdDeclarationTva()->getTIdentifKa(); }
    public function getTIDENTIFValeurKD(){ return 'TVA1'; }
}