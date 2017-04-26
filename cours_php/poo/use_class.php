<?php
/**
 * Created by PhpStorm.
 * User: Lumi
 * Date: 24/04/2017
 * Time: 15:31
 */

function chargerClasse($classe)
{
    require $classe . '.php';
}

spl_autoload_register('chargerClasse');

$perso1 = new Personnage(Personnage::FORCE_MOYENNE, 0);
$perso2 = new Personnage(Personnage::FORCE_PETITE, 0);
$perso3 = new Test(Test::COMPTE_TEST, 'barras', 'julien', 27);

$perso1->frapper($perso2);
$perso2->frapper($perso1);

echo $perso2->getPv() . '<br/>';
echo $perso1->getPv();

//Deux facon différente d'appeler une méthode statique, préférer la seconde
echo '<br/>';
$perso2->parler();
echo '<br/>';
Personnage::parler();
echo '<br/>';

$compteur1 = new Compteur();
echo '<br/>';
echo Compteur::nbreInstanciation();
echo '<br/>';
$compteur2 = new Compteur();
echo '<br/>';
echo Compteur::nbreInstanciation();
echo '<br/>';
$compteur3 = new Compteur();
echo '<br/>';
echo Compteur::nbreInstanciation();
echo '<br/>';
