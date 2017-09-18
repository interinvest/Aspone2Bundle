<?php

/** Makes a Declaration object from a Declarable object and use it */

namespace InterInvest\Aspone2Bundle\Services;

use InterInvest\Aspone2Bundle\Entity\AsponeDeclaration;
use InterInvest\Aspone2Bundle\ClassXml\Tva;
use JMS\Serializer\Handler\HandlerRegistryInterface;
use JMS\Serializer\Serializer;
use Symfony\Component\DependencyInjection\Container;
use InterInvest\Aspone2Bundle\Entity;
use JMS\Serializer\SerializerBuilder;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;


/**
 * Class Formulaire
 */
class Formulaire
{
    /* @var $kernel Kernel */
    protected $kernel;
    /* @var $declarable AsponeDeclaration \*/
    protected $declarable;
    /* @var $sDictionnaire Dictionnaire */
    protected $sDictionnaire;


    public function __construct(Kernel $kernel, Dictionnaire $sDictionnaire)
    {
        $this->kernel = $kernel;
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
        $getAdresseNumero = "get'.$name.'AdresseNumero";
        $adresseNumero = new $cheminAdresseNumero($this->declarable->$getAdresseNumero());

        if($name == 'TVA') {
            $cheminAdresseType = $cheminBase . "\\AdresseT";
        } else {
            $cheminAdresseType = $cheminBase . "\\AdresseType";
        }
        $getAdresseType = "get'.$name.'AdresseType";
        $adresseType = new $cheminAdresseType($this->declarable->$getAdresseType());

        $cheminAdresseVoie = $cheminBase."\\AdresseVoie";
        $getAdresseVoie = "get".$name."AdresseVoie";
        $adresseVoie = new $cheminAdresseVoie($this->declarable->$getAdresseVoie());

        $cheminAdresseComplement = $cheminBase."\\AdresseComplement";
        $getAdresseComplement = "get".$name."AdresseComplement";
        $adresseComplement = new $cheminAdresseComplement($this->declarable->$getAdresseComplement());

        $cheminAdresseHameau = $cheminBase."\\AdresseHameau";
        $getAdresseHameau = "get".$name."AdresseHameau";
        $adresseHameau = new $cheminAdresseHameau($this->declarable->$getAdresseHameau());

        $cheminAdresseCodePostal = $cheminBase."\\AdresseCodePostal";
        $getAdresseCodePostal = "get".$name."AdresseCodePostal";
        $adresseCodePostal = new $cheminAdresseCodePostal($this->declarable->$getAdresseCodePostal());

        $cheminAdresseVille = $cheminBase."\\AdresseVille";
        $getAdresseVille = "get".$name."AdresseVille";
        $adresseVille = new $cheminAdresseVille($this->declarable->$getAdresseVille());

        $cheminAdresseCodePays = $cheminBase."\\AdresseCodePays";
        $getAdresseCodePays = "get".$name."AdresseCodePays";
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
        $emetteur->setSiret($this->declarable->getEmmeteurSiret())
            ->setDesignation($this->declarable->getEmmeteurDesignation())
            ->setDesignationSuite1($this->declarable->getEmmeteurDesignationSuite1())
            ->setAdresse($this->getXmlAdresse($cheminBase, 'Emetteur'))
            ->setReferenceDossier($this->declarable->getEmmeteurReferenceDossier());
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
        $redevable->setIdentifiant($this->declarable->getRedevableIdentifiant())
            ->setDesignation($this->declarable->getRedevableDesignation())
            ->setDesignationSuite1($this->declarable->getRedevableDesignationSuite1())
            ->setAdresse($this->getXmlAdresse($cheminBase, 'Redevable'))
            ->setReferenceDossier($this->declarable->getRedevableReferenceDossier())
            ->setRof($this->declarable->getRedevableROF());
        $declaration->setRedevable($redevable);
        // - - - PartenaireEdi
        $cheminPartenaireEdi = $cheminBase."\\PartenaireEdiType";
        $partenaireEdi = new $cheminPartenaireEdi();
        $partenaireEdi->setIdentifiant($this->declarable->getPartenaireEdiIdentifiant())
            ->setDesignation($this->declarable->getPartenaireEdiDesignation())
            ->setDesignationSuite1($this->declarable->getPartenaireEdiDesignationSuite1())
            ->setAdresse($this->getXmlAdresse($cheminBase, 'PartenaireEdi'))
            ->setReferenceDossier($this->declarable->getPartenaireEdiReferenceDossier());
        $declaration->setPartenaireEdi($partenaireEdi);
        // - - - ListeDestinataire
        $cheminDestinataireType = $cheminBase."\\DestinataireType";
        $listeDestinataire = new $cheminDestinataireType();
        $listeDestinataire->setIdentifiant($this->declarable->getDestinataireIdentifiant())
            ->setDesignation($this->declarable->getDestinataireDesignation())
            ->setDesignationSuite1($this->declarable->getDestinataireDesignationSuite1())
            ->setAdresse($this->getXmlAdresse($cheminBase, 'Destinataire'))
            ->setReferenceDossier($this->declarable->getDestinataireReferenceDossier());
        $declaration-> addToListeDestinataires($listeDestinataire);
        // - - - ListeFormulaire
        $cheminDestinataireType = $cheminBase."\\ListeFormulairesType";
        $listeFormulaire = new $cheminDestinataireType();


        foreach($this->sDictionnaire->getZones() as $formulaire => $zones){
            $cheminFormulaireType = in_array($formulaire, ["T-IDENTIF","F-IDENTIF"]) ? $cheminBase."\\FormulaireType" : $cheminBase."\\FormulaireDeclaratifType";
            $noeudForm = new $cheminFormulaireType();
            $noeudForm->setMillesime($this->declarable->getMillesime());

            foreach($zones as $zone => $valeurs){
                $cheminZoneType = $cheminBase . "\\ZoneType";
                $noeudZone = new $cheminZoneType();
                foreach($valeurs as $valeur) {
                    $noeudZone->setId($zone);
                    $noeudZone->{"set". ucfirst(strtolower($valeur))}($this->declarable->{"get" . str_replace('-', '', $formulaire) . ucfirst(strtolower($valeur)) . ucfirst(strtolower($zone))}());
                }
                if(!empty($noeudZone)) {
                    $noeudForm->addToZone($noeudZone);
                }
            }

            if(in_array($formulaire, ["T-IDENTIF","F-IDENTIF"])) {
                $listeFormulaire->setIdentif($noeudForm);
            } else {
                $noeudForm->setNom($formulaire);
                $listeFormulaire->addToFormulaire($noeudForm);
            }
        }

        $declaration->setListeFormulaires($listeFormulaire);
        $groupeFonctionnel->setDeclaration([$declaration]);

        $serializer = SerializerBuilder::create()->build();
        $xml = $serializer->serialize($xmlEdi, 'xml');

        // on supprime les élements vide
        $doc = new \DOMDocument();
        $doc->preserveWhiteSpace = false;
        $doc->loadxml($xml);
        $xpath = new \DOMXPath($doc);

        for($i=1;$i<=6;$i++) {
            foreach ($xpath->query('//*[string-length() = 0]') as $node) {
                $node->parentNode->removeChild($node);
            }

            foreach ($xpath->query('//*[not(node())]') as $node) {
                $node->parentNode->removeChild($node);
            }
        }

        return $doc->savexml();
    }


    public function getXmlByFile()
    {
        return file_get_contents($this->getXmlPath().'/'.$this->declarable->getId() . '.xml');
    }



    public function getXmlPath()
    {
        return $this->kernel->getRootDir().$this->kernel->getContainer()->getParameter('aspone2.xmlPath') . $this->declarable->getType();
    }

    public function saveXml()
    {
        $xml = new \SimpleXMLElement($this->getXml());
        $verif = new \DOMDocument();
        $verif->loadXML($xml->asXml());

        if(!is_dir($this->getXmlPath())){
            @mkdir($this->getXmlPath());
        }
        $xml->saveXML($this->getXmlPath().'/'.$this->declarable->getId() . '.xml');

        return true;
    }
}
