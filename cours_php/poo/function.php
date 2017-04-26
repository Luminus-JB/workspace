<?php
/**
 * Created by PhpStorm.
 * User: Lumi
 * Date: 21/04/2017
 * Time: 11:44
 */

function chargerClasse($classe)
{
    require $classe . '.php'; // On inclut la classe correspondante au paramètre passé.
}