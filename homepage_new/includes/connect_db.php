<?php
/**
 * Created by PhpStorm.
 * User: Lumi
 * Date: 18/02/2017
 * Time: 15:51
 */
try
{
    //Connexion db 1&1
    $db = new PDO('mysql:host=db677155240.db.1and1.com;dbname=db677155240;charset=utf8', 'dbo677155240', '*M1n3BDD*', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    //Connexion db locale
    //$db = new PDO('mysql:host=localhost;dbname=db_homepage', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
// Indique lors de la connexion au SGBD le jeu de caractères que nous souhaitons utiliser
$req = $db->query('SET NAMES utf8');
$req->closeCursor();
?>
