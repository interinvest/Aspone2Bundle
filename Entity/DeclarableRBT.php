<?php
/**
 * Created by PhpStorm.
 * User: bmari
 * Date: 19/07/2017
 * Time: 17:57
 */

namespace InterInvest\Aspone2Bundle\Entity;

/**
 * Class DeclarableRBT
 */
class DeclarableRBT extends DeclarableTVA
{
    private $tabAdresse;

    public function __construct()
    {
        $this->tabAdresse = parent::getTableauAdresse($this->getTdDeclarationTva()->getSocietePortage()->getAdresse());
    }

    // 3519
    public function get3519ValeurDH(){ return $this->getTdDeclarationTva()->getN331026Jb(); }
    public function get3519ValeurDN(){ return $this->getTdDeclarationTva()->getN331026Jb(); }
    public function get3519ValeurFK(){ return 'X'; }
    public function get3519ValeurDD(){ return 'X'; }
    public function get3519ValeurDI(){ return 'X'; }
    public function get3519IbanAA(){ return $this->getTdDeclarationTva()->getTIdentifGa(); }
    public function get3519BicAA(){ return 'code swift'; /* TODO code swift */ }
    public function get3519TitulaireDesignationAA(){ return 'Nom SNC'; /* TODO mettre $this->getTdDeclarationTva()->getSocietePortage()->getNom() */ }
    public function get3519ValeurFJ(){ return ''; /* TODO  */ }
    public function get3519DesignationDC(){ return 'Nom SNC'; /* TODO mettre $this->getTdDeclarationTva()->getSocietePortage()->getNom() */ }
    public function get3519DesignationSuite2DC(){ return 'SNC'; }
    public function get3519AdresseNumeroDC(){ return $this->tabAdresse['AdresseNumero']; }
    public function get3519AdresseTypeDC(){ return $this->tabAdresse['AdresseType']; }
    public function get3519AdresseVoieDC(){ return $this->tabAdresse['AdresseVoie']; }
    public function get3519AdresseComplementDC(){ return $this->tabAdresse['AdresseComplement']; }
    public function get3519AdresseCodePostalDC(){ return 'CP'; /* TODO mettre $this->getTdDeclarationTva()->getSocietePortage()->getCodePostal() */ }
    public function get3519AdresseVilleDC(){ return 'Ville'; /* TODO mettre $this->getTdDeclarationTva()->getSocietePortage()->getVille() */ }
    public function get3519AdresseCodePaysDC(){ return 'FR'; }
    public function get3519ValeurDG(){ return ''; }
}
