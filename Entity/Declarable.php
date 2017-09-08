<?php
/**
 * Created by PhpStorm.
 * User: bmari
 * Date: 31/07/2017
 * Time: 10:07
 */

namespace InterInvest\Aspone2Bundle\Entity;


abstract class Declarable implements InterfaceDeclarable
{
    use TraitDeclarable;


    // Redacteur
    public function getRedacteurSiret(){ return '38384866000106'; }
    public function getRedacteurDesignation(){ return 'ENT_EDI_TVA'; }
    public function getRedacteurDesignationSuite(){ return 'Inter Invest'; }
    public function getRedacteurAdresseNumero(){ return 40; }
    public function getRedacteurAdresseVoie(){ return 'rue de Courcelles'; }
    public function getRedacteurAdresseCodePostal(){ return '75008'; }
    public function getRedacteurAdresseVille(){ return 'PARIS'; }
    public function getRedacteurAdresseCodePays(){ return 'FR'; }

    // Redevable TODO mettre les vraix valeurs une fois le bundle installer
    public function getRedevableIdentifiant(){ return "RcNum"; }
    public function getRedevableDesignation(){ return "Nom SNC"; }
    public function getRedevableAdresseNumero(){ return "numéro"; }
    public function getRedevableAdresseType(){ return "type"; }
    public function getRedevableAdresseVoie(){ return "voie"; }
    public function getRedevableAdresseComplement(){ return "complement"; }
    public function getRedevableAdresseCodePostal(){ return "CP"; }
    public function getRedevableAdresseVille(){ return "ville"; }
    public function getRedevableAdresseCodePays(){ return "FR"; }
    public function getRedevableROF(){ return "ROF"; }


    public static function getTableauAdresse($adresse)
    {
        $result = array();
        if (preg_match('/([0-9]*)[\s,]*(bis|ter|quater)?[\s,]*(.*)$/i', $adresse, $matches)) {
            $numero = $matches[1];
            $type = $matches[2];
            $voie = $matches[3];
            if ($numero) {
                $result['AdresseNumero'] = $numero;
            }
            if ($type) {
                switch (strtolower($type)) {
                    case "bis" :
                        $result['AdresseType'] = "B";
                        break;
                    case "ter" :
                        $result['AdresseType'] = "T";
                        break;
                    case "quater" :
                        $result['AdresseType'] = "Q";
                        break;
                }
            }
            $voie = explode("|", wordwrap($voie, 30, "|"));

            $result['AdresseVoie'] = $voie[0];
            if (count($voie) > 1) {
                $result['AdresseComplement'] = $voie[1];
            }
        } else {
            $adresse = self::splitAddress($adresse);
            $result['AdresseVoie'] = isset($adresse[0]) ? $adresse[0] : '';
            if (isset($adresse[1])) {
                $result['AdresseComplement'] = $adresse[1];
            }
        }

        return $result;
    }
}