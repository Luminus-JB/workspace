<?php
/**
 * Created by PhpStorm.
 * User: Lumi
 * Date: 06/04/2017
 * Time: 15:55
 */
//  La fonction getimagesize retourne un tableau dont l'index 0 donne la largeur et l'index 1 la hauteur de l'image
$image_sizes = getimagesize($_FILES[$img]['tmp_name']);

//1. strrchr renvoie l'extension avec le point (« . »).
//2. substr(chaîne,1) ignore le premier caractère de chaîne.
//3. strtolower met l'extension en minuscules.
$extension_upload = strtolower(  substr(  strrchr($_FILES[$img]['name'], '.')  ,1)  );

if ($_FILES[$img]['error'] > 0) $erreur = "Erreur lors du transfert";
if ($_FILES[$img]['size'] > $maxsize) $erreur = "Le fichier est trop gros";
if (!in_array($extension_upload,$extensions_valides) ) $erreur = "Ce type de fichier n'est pas autorisé";
if ($image_sizes[0] > $maxwidth OR $image_sizes[1] > $maxheight) $erreur = "Image trop grande taille max 500 px (Largeur et Hauteur)";