<?php
/**
 * Created by PhpStorm.
 * User: pugju
 * Date: 15/03/2017
 * Time: 15:27
 */
//Le Header à inserer avant tout code html
header ("Content-type: image/jpeg");
//La fonction imagecreate prend 2 paramètres en compte la largeur puis la hauteur et renvoie un img
echo $image = imagecreate(200,50);
?>