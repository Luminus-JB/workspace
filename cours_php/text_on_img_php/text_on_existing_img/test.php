<?php
/**
 * Created by PhpStorm.
 * User: pugju
 * Date: 17/03/2017
 * Time: 09:14
 */

header ("Content-type: image/png");
$image = imagecreatefromjpeg("img/elsa.png");
$noir = imagecolorallocate($image, 0, 0, 0);


imagestring($image, 5, 30, 30, "Ceci est un test avec Michonne", $noir);

imagepng($image);
?>