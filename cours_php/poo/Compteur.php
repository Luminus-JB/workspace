<?php
/**
 * Created by PhpStorm.
 * User: Lumi
 * Date: 26/04/2017
 * Time: 14:46
 */

class Compteur {

    private static $_nbre_instanciation;


    public function __construct()
    {
        echo 'Objet bien crée';
        self::$_nbre_instanciation++;
    }
    public static function nbreInstanciation()
    {
        echo self::$_nbre_instanciation;
    }


}