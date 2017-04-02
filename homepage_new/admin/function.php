<?php
/**
 * Created by PhpStorm.
 * User: pugju
 * Date: 28/03/2017
 * Time: 14:45
 */

function listFreePlace($table, $list_total_place)
{
    //Contient la connexion à la db
    include("includes/connect_db.php");
    //On récupère les numéros des emplacements déjà occupés
    $req = $db->query('SELECT place FROM ' . $table . ' ORDER BY place ASC ');
    //On récupère ce que renvoie la requête SQL et le met dans un tableau
    while ($donnees = $req->fetch()) {
        $list_empty_place[] = $donnees['place'];
    }
    // La fonction array_diff renvoie un array contenant les places libres
    return $list_free_place = array_diff($list_total_place, $list_empty_place);
    $req->closeCursor();
}

function listEmptyPlace($table)
{
    //Contient la connexion à la db
    include("includes/connect_db.php");
    //On récupère les numéros des emplacements déjà occupés
    $req = $db->query('SELECT place FROM ' . $table . ' ORDER BY place ASC ');
    //On récupère ce que renvoie la requête SQL et le met dans un tableau
    while ($donnees = $req->fetch()) {
        $list_empty_place[] = $donnees['place'];
    }
    return $list_empty_place;
}

function nbrPlace($table)
{
    //Contient la connexion à la db
    include("includes/connect_db.php");
    //On récupère le nombre de lignes présente dans la db link_nav
    $req = $db->query('SELECT COUNT(*) FROM ' . $table);
    $donnees = $req->fetch();
    return $nbrPlace = $donnees['COUNT(*)'];
    $req->closeCursor();
}

function freeOrFull($list_free_place)
{
    if (empty($list_free_place)) {
        return $full = 'full';
    } else {
        return $free = 'free';
    }
}

function updateLink($table, $name_link, $link, $place_number)
{
    include("includes/connect_db.php");
    $req = $db->prepare('UPDATE ' . $table . ' SET name_link = :name_link, link = :link WHERE place = :place');
    $req->execute(array(
        'name_link' => $name_link,
        'link' => $link,
        'place' => $place_number
    ));
    $req->closeCursor();
}

function updateLinkImage($table, $name_link, $link, $place_number, $img_link)
{
    include("includes/connect_db.php");
    $req = $db->prepare('UPDATE ' . $table . ' SET name_link = :name_link, link = :link, img_link = :img_link WHERE place = :place');
    $req->execute(array(
        'name_link' => $name_link,
        'link' => $link,
        'place' => $place_number,
        'img_link' => $img_link
    ));
    $req->closeCursor();
}

function insertLink($table, $add_name_link, $add_link, $add_place_number)
{
    include("includes/connect_db.php");
    $req = $db->prepare('INSERT INTO ' . $table . ' (place, name_link, link) VALUES (:place, :name_link, :link)');
    $req->execute(array(
        'name_link' => $add_name_link,
        'link' => $add_link,
        'place' => $add_place_number
    ));
    $req->closeCursor();
}

function insertLinkImage($table, $add_name_link, $add_link, $add_place_number, $img_link)
{
    include("includes/connect_db.php");
    $req = $db->prepare('INSERT INTO ' . $table . ' (place, name_link, link, img_link) VALUES (:place, :name_link, :link, :img_link)');
    $req->execute(array(
        'name_link' => $add_name_link,
        'link' => $add_link,
        'place' => $add_place_number,
        'img_link' => $img_link
    ));
    $req->closeCursor();
}

function deleteLink($table, $delete)
{
    include("includes/connect_db.php");
    $req = $db->prepare('DELETE FROM ' . $table . ' WHERE place = :place');
    $req->execute(array(
        'place' => $delete
    ));
    $req->closeCursor();
}