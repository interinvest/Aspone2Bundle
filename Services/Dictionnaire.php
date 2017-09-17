<?php
/**
 * Created by PhpStorm.
 * User: bmari
 * Date: 05/07/2017
 * Time: 14:41
 */

namespace InterInvest\Aspone2Bundle\Services;

/**
 * Class Dictionnaire
 */
class Dictionnaire
{
    private $groupe;
    private $annee;
    private $formulaire;
    public static $data;


    public function __construct()
    {
    }


    public function init($groupe, $annee, Array $formulaire)
    {
        $this->groupe = $groupe;
        $this->annee = $annee;
        $this->formulaire = $formulaire;
        $this->parseFichier();
    }

    public function parseFichier()
    {
        foreach (glob(__DIR__.'/../Resources/dictionnaires/*'.$this->groupe.'*.csv') as $filename) {
            if (($handle = fopen($filename, "r")) !== FALSE) {
                while (($line = fgetcsv($handle, 1000, ",")) !== FALSE) {
                    $line = explode(';', $line[0]);
                    self::$data[$line[0]][$line[1]][$line[2]][] = $line[7];
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
        $annee = substr($this->annee,-2);
        $zones = [];
        foreach($this->formulaire as $formulaire) {
            if(isset(self::$data[$formulaire][$annee])) {
                $zones[$formulaire] = self::$data[$formulaire][$annee];
            }
            if (isset(self::$data["T-IDENTIF"][$annee])) {
                $zones["T-IDENTIF"] = self::$data["T-IDENTIF"][$annee];
            }
            if (isset(self::$data["F-IDENTIF"][$annee])) {
                $zones["F-IDENTIF"] = self::$data["F-IDENTIF"][$annee];
            }
        }

        return $zones;
    }
}