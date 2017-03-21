<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 18/02/2017
 * Time: 15:51
 */
try
{
    $db = new PDO('mysql:host=db643990396.db.1and1.com;dbname=db643990396;charset=utf8', 'dbo643990396', '*M1n3BDD*', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>
