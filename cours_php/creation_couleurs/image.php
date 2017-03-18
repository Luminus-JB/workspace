<?php
/**
 * Created by PhpStorm.
 * User: pugju
 * Date: 15/03/2017
 * Time: 15:27
 */
header ("Content-type: image/png");//On prévient que le nav va devoir renvoyer une img
$image = imagecreate(200,50);//Création de l'img avec ses paramètres largeur et hauteur

$orange = imagecolorallocate($image, 255, 128, 0);
$bleu = imagecolorallocate($image, 0, 0, 255);
$bleuclair = imagecolorallocate($image, 156, 227, 254);
$noir = imagecolorallocate($image, 0, 0, 0);
$blanc = imagecolorallocate($image, 255, 255, 255);

imagepng($image);
?>