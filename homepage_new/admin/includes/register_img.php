<?php
/**
 * Created by PhpStorm.
 * User: Lumi
 * Date: 06/04/2017
 * Time: 17:14
 */

$name_img = md5(uniqid(rand(), true));
$destination = "../img/{$name_img}.{$extension_upload}";
$resultat = move_uploaded_file($_FILES[$img]['tmp_name'],$destination);