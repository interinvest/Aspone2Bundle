<?php
/**
 * Created by PhpStorm.
 * User: bmari
 * Date: 20/07/2017
 * Time: 09:26
 */

namespace InterInvest\Aspone2Bundle\Entity;


interface InterfaceDeclarable
{
    // Rédacteur
    public function getRedacteurSiret();
    public function getRedacteurDesignation();
    public function getRedacteurAdresseVoie();
    public function getRedacteurAdresseCodePostal();
    public function getRedacteurAdresseVille();

    // Redevable
    public function getRedevableIdentifiant();
    public function getRedevableDesignation();
    public function getRedevableAdresseVoie();
    public function getRedevableAdresseCodePostal();
    public function getRedevableAdresseVille();
    public function getRedevableRof();

    // Destinataire
    public function getDestinataireDesignation();
}
