<?php
/**
 * Created by PhpStorm.
 * User: Lumi
 * Date: 18/04/2017
 * Time: 14:48
 */

//Si l'on veut déclarer plsr namespace dans un seul fichier il vaut mieux utiliser les accolades {}

namespace A
{
    function maPremiereFonction()
    {
        echo "A";
    }

}

namespace B
{
    function maPremiereFonction()
    {
        echo "B";
    }
}

//Si l'on veut écrire du code dans le namespace global il suffit d'en créer un nommé simplement namespace

namespace
{
    echo strlen("Hello World");
}

?>