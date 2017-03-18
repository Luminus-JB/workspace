<?php
/**
 * Created by PhpStorm.
 * User: pugju
 * Date: 15/03/2017
 * Time: 15:27
 */
header ("Content-type: image/png"); // 1 : on indique qu'on va envoyer une image PNG
$image = imagecreatefromjpeg("img/god_of_gaming.jpg");

// 3 : on s'amuse avec notre image (on va apprendre à le faire)
imagejpeg($image); // on enregistre l'image dans le dossier "images"
?>