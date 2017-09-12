<?php

/** Makes a Declaration object from a Declarable object and use it */

namespace InterInvest\Aspone2Bundle\Services;

use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\BaseTypesHandler;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\XmlSchemaDateHandler;
use InterInvest\Aspone2Bundle\Entity\AsponeDeclaration;
use InterInvest\Aspone2Bundle\ClassXml\Tva;
use JMS\Serializer\Handler\HandlerRegistryInterface;
use JMS\Serializer\Serializer;
use Symfony\Component\DependencyInjection\Container;
use InterInvest\Aspone2Bundle\Entity;
use JMS\Serializer\SerializerBuilder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;


/**
 * Class Formulaire
 */
class Formulaire
{
    /* @var $container Container */
    protected $container;
    /* @var $declarable AsponeDeclaration \*/
    protected $declarable;
    /* @var $sDictionnaire Dictionnaire */
    protected $sDictionnaire;


    public function __construct(Container $container, Dictionnaire $sDictionnaire)
    {
        $this->container = $container;
        $this->sDictionnaire = $sDictionnaire;
    }


    public function init($declarable)
    {
        $this->declarable = $declarable;

        $formulaires = explode(',', $this->declarable->getFormulaires());
        $this->sDictionnaire->init($this->declarable->getGroupe(), $this->declarable->getMillesime(), $formulaires);

    }


    public function getXmlAdresse($cheminBase, $name)
    {
        $cheminAdresseNumero = $cheminBase."\\AdresseNumero";
        $getAdresseNumero = "getAdresseNumero".$name;
        $adresseNumero = new $cheminAdresseNumero($this->declarable->$getAdresseNumero());

        $cheminAdresseType = $cheminBase."\\AdresseT";
        $getAdresseType = "getAdresseType".$name;
        $adresseType = new $cheminAdresseType($this->declarable->$getAdresseType());

        $cheminAdresseVoie = $cheminBase."\\AdresseVoie";
        $getAdresseVoie = "getAdresseVoie".$name;
        $adresseVoie = new $cheminAdresseVoie($this->declarable->$getAdresseVoie());

        $cheminAdresseComplement = $cheminBase."\\AdresseComplement";
        $getAdresseComplement = "getAdresseComplement".$name;
        $adresseComplement = new $cheminAdresseComplement($this->declarable->$getAdresseComplement());

        $cheminAdresseHameau = $cheminBase."\\AdresseHameau";
        $getAdresseHameau = "getAdresseHameau".$name;
        $adresseHameau = new $cheminAdresseHameau($this->declarable->$getAdresseHameau());

        $cheminAdresseCodePostal = $cheminBase."\\AdresseCodePostal";
        $getAdresseCodePostal = "getAdresseCodePostal".$name;
        $adresseCodePostal = new $cheminAdresseCodePostal($this->declarable->$getAdresseCodePostal());

        $cheminAdresseVille = $cheminBase."\\AdresseVille";
        $getAdresseVille = "getAdresseVille".$name;
        $adresseVille = new $cheminAdresseVille($this->declarable->$getAdresseVille());

        $cheminAdresseCodePays = $cheminBase."\\AdresseCodePays";
        $getAdresseCodePays = "getAdresseCodePays".$name;
        $adresseCodePays = new $cheminAdresseCodePays($this->declarable->$getAdresseCodePays());

        $cheminAdresse = $cheminBase."\\Adresse";
        $adresse = new $cheminAdresse();
        $adresse->setAdresseNumero($adresseNumero)
            ->setAdresseT($adresseType)
            ->setAdresseVoie($adresseVoie)
            ->setAdresseComplement($adresseComplement)
            ->setAdresseHameau($adresseHameau)
            ->setAdresseCodePostal($adresseCodePostal)
            ->setAdresseVille($adresseVille)
            ->setAdresseCodePays($adresseCodePays);

        return $adresse;
    }

