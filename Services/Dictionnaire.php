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
        $this->annee = $annee;
        $this->formulaire = $formulaire;
    }

    public function parseFichier()
    {
        if(!$file = glob($this->kernel->locateResource('@Aspone2Bundle/Resources/dictionnaires/').'*'.$this->groupe.'*'.$this->annee.'*.csv')){
            $file =  glob($this->kernel->locateResource('@Aspone2Bundle/Resources/dictionnaires/').'*'.$this->groupe.'*.csv');
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
        if(count(array_diff($this->formulaire, array_keys(self::$data))) > 0) {
            $lines = $this->parseFichier();

            foreach ($lines as $line) {
                $valeurs = explode(',', $line[7]);
                foreach ($valeurs as $valeur) {
                    if ((in_array($line[0], $this->formulaire) || stristr($line[0], "IDENTIF")) && $line[1] == $this->annee) {
                        self::$data[$line[0]][$line[2]][] = $valeur;
                    }
                }
            }
        }

        return self::$data;
    }
}
