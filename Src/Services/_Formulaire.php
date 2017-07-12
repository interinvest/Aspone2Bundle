<?php

/** Makes a Declaration object from a Declarable object and use it */

namespace InterInvest\Bundle\Aspone\Src\Services;

use InterInvest\Bundle\Aspone\Src\Entity\AsponeDeclaration;
use InterInvest\Bundle\Aspone\src\Entity\Tva\Adresse;
use InterInvest\Bundle\Aspone\src\Entity\Tva\AdresseNumero;
use Symfony\Component\DependencyInjection\Container;
use InterInvest\Bundle\Aspone\Src\Entity;


/**
 * Class Formulaire
 */
class Formulaire
{
    /* @var $declaration Entity\AsponeDeclarationIDT */
    protected $declaration;
    /* @var $sDictionnaire Dictionnaire */
    protected $sDictionnaire;
    /* @var $container Container */
    protected $container;


    public function __construct(Container $container, Dictionnaire $sDictionnaire)
    {
        $this->sDictionnaire = $sDictionnaire;
        $this->container = $container;
    }


    public function init(AsponeDeclaration $declaration, $millesime)
    {
        $this->declaration = $declaration;

        $formulaires = explode(',', $this->declaration->getFormulaires());
        $this->sDictionnaire->init($this->declaration->getGroupe(), $declaration->getMillesime(), $formulaires);

    }


    public function getXmlAdresse($cheminBase, $name)
    {
        $cheminAdresseNumero = $cheminBase."\\AdresseNumero";
        $getAdresseNumero = "getAdresseNumero".$name;
        $adresseNumero = new $cheminAdresseNumero($getAdresseNumero());

        $cheminAdresseType = $cheminBase."\\AdresseType";
        $getAdresseType = "getAdresseType".$name;
        $adresseType = new $cheminAdresseType($getAdresseType());

        $cheminAdresseRepetabilite = $cheminBase."\\AdresseRepetabilite";
        $getAdresseRepetabilite = "getAdresseRepetabilite".$name;
        $adresseRepetabilite = new $cheminAdresseRepetabilite($getAdresseRepetabilite());

        $cheminAdresseVoie = $cheminBase."\\AdresseVoie";
        $getAdresseVoie = "getAdresseVoie".$name;
        $adresseVoie = new $cheminAdresseVoie($getAdresseVoie());

        $cheminAdresseComplement = $cheminBase."\\AdresseComplement";
        $getAdresseComplement = "getAdresseComplement".$name;
        $adresseComplement = new $cheminAdresseComplement($getAdresseComplement());

        $cheminAdresseHameau = $cheminBase."\\AdresseHameau";
        $getAdresseHameau = "getAdresseHameau".$name;
        $adresseHameau = new $cheminAdresseHameau($getAdresseHameau());

        $cheminAdresseCodePostal = $cheminBase."\\AdresseCodePostal";
        $getAdresseCodePostal = "getAdresseCodePostal".$name;
        $adresseCodePostal = new $cheminAdresseCodePostal($getAdresseCodePostal());

        $cheminAdresseVille = $cheminBase."\\AdresseVille";
        $getAdresseVille = "getAdresseVille".$name;
        $adresseVille = new $cheminAdresseVille($getAdresseVille());

        $cheminAdresseCodePays = $cheminBase."\\AdresseCodePays";
        $getAdresseCodePays = "getAdresseCodePays".$name;
        $adresseCodePays = new $cheminAdresseCodePays($getAdresseCodePays());

        $cheminAdresseEtrangere1 = $cheminBase."\\AdresseEtrangere1";
        $getAdresseEtrangere1 = "getAdresseEtrangere1".$name;
        $adresseEtrangere1 = new $cheminAdresseEtrangere1($getAdresseEtrangere1());

        $cheminAdresseEtrangere2 = $cheminBase."\\AdresseEtrangere2";
        $getAdresseEtrangere2 = "getAdresseEtrangere2".$name;
        $adresseEtrangere2 = new $cheminAdresseEtrangere2($getAdresseEtrangere2());

        $cheminAdresseEtrangere3 = $cheminBase."\\AdresseEtrangere3";
        $getAdresseEtrangere3 = "getAdresseEtrangere3".$name;
        $adresseEtrangere3 = new $cheminAdresseEtrangere3($getAdresseEtrangere3());

        $cheminAdresseEtrangere4 = $cheminBase."\\AdresseEtrangere4";
        $getAdresseEtrangere4 = "getAdresseEtrangere4".$name;
        $adresseEtrangere4 = new $cheminAdresseEtrangere4($getAdresseEtrangere4());

        $cheminAdresseCodeDivisionTerritoriale = $cheminBase."\\AdresseCodeDivisionTerritoriale";
        $getAdresseCodeDivisionTerritoriale = "getAdresseCodeDivisionTerritoriale".$name;
        $adresseCodeDivisionTerritoriale = new $cheminAdresseCodeDivisionTerritoriale($getAdresseCodeDivisionTerritoriale());

        $cheminAdresseDivisionTerritoriale = $cheminBase."\\AdresseDivisionTerritoriale";
        $getAdresseDivisionTerritoriale = "getAdresseDivisionTerritoriale".$name;
        $adresseDivisionTerritoriale = new $cheminAdresseDivisionTerritoriale($getAdresseDivisionTerritoriale());

        $cheminAdresse = $cheminBase."\\Adresse";
        $adresse = new $cheminAdresse();
        $adresse->setAdresseNumero($adresseNumero)
            ->setAdresseType($adresseType)
            ->setAdresseRepetabilite($adresseRepetabilite)
            ->setAdresseVoie($adresseVoie)
            ->setAdresseComplement($adresseComplement)
            ->setAdresseHameau($adresseHameau)
            ->setAdresseCodePostal($adresseCodePostal)
            ->setAdresseVille($adresseVille)
            ->setAdresseCodePays($adresseCodePays)
            ->setAdresseEtrangere1($adresseEtrangere1)
            ->setAdresseEtrangere2($adresseEtrangere2)
            ->setAdresseEtrangere3($adresseEtrangere3)
            ->setAdresseEtrangere4($adresseEtrangere4)
            ->setAdresseCodeDivisionTerritoriale($adresseCodeDivisionTerritoriale)
            ->setAdresseDivisionTerritoriale($adresseDivisionTerritoriale);

        return $adresse;
    }

    public function getXml()
    {
        $cheminBase = "InterInvest\\Bundle\\Aspone\\Src\\Entity\\".$this->declaration->getGroupe();

        // XmlEdi
        $cheminXmlEdi = $cheminBase."\\XmlEdi";
        $xmlEdi = new $cheminXmlEdi();
        // - GroupeFonctionnel
        $cheminGroupeFonctionnel = $cheminBase."\\GroupeFonctionnelType";
        $groupeFonctionnel = new $cheminGroupeFonctionnel();
        $xmlEdi->setGroupeFonctionnel($groupeFonctionnel);
        // - - Declaration
        $cheminDeclaration = $cheminBase."\\Declaration";
        $declaration = new $cheminDeclaration();
        // - - - Emetteur
        $cheminEmetteur = $cheminBase."\\EmetteurType";
        $emetteur = new $cheminEmetteur();
        $emetteur->setSiret($this->declaration->getSiretEmmeteur())
            ->setDesignation($this->declaration->getDesignationEmmeteur())
            ->setDesignationSuite1($this->declaration->getDesignationSuite1Emmeteur())
            ->setAdresse($this->getXmlAdresse($cheminBase, 'Emetteur'))
            ->setReferenceDossier($this->declaration->getReferenceDossierEmmeteur());
        $declaration->setEmetteur($emetteur);
        // - - - Redacteur
        $cheminRedacteur = $cheminBase."\\RedacteurType";
        $redacteur = new $cheminRedacteur();
        $redacteur->setSiret($this->declaration->getRedacteurSiret())
            ->setDesignation($this->declaration->getRedacteurDesignation())
            ->setDesignationSuite1($this->declaration->getRedacteurDesignationSuite())
            ->setAdresse($this->getXmlAdresse($cheminBase, 'Redacteur'));
        // - - - Redevable
        $cheminRedevable = $cheminBase."\\RedevableType";
        $redevable = new $cheminRedevable();
        $redevable->setIdentifiant($this->declaration->getSiretRedevable())
            ->setDesignation($this->declaration->getDesignationRedevable())
            ->setDesignationSuite1($this->declaration->getDesignationSuite1Redevable())
            ->setAdresse($this->getXmlAdresse($cheminBase, 'Redevable'))
            ->setReferenceDossier($this->declaration->getReferenceDossierRedevable())
            ->setRof($this->declaration->getRofRedevable());
        // - - - PartenaireEdi
        $cheminPartenaireEdi = $cheminBase."\\PartenaireEdiType";
        $partenaireEdi = new $cheminPartenaireEdi();
        $partenaireEdi->setIdentifiant($this->declaration->getIdentifiantPartenaireEdi())
            ->setDesignation($this->declaration->getDesignationPartenaireEdi())
            ->setDesignationSuite1($this->declaration->getDesignationSuite1PartenaireEdi())
            ->setAdresse($this->getXmlAdresse($cheminBase, 'PartenaireEdi'))
            ->setReferenceDossier($this->declaration->getReferenceDossierPartenaireEdi());
        // - - - ListeDestinataire
        $cheminDestinataireType = $cheminBase."\\DestinataireType";
        $listeDestinataire = new $cheminDestinataireType();
        $listeDestinataire->setIdentifiant($this->declaration->getIdentifiantDestinataire())
            ->setDesignation($this->declaration->getDesignationDestinataire())
            ->setDesignationSuite1($this->declaration->getDesignationSuite1Destinataire())
            ->setAdresse($this->getXmlAdresse($cheminBase, 'Destinataire'))
            ->setReferenceDossier($this->declaration->getReferenceDossierDestinataire());
        // - - - ListeFormulaire
        $cheminDestinataireType = $cheminBase."\\ListeFormulairesType";
        $listeFormulaire = new $cheminDestinataireType();

        foreach($this->sDictionnaire->getZones() as $formulaire => $zones){
            if($formulaire == "T-Identif"){
                $cheminFormulaireType = $cheminBase."\\FormulaireType";
                $noeudForm = new $cheminFormulaireType();
                $noeudForm->setMillesime($declaration->getMillesime());

                foreach($zones as $zone => $valeur){
                    $cheminZoneType = $cheminBase."\\ZoneType";
                    $noeudZone = new $cheminZoneType();
                    $noeudZone->{"set".ucfirst(strtolower($valeur))}($this->declaration->{"get".ucfirst(strtolower($valeur)).ucfirst(strtolower($zone))}());
                    $noeudForm->addToZone($noeudZone);
                }

                $listeFormulaire->setIdentif($noeudForm);
            } else {
                $cheminFormulaireDeclaratifType = $cheminBase."\\FormulaireDeclaratifType";
                $noeudForm = new $cheminFormulaireDeclaratifType();
                $noeudForm->setNom($formulaire)
                    ->setMillesime($declaration->getMillesime());

                foreach($zones as $zone => $valeur){
                    $cheminZoneType = $cheminBase."\\ZoneType";
                    $noeudZone = new $cheminZoneType();
                    $noeudZone->{"set".ucfirst(strtolower($valeur))}($this->declaration->{"get".ucfirst(strtolower($valeur)).ucfirst(strtolower($zone))}());
                    $noeudForm->addToZone($noeudZone);
                }

                $listeFormulaire->addToFormulaire($noeudForm);
            }
        }

        return $xmlEdi;
    }


    public function getXmlPath()
    {
        return $this->container->get('kernel')->getRootDir() . $this->container->getParameter('aspone.xmlPath').$this->declaration->getType() . '/' . $this->declaration->getId() . '.xml';
    }

    public function saveXml()
    {
        $xml = new \SimpleXMLElement("<?xml version='1.0' encoding='ISO-8859-1'?>".$this->getXml());

        $verif = new \DOMDocument();
        $verif->loadXML($xml->asXml());
        if (!$verif->schemaValidate(__DIR__ . '/../Resources/xsd/' . 'XmlEdi' . $this->declaration->getGroupe() . '.xsd')) {
            throw new \Exception('XML non valide', 0);
        }

        $xml->saveXML($this->getXmlPath());

        return true;
    }


}