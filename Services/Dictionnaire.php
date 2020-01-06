<?php
/**
 * Created by PhpStorm.
 * User: bmari
 * Date: 05/07/2017
 * Time: 14:41
 */

namespace InterInvest\Aspone2Bundle\Services;
use Symfony\Component\HttpKernel\Kernel;

/**
 * Class Dictionnaire
 */
class Dictionnaire
{

    private $kernel;
    private $groupe;
    private $annee;
    private $formulaire;
    public static $data = [];


    public function __construct(Kernel $kernel)
    {
        $this->kernel = $kernel;
    }


    public function init($groupe, $annee, Array $formulaire)
    {
        $this->groupe = $groupe;
        $this->annee = $annee < substr(Date('Y') - 1,-2) ? substr(Date('Y') - 1,-2) : $annee;
        $this->formulaire = $formulaire;
    }

    public function parseFichier()
    {
        if(!$file = glob($this->kernel->locateResource('@Aspone2Bundle/Resources/dictionnaires/').'*'.$this->groupe.'*'.$this->annee.'*.csv') or $this->formulaire == '3519'){
            $file =  glob($this->kernel->locateResource('@Aspone2Bundle/Resources/dictionnaires/').'*'.$this->groupe.'*'.Date('y').'*.csv');
            $this->annee = \substr($file[0], -6, 2);
        }

        foreach ( $file as $filename) {
            if (($handle = fopen($filename, "r")) !== FALSE) {
                while (($line = fgetcsv($handle, 1000, ";")) !== FALSE) {
                    yield $line;
                }
                fclose($handle);
            }
        }
    }


    /**
     * @return array
     */
    public function getZones()
    {
        if(!isset(self::$data[$this->formulaire[0]]) || (isset(self::$data[$this->formulaire[0]]) && !isset(self::$data[$this->formulaire[0]][$this->annee]))) {
                $lines = $this->parseFichier();

                foreach ($lines as $line) {
                    $valeurs = explode(',', $line[7]);
                    foreach ($valeurs as $valeur) {
                        if ((in_array($line[0], $this->formulaire) || stristr($line[0], "IDENTIF")) && $line[1] == $this->annee) {
                            // formulaire - annee - zone - balise xml => repetable
                            self::$data[$line[0]][$line[1]][$line[2]][] = [$valeur => $line[5]];
                        }
                    }
                }


            
//            if(count(array_diff($this->formulaire, array_keys(self::$data))) > 0) {
//                $annee = Date('y');
//                $formulaire = array_diff($this->formulaire, array_keys(self::$data));
//
//                $lines = $this->parseFichier();
//                foreach ($lines as $line) {
//                    $valeurs = explode(',', $line[7]);
//                    foreach ($valeurs as $valeur) {
//                        if ((in_array($line[0], $formulaire) || stristr($line[0], "IDENTIF")) && $line[1] == $annee) {
//                            self::$data[$line[0]][$line[1]][$line[2]][] = [$valeur => $line[5]];
//                        }
//                    }
//                }
//            }
        }

        return self::$data;
    }
}
