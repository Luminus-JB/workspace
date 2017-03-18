<?php
/**
 * Created by PhpStorm.
 * User: pugju
 * Date: 15/03/2017
 * Time: 15:27
 */
$image = imagecreatefromjpeg("img/god_of_gaming.jpg");
imagejpeg($image, "images/monimage.png"); // on enregistre l'image dans le dossier "images"
?>