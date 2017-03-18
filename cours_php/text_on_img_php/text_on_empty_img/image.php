<?php
/**
 * Created by PhpStorm.
 * User: pugju
 * Date: 15/03/2017
 * Time: 15:27
 */
header ("Content-type: image/png");//On prévient que le nav va devoir renvoyer une img
$image = imagecreate(300,50);//Création de l'img avec ses paramètres largeur et hauteur

//Création des couleurs RVB (Rouge - Vert - Bleu) - C'est la 1ere qui sera pris en compte
$bleuclair = imagecolorallocate($image, 156, 227, 254);
$orange = imagecolorallocate($image, 255, 128, 0);
$bleu = imagecolorallocate($image, 0, 0, 255);
$noir = imagecolorallocate($image, 0, 0, 0);
$blanc = imagecolorallocate($image, 255, 255, 255);

/*
 * imagestring($image, $police, $x, $y, $texte_a_ecrire, $couleur);
 * $police = 1 nbre de 1 à 5
 * $x et $y = ce sont les coordonnées auxquelles vous voulez placez votre texte sur l'image
 * $couleur = couleur du texte
 * Il existe aussi la fonctionimagestringup qui fonctionne exactement de la même manière, sauf qu'elle écrit le texte verticalement et non horizontalement !
 */

imagestring($image, 4, 35, 15, utf8_decode("Salut les Zéros !"), $blanc);//On utilise la fonction utf8_decode pour la bon affichage du é
imagepng($image);//fonction affichant l'image contenu ds la variable $image
?>