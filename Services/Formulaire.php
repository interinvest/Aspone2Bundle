<?php

/** Makes a Declaration object from a Declarable object and use it */

namespace InterInvest\Aspone2Bundle\Services;

use InterInvest\Aspone2Bundle\ClassXml\Tdfc\OccurrenceType;
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
    
    protected $indexPage;


    public function __construct(Kernel $kernel, Dictionnaire $sDictionnaire)
    {
        $this->kernel = $kernel;
        $this->sDictionnaire = $sDictionnaire;
    }


    public function init($declarable, $indexPage = null)
    {
        $this->declarable = $declarable;
        $this->indexPage = $indexPage;

        $formulaires = explode(',', $this->declarable->getFormulaires());
        $this->sDictionnaire->init($this->declarable->getGroupe(), substr($this->declarable->getMillesime(),-2), $formulaires);

    }

    public function getPathClassXml()
    {
        return "InterInvest\\Aspone2Bundle\\ClassXml\\".ucfirst(strtolower($this->declarable->getGroupe()));
    }

    public function getXml()
    {
        if(file_exists($this->getXmlPath().'/'.$this->declarable->getId() . '.xml')) {
            $xml = file_get_contents($this->getXmlPath() . '/' . $this->declarable->getId() . '.xml');
        } else {
            $xml = $this->getSerializeXml($this->getRootXml());
        }

        return $xml;
    }

    public function getXmlAdresse($name)
    {
        $cheminAdresseNumero = $this->getPathClassXml()."\\AdresseNumero";
        $getAdresseNumero = "get'.$name.'AdresseNumero";
        $adresseNumero = new $cheminAdresseNumero($this->declarable->$getAdresseNumero());

        if($name == 'TVA') {
            $cheminAdresseType = $this->getPathClassXml() . "\\AdresseT";
        } else {
            $cheminAdresseType = $this->getPathClassXml() . "\\AdresseType";
        }
        $getAdresseType = "get'.$name.'AdresseType";
        $adresseType = new $cheminAdresseType($this->declarable->$getAdresseType());

        $cheminAdresseVoie = $this->getPathClassXml()."\\AdresseVoie";
        $getAdresseVoie = "get".$name."AdresseVoie";
        $adresseVoie = new $cheminAdresseVoie($this->declarable->$getAdresseVoie());

        $cheminAdresseComplement = $this->getPathClassXml()."\\AdresseComplement";
        $getAdresseComplement = "get".$name."AdresseComplement";
        $adresseComplement = new $cheminAdresseComplement($this->declarable->$getAdresseComplement());

        $cheminAdresseHameau = $this->getPathClassXml()."\\AdresseHameau";
        $getAdresseHameau = "get".$name."AdresseHameau";
        $adresseHameau = new $cheminAdresseHameau($this->declarable->$getAdresseHameau());

        $cheminAdresseCodePostal = $this->getPathClassXml()."\\AdresseCodePostal";
        $getAdresseCodePostal = "get".$name."AdresseCodePostal";
        $adresseCodePostal = new $cheminAdresseCodePostal($this->declarable->$getAdresseCodePostal());

        $cheminAdresseVille = $this->getPathClassXml()."\\AdresseVille";
        $getAdresseVille = "get".$name."AdresseVille";
        $adresseVille = new $cheminAdresseVille($this->declarable->$getAdresseVille());

        $cheminAdresseCodePays = $this->getPathClassXml()."\\AdresseCodePays";
        $getAdresseCodePays = "get".$name."AdresseCodePays";
        $adresseCodePays = new $cheminAdresseCodePays($this->declarable->$getAdresseCodePays());

        $cheminAdresse = $this->getPathClassXml()."\\Adresse";
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

    public function getRootXml()
    {
        try {
            // XmlEdi
            $cheminXmlEdi = $this->getPathClassXml() . "\\XmlEdi";
            $xmlEdi = new $cheminXmlEdi();
            $xmlEdi->setTest($this->declarable->getIstest() ? 1 : 0);
            // - GroupeFonctionnel
            $cheminGroupeFonctionnel = $this->getPathClassXml() . "\\GroupeFonctionnelType";
            $groupeFonctionnel = new $cheminGroupeFonctionnel();
            $groupeFonctionnel->setType("INFENT");
            $xmlEdi->setGroupeFonctionnel($groupeFonctionnel);

            $groupeFonctionnel->setDeclaration([$this->getXmlElementDeclaration()]);
        } catch (\Exception $E) {
            throw new \Exception('Problème lors de la création du XML pour la déclaration '.$this->declarable->getId().' : '. $E->getMessage(), 0);
        }
        return $xmlEdi;
    }

    public function getXmlElementDeclaration()
    {
        // - - Declaration
        $cheminDeclaration = $this->getPathClassXml()."\\Declaration";
        $declaration = new $cheminDeclaration();
        $declaration->setType($this->declarable->getType());
        $declaration->setReference($this->declarable->getReferenceDeclaration());
        // - - - Emetteur
        $cheminEmetteur = $this->getPathClassXml()."\\EmetteurType";
        $emetteur = new $cheminEmetteur();
        $emetteur->setSiret($this->declarable->getEmmeteurSiret())
            ->setDesignation($this->declarable->getEmmeteurDesignation())
            ->setDesignationSuite1($this->declarable->getEmmeteurDesignationSuite1())
            ->setAdresse($this->getXmlAdresse('Emetteur'))
            ->setReferenceDossier($this->declarable->getEmmeteurReferenceDossier());
        $declaration->setEmetteur($emetteur);
        // - - - Redacteur
        $cheminRedacteur = $this->getPathClassXml()."\\RedacteurType";
        $redacteur = new $cheminRedacteur();
        $redacteur->setSiret($this->declarable->getRedacteurSiret())
            ->setDesignation($this->declarable->getRedacteurDesignation())
            ->setDesignationSuite1($this->declarable->getRedacteurDesignationSuite())
            ->setAdresse($this->getXmlAdresse('Redacteur'));
        $declaration->setRedacteur($redacteur);
        // - - - Redevable
        $cheminRedevable = $this->getPathClassXml()."\\RedevableType";
        $redevable = new $cheminRedevable();
        $redevable->setIdentifiant($this->declarable->getRedevableIdentifiant())
            ->setDesignation($this->declarable->getRedevableDesignation())
            ->setDesignationSuite1($this->declarable->getRedevableDesignationSuite1())
            ->setAdresse($this->getXmlAdresse('Redevable'))
            ->setReferenceDossier($this->declarable->getRedevableReferenceDossier())
            ->setRof($this->declarable->getRedevableROF());
        $declaration->setRedevable($redevable);
        // - - - PartenaireEdi
        $cheminPartenaireEdi = $this->getPathClassXml()."\\PartenaireEdiType";
        $partenaireEdi = new $cheminPartenaireEdi();
        $partenaireEdi->setIdentifiant($this->declarable->getPartenaireEdiIdentifiant())
            ->setDesignation($this->declarable->getPartenaireEdiDesignation())
            ->setDesignationSuite1($this->declarable->getPartenaireEdiDesignationSuite1())
            ->setAdresse($this->getXmlAdresse('PartenaireEdi'))
            ->setReferenceDossier($this->declarable->getPartenaireEdiReferenceDossier());
        $declaration->setPartenaireEdi($partenaireEdi);
        // - - - ListeDestinataire
        $cheminDestinataireType = $this->getPathClassXml()."\\DestinataireType";
        $listeDestinataire = new $cheminDestinataireType();
        $listeDestinataire->setIdentifiant($this->declarable->getDestinataireIdentifiant())
            ->setDesignation($this->declarable->getDestinataireDesignation())
            ->setDesignationSuite1($this->declarable->getDestinataireDesignationSuite1())
            ->setAdresse($this->getXmlAdresse('Destinataire'))
            ->setReferenceDossier($this->declarable->getDestinataireReferenceDossier());
        $declaration-> addToListeDestinataires($listeDestinataire);
        // - - - ListeFormulaire
        $cheminDestinataireType = $this->getPathClassXml()."\\ListeFormulairesType";
        $listeFormulaire = new $cheminDestinataireType();

        foreach($this->sDictionnaire->getZones() as $formulaire => $values){
            foreach($values as $annee => $zones) {
                $formulaireDeclarable = $this->declarable->getGroupe() == 'TDFC' ? ["F-IDENTIF"] : ["T-IDENTIF"];
                $formulaireDeclarable = array_merge(explode(',', $this->declarable->getFormulaires()), $formulaireDeclarable);
                if (!in_array($formulaire, $formulaireDeclarable)) {
                    continue;
                }

                $cheminFormulaireType = in_array($formulaire, ["T-IDENTIF", "F-IDENTIF"]) ? $this->getPathClassXml() . "\\FormulaireType" : $this->getPathClassXml() . "\\FormulaireDeclaratifType";
                $noeudForm = new $cheminFormulaireType();
                $noeudForm->setMillesime($annee);
                if($this->indexPage && $formulaire == 'ANNEXLIB01') {
                    $noeudForm->setNom("ANNEXLIB01");
                    $noeudForm->setRepetition("1");
                }
                
                foreach ($zones as $zone => $listeBalises) {

                    $cheminZoneType = $this->getPathClassXml() . "\\ZoneType";
                    $noeudZone = new $cheminZoneType();
                    $noeudZone->setId($zone);

                    $indexs = method_exists($this->declarable, "get" . str_replace('-', '', $formulaire) . "Indexes".$zone) ? $this->declarable->{"get" . str_replace('-', '', $formulaire) . "Indexes".$zone}() : [1];
                    if($this->indexPage && !in_array($formulaire, ["T-IDENTIF", "F-IDENTIF", "ANNEXLIB01"])) {
                        $start = ($this->indexPage * 1900) - 1900;
                        $indexs = array_slice($indexs, $start, 1900);
                    }
                    
                    foreach($indexs as $key => $index) {
                        $cheminTypeOccurrence = $this->getPathClassXml() . "\\OccurrenceType";
                        $noeudOccurrence = null;
                        if($this->declarable->getGroupe() == 'TDFC') {
                            $noeudOccurrence = new $cheminTypeOccurrence;
                            $noeudOccurrence->setNumero($key + 1);
                        }

                        foreach ($listeBalises as $baliseXML) {
                            foreach ($baliseXML as $valeur => $repetable) {
                                $valeur = trim($valeur) == "AdresseType" ? "adresseT" : trim($valeur);
                                //$nomFonction = "set" . ucfirst($valeur)."(".$this->declarable->{"get" . str_replace('-', '', $formulaire) . ucfirst(strtolower(trim($valeur))) . strtoupper($zone)}($param).")";
                                if($repetable == 'OUI'){
                                    $noeudOccurrence->{"set" . ucfirst($valeur)}($this->declarable->{"get" . str_replace('-', '', $formulaire) . ucfirst(strtolower(trim($valeur))) . strtoupper($zone)}($index));
                                } else {
                                    $noeudZone->{"set" . ucfirst($valeur)}($this->declarable->{"get" . str_replace('-', '', $formulaire) . ucfirst(strtolower(trim($valeur))) . strtoupper($zone)}());
                                }
                            }
                        }
                        if (!empty($noeudOccurrence)) {
                            $noeudZone->addToOccurrence($noeudOccurrence);
                        }
                    }
                    if (!empty($noeudZone)) {
                        $noeudForm->addToZone($noeudZone);
                    }
                }

                if (in_array($formulaire, ["T-IDENTIF", "F-IDENTIF"])) {
                    $listeFormulaire->setIdentif($noeudForm);
                } else {
                    $noeudForm->setNom($formulaire);
                    $listeFormulaire->addToFormulaire($noeudForm);
                }
            }
        }

        $declaration->setListeFormulaires($listeFormulaire);

        return $declaration;
    }

    public function getSerializeXml($xml)
    {
        $serializer = SerializerBuilder::create()->build();
        $xml = $serializer->serialize($xml, 'xml');
        $content = mb_convert_encoding(str_replace('UTF-8', 'ISO-8859-15', $xml), 'ISO-8859-15', 'UTF-8');

        // on supprime les élements vide
        $doc = new \DOMDocument("1.0", "ISO-8859-15");
        $doc->preserveWhiteSpace = false;
        $doc->loadxml($content, LIBXML_NOCDATA);
        $xpath = new \DOMXPath($doc);

        for($i=1;$i<=6;$i++) {
            foreach ($xpath->query('//*[string-length() = 0]') as $node) {
                $node->parentNode->removeChild($node);
            }

            foreach ($xpath->query('//*[not(node())]') as $node) {
                $node->parentNode->removeChild($node);
            }
        }

        try {
            $doc->schemaValidate($this->kernel->locateResource('@Aspone2Bundle/Resources/xsd/XmlEdi' . ucfirst(strtolower($this->declarable->getGroupe())) . '.xsd'));
        } catch (\Exception $E) {
            throw new \Exception ('Erreur lors de la validation du XML : '. $E->getMessage(), 0);
        }

        return $doc->savexml();
    }

    public function getXmlPathComplete()
    {
        return $this->kernel->getRootDir().$this->kernel->getContainer()->getParameter('aspone2.xmlPath') . $this->declarable->getType() .'/'.$this->declarable->getId() . '.xml';
    }

    public function getXmlPath()
    {
        return $this->kernel->getRootDir().$this->kernel->getContainer()->getParameter('aspone2.xmlPath') . $this->declarable->getType();
    }

    public function saveXml()
    {
        $xml = $this->getXml();

        if(!is_dir($this->getXmlPath())){
            @mkdir($this->getXmlPath());
        }

        file_put_contents($this->getXmlPath().'/'.$this->declarable->getId() . '.xml', $xml);

        return true;
    }
}
