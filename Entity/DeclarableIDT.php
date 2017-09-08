<?php
/**
 * Created by PhpStorm.
 * User: bmari
 * Date: 19/07/2017
 * Time: 17:57
 */

namespace InterInvest\Aspone2Bundle\Entity;

/**
 * Class DeclarableIDT
 */
class DeclarableIDT extends DeclarableTVA
{

    // 3310CA3
    public function get3310CA3ValeurCA(){ return $this->getTdDeclarationTva()->getN331001Ca(); }
    public function get3310CA3ValeurCG(){ return $this->getTdDeclarationTva()->getN33103bCg(); }
    public function get3310CA3ValeurGM(){ return $this->getTdDeclarationTva()->getN331010Gm(); }
    public function get3310CA3ValeurGH(){ return $this->getTdDeclarationTva()->getN331010Gm(); }
    public function get3310CA3ValeurHA(){ return $this->getTdDeclarationTva()->getN331019Ha(); }
    public function get3310CA3ValeurHB(){ return $this->getTdDeclarationTva()->getN331020Hb(); }
    public function get3310CA3ValeurHC(){ return $this->getTdDeclarationTva()->getN331021Hc(); }
    public function get3310CA3ValeurHD(){ return $this->getTdDeclarationTva()->getN331022Hd(); }
    public function get3310CA3ValeurJA(){ return $this->getTdDeclarationTva()->getN331025Ja(); }
    public function get3310CA3ValeurJB(){ return $this->getTdDeclarationTva()->getN331026Jb(); }
    public function get3310CA3ValeurJC(){ return $this->getTdDeclarationTva()->getN331027Jc(); }
    public function get3310CA3ValeurKA(){ return $this->getTdDeclarationTva()->getN331028Ka(); }
    public function get3310CA3ValeurKF(){ return $this->getTdDeclarationTva()->getN3310NeantKf() ? 'X' : null; }
    public function get3310CA3ValeurFM(){ return $this->get3310CA3ValeurCA() + $this->get3310CA3ValeurCG(); }
    public function get3310CA3ValeurHG(){ return $this->get3310CA3ValeurHA() + $this->get3310CA3ValeurHB() + $this->get3310CA3ValeurHC() + $this->get3310CA3ValeurHD(); }
    public function get3310CA3ValeurKE(){ return $this->get3310CA3ValeurKA(); }
    public function get3310CA3ValeurKG(){ return ''; /* TODO Somme TVA NPR des dossiers liés */ }


}
