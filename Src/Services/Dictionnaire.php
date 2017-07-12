<?php
/**
 * Created by PhpStorm.
 * User: bmari
 * Date: 05/07/2017
 * Time: 14:41
 */

namespace InterInvest\Bundle\Aspone\Src\Services;

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
    }

    public function parseFichier()
    {
        foreach (glob(__DIR__.'/../Resources/dictionnaires/*'.$this->groupe.'*.csv') as $filename) {
            if (($handle = fopen($filename, "r")) !== FALSE) {
                while (($line = fgetcsv($handle, 1000, ",")) !== FALSE) {
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
        $zones = [];
        foreach($this->formulaire as $formulaire) {
            if(isset(self::$data[$formulaire][$this->annee])) {
                $zones["T-IDENTIF"] = self::$data["T-IDENTIF"][$this->annee];
            }
            if (isset(self::$data["T-IDENTIF"][$this->annee])) {
                $zones[$formulaire] = self::$data[$formulaire][$this->annee];

                return $zones;
            }
        }

        return $zones;
    }
}