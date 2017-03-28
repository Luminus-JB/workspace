<?php
/**
 * Created by PhpStorm.
 * User: pugju
 * Date: 28/03/2017
 * Time: 14:45
 */

function listFreePlace($list_total_place, $table)
{
    //Contient la connexion à la db
    include("includes/connect_db.php");
    //On récupère les numéros des emplacements déjà occupés
    $req = $db->query('SELECT place FROM ' . $table);
    //On récupère ce que renvoie la requête SQL et le met dans un tableau
    while ($donnees = $req->fetch()) {
        $list_empty_place[] = $donnees['place'];
    }
    // La fonction array_diff renvoie un array contenant les places libres
    return $list_free_place = array_diff($list_total_place, $list_empty_place);
    $req->closeCursor();
}

function nbrPlace($table)
{
    //Contient la connexion à la db
    include("includes/connect_db.php");
    //On récupère le nombre de lignes présente dans la db link_nav
    $req = $db->query('SELECT COUNT(*) FROM '. $table);
    $donnees = $req -> fetch();
    return $nbrPlace = $donnees['COUNT(*)'];
    $req -> closeCursor();
}