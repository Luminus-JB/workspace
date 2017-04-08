<?php
/**
 * Created by PhpStorm.
 * User: pugju
 * Date: 29/03/2017
 * Time: 17:30
 */

function listLink($table)
{
    //Contient la connexion à la db
    include("includes/connect_db.php");
    //On récupère les numéros des emplacements déjà occupés
    $req = $db->query('SELECT link FROM ' . $table . ' ORDER BY place ASC ');
    while($donnees = $req->fetch()){
        $list_link[] = $donnees['link'];
    }
    $req->closeCursor();
    return $list_link;
}

function listNameLink($table)
{
    //Contient la connexion à la db
    include("includes/connect_db.php");
    //On récupère les numéros des emplacements déjà occupés
    $req = $db->query('SELECT name_link FROM ' . $table . ' ORDER BY place ASC ');
    while($donnees = $req->fetch()){
        $list_name_link[] = $donnees['name_link'];
    }
    $req->closeCursor();
    return $list_name_link;
}

function listImageLink($table)
{
    //Contient la connexion à la db
    include("includes/connect_db.php");
    //On récupère les numéros des emplacements déjà occupés
    $req = $db->query('SELECT img_link FROM ' . $table . ' ORDER BY place ASC ');
    while($donnees = $req->fetch()){
        $list_img_link[] = $donnees['img_link'];
    }
    $req->closeCursor();
    return $list_img_link;
}

function ImgWallpaper($table)
{
    //Contient la connexion à la db
    include("includes/connect_db.php");
    //On récupère les numéros des emplacements déjà occupés
    $req = $db->query('SELECT wallpaper FROM ' . $table);
    while($donnees = $req->fetch()){
        return $img_link = $donnees['wallpaper'];
    }
    $req->closeCursor();
}

