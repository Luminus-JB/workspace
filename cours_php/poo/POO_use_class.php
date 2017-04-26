<?php
/**
 * Created by PhpStorm.
 * User: Lumi
 * Date: 19/04/2017
 * Time: 09:29
 */
function chargerClasse($classe)
{
    require $classe . '.php'; // On inclut la classe correspondante au paramètre passé.
}

spl_autoload_register('chargerClasse'); // On enregistre la fonction en autoload pour qu'elle soit appelée dès qu'on instanciera une classe non déclarée.
/*
 * Créer un objet
 */

// Pour créer un nouvel objet, vous devez faire précéder le nom de la classe à instancier du mot-clé new
$perso1 = new Personnage(60,100);
$perso2 = new Personnage(50,20);

/*
 * Appeler les méthodes de l'objet
 */

// Pour appeler une méthode d'un objet, il va falloir utiliser un opérateur : il s'agit de l'opérateur ->


//Combat
$perso1->frapper($perso2);
$perso1->gagnerExperience(1);
$perso2->frapper($perso1);
$perso2->gagnerExperience(1);

echo 'la force du perso1 est de : ' . $perso1->force() . '<br/>';
echo 'l\'expérience du perso1 est de : ' . $perso1->experience() . '<br/>';
echo 'les degats du perso1 sont de : ' . $perso1->degats() . '<br/>';
echo '<br/>';
echo 'la force du perso2 est de : ' . $perso2->force() . '<br/>';
echo 'l\'expérience du perso2 est de : ' . $perso2->experience() . '<br/>';
echo 'les degats du perso2 sont de : ' . $perso2->degats() . '<br/>';
