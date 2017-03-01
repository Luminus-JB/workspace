<?php
/**
 * Created by PhpStorm.
 * User: pugju
 * Date: 01/03/2017
 * Time: 15:47
 */
// On récupère le nombre de billet présent ds la db
$reponse = $db->query('SELECT COUNT(*) AS nbre_billets FROM billets');
$donnees = $reponse->fetch();
?>