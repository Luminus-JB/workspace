<?php
/**
 * Created by PhpStorm.
 * User: pugju
 * Date: 29/03/2017
 * Time: 15:00
 */
//Contient les fonctions
include("function.php");
$table = 'link_head';
$list_link = listLink($table);
$list_name_link = listNameLink($table);

//Créer un identifiant difficile à deviner
 echo $nom = md5(uniqid(rand(), true));