    public function getXml()
    {
        $cheminBase = "InterInvest\\Aspone2Bundle\\ClassXml\\".ucfirst(strtolower($this->declarable->getGroupe()));

        // XmlEdi
        $cheminXmlEdi = $cheminBase."\\XmlEdi";
        $xmlEdi = new $cheminXmlEdi();
        $xmlEdi->setTest(1);
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
        $emetteur->setSiret($this->declarable->getSiretEmmeteur())
            ->setDesignation($this->declarable->getDesignationEmmeteur())
            ->setDesignationSuite1($this->declarable->getDesignationSuite1Emmeteur())
            ->setAdresse($this->getXmlAdresse($cheminBase, 'Emetteur'))
            ->setReferenceDossier($this->declarable->getReferenceDossierEmmeteur());
        $declaration->setEmetteur($emetteur);
        // - - - Redacteur
        $cheminRedacteur = $cheminBase."\\RedacteurType";
        $redacteur = new $cheminRedacteur();
        $redacteur->setSiret($this->declarable->getRedacteurSiret())
            ->setDesignation($this->declarable->getRedacteurDesignation())
            ->setDesignationSuite1($this->declarable->getRedacteurDesignationSuite())
            ->setAdresse($this->getXmlAdresse($cheminBase, 'Redacteur'));
        $declaration->setRedacteur($redacteur);
        // - - - Redevable
        $cheminRedevable = $cheminBase."\\RedevableType";
        $redevable = new $cheminRedevable();
        $redevable->setIdentifiant($this->declarable->getSiretRedevable())
            ->setDesignation($this->declarable->getDesignationRedevable())
            ->setDesignationSuite1($this->declarable->getDesignationSuite1Redevable())
            ->setAdresse($this->getXmlAdresse($cheminBase, 'Redevable'))
            ->setReferenceDossier($this->declarable->getReferenceDossierRedevable())
            ->setRof($this->declarable->getRofRedevable());
        $declaration->setRedevable($redevable);
        // - - - PartenaireEdi
        $cheminPartenaireEdi = $cheminBase."\\PartenaireEdiType";
        $partenaireEdi = new $cheminPartenaireEdi();
        $partenaireEdi->setIdentifiant($this->declarable->getIdentifiantPartenaireEdi())
            ->setDesignation($this->declarable->getDesignationPartenaireEdi())
            ->setDesignationSuite1($this->declarable->getDesignationSuite1PartenaireEdi())
            ->setAdresse($this->getXmlAdresse($cheminBase, 'PartenaireEdi'))
            ->setReferenceDossier($this->declarable->getReferenceDossierPartenaireEdi());
        $declaration->setPartenaireEdi($partenaireEdi);
        // - - - ListeDestinataire
        $cheminDestinataireType = $cheminBase."\\DestinataireType";
        $listeDestinataire = new $cheminDestinataireType();
        $listeDestinataire->setIdentifiant($this->declarable->getIdentifiantDestinataire())
            ->setDesignation($this->declarable->getDesignationDestinataire())
            ->setDesignationSuite1($this->declarable->getDesignationSuite1Destinataire())
            ->setAdresse($this->getXmlAdresse($cheminBase, 'Destinataire'))
            ->setReferenceDossier($this->declarable->getReferenceDossierDestinataire());
        $declaration->addToListeDestinataires($listeDestinataire);
        // - - - ListeFormulaire
        $cheminDestinataireType = $cheminBase."\\ListeFormulairesType";
        $listeFormulaire = new $cheminDestinataireType();


        foreach($this->sDictionnaire->getZones() as $formulaire => $zones){
            $cheminFormulaireType = $formulaire == "T-IDENTIF" ? $cheminBase."\\FormulaireType" : $cheminBase."\\FormulaireDeclaratifType";
            $noeudForm = new $cheminFormulaireType();
            $noeudForm->setMillesime($this->declarable->getMillesime());

            foreach($zones as $zone => $valeurs){
                foreach($valeurs as $valeur) {
                    $cheminZoneType = $cheminBase . "\\ZoneType";
                    $noeudZone = new $cheminZoneType();
                    $noeudZone->{"set" . ucfirst(strtolower($valeur))}($this->declarable->{"get" . str_replace('-', '', $formulaire) . ucfirst(strtolower($valeur)) . ucfirst(strtolower($zone))}());
                    $noeudForm->addToZone($noeudZone);
                }
            }

            if($formulaire == "T-IDENTIF") {
                $listeFormulaire->setIdentif($noeudForm);
            } else {
                $listeFormulaire->addToFormulaire($noeudForm);
            }
        }

        $declaration->setListeFormulaires($listeFormulaire);
        $groupeFonctionnel->setDeclaration([$declaration]);


        $encoders = array(new XmlEncoder('XmlEdi', LIBXML_NOBLANKS));
        $normalizers = array(new ObjectNormalizer());

        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, $encoders);
        $xml = $serializer->serialize($xmlEdi, 'xml');

        // on supprime les élements vide
        $doc = new \DOMDocument();
//        $doc->preserveWhiteSpace = false;
        $doc->loadxml($xml);
//
//        $xpath = new \DOMXPath($doc);
//
//        for($i=1;$i<=3;$i++) {
//            foreach ($xpath->query('//*[not(node())]') as $node) {
//                $node->parentNode->removeChild($node);
//            }
//        }


        return $doc->savexml();
    }


    public function getXmlPath()
    {
        return $this->container->get('kernel')->getRootDir().$this->container->getParameter('aspone2.xmlPath') . $this->declarable->getType();
    }

    public function saveXml()
    {
        $xml = new \SimpleXMLElement($this->getXml());
        $verif = new \DOMDocument();
        $verif->loadXML($xml->asXml());
//        if (!$verif->schemaValidate(__DIR__ . '/../Resources/xsd/' . 'XmlEdi' . $this->declarable->getAsponeDeclaration()->getGroupe() . '.xsd')) {
//            throw new \Exception('XML non valide', 0);
//        }

        if(!is_dir($this->getXmlPath())){
            @mkdir($this->getXmlPath());
        }
        $xml->saveXML($this->getXmlPath().'/'.$this->declarable->getId() . '.xml');

        return true;
    }


}