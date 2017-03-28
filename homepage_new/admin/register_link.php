<?php
/**
 * Created by PhpStorm.
 * User: Lumi
 * Date: 25/03/2017
 * Time: 15:35
 */
//Contient la connexion à la db
include("includes/connect_db.php");

// UPDATE la db avec les infos du formulaire HEAD
// On récupère et vérifie les données utilisateurs
if (isset($_POST['link_head'])) {
    // lien
    $link_head = $_POST['link_head'];
    // nom du lien
    $name_link_head = $_POST['name_link_head'];
    // place du lien à update
    $head_place_number = $_POST['head_place_number'];

    $req = $db->prepare('UPDATE link_head SET name_link = :name_link, link = :link WHERE place = :place');
    $req->execute(array(
        'name_link' => $name_link_head,
        'link' => $link_head,
        'place' => $head_place_number
    ));
    $req -> closeCursor();
    echo "Le lien n°" . $head_place_number . " de l'entête à bien été mis à jour <br/><br/><a href='admin.php'>retour à la configuration</a>";

// INSERT dans la db avec les infos du formulaire HEAD
// On récupère et vérifie les données utilisateurs
}else if (isset($_POST['add_link_head'])) {
    $add_link_head = $_POST['add_link_head'];
    $add_name_link_head = $_POST['add_name_link_head'];
    $add_place_link_head = $_POST['$add_place_link_head'];

    $req = $db->prepare('INSERT INTO link_head (place, name_link, link) VALUES (:place, :name_link, :link)');
    $req->execute(array(
        'name_link' => $add_name_link_head,
        'link' => $add_link_head,
        'place' => $add_place_link_head
    ));
    $req -> closeCursor();
    echo "Le lien n°" . $add_place_link_head . " de l'entête à bien été ajouté <br/><br/><a href='admin.php'>retour à la configuration</a>";

// UPDATE la db avec les infos du formulaire NAV
// On récupère et vérifie les données utilisateurs
}else if (isset($_POST['link_nav'])) {
    $link_nav = $_POST['link_nav'];
    $name_link_nav = $_POST['name_link_nav'];
    $nav_place_number = $_POST['nav_place_number'];

    $req = $db->prepare('UPDATE link_nav SET name_link = :name_link, link = :link WHERE place = :place');
    $req->execute(array(
        'name_link' => $name_link_nav,
        'link' => $link_nav,
        'place' => $nav_place_number
    ));
    $req -> closeCursor();
    echo "Le lien n°" . $nav_place_number . " du nav à bien été mis à jour <br/><br/><a href='admin.php'>retour à la configuration</a>";

// INSERT dans la db avec les infos du formulaire NAV
// On récupère et vérifie les données utilisateurs
}else if (isset($_POST['add_link_nav'])) {
    $add_link_nav = $_POST['add_link_nav'];
    $add_name_link_nav = $_POST['add_name_link_nav'];
    $add_place_link_nav = $_POST['$add_place_link_nav'];

    $req = $db->prepare('INSERT INTO link_nav (place, name_link, link) VALUES (:place, :name_link, :link)');
    $req->execute(array(
        'name_link' => $add_name_link_nav,
        'link' => $add_link_nav,
        'place' => $add_place_link_nav
    ));
    $req -> closeCursor();
    echo "Le lien n°" . $add_place_link_nav . " du nav à bien été ajouté <br/><br/><a href='admin.php'>retour à la configuration</a>";

// UPDATE la db avec les infos du formulaire GAMES
// On récupère et vérifie les données utilisateurs
}else if (isset($_POST['link_games'])) {
    $link_games = $_POST['link_games'];
    $name_link_games = $_POST['name_link_games'];
    $games_place_number = $_POST['games_place_number'];

    $req = $db->prepare('UPDATE link_games SET name_link = :name_link, link = :link WHERE place = :place');
    $req->execute(array(
        'name_link' => $name_link_games,
        'link' => $link_games,
        'place' => $games_place_number
    ));
    $req -> closeCursor();
    echo "Le lien n°" . $games_place_number . " de la partie games à bien été mis à jour <br/><br/><a href='admin.php'>retour à la configuration</a>";

// INSERT dans la db avec les infos du formulaire GAMES
// On récupère et vérifie les données utilisateurs
}else if (isset($_POST['add_link_games'])) {
    $add_link_games = $_POST['add_link_games'];
    $add_name_link_games = $_POST['add_name_link_games'];

    //On récupère le nombre de lignes présente dans la db link_games
    $req = $db->query('SELECT COUNT(*) FROM link_games');
    $donnees = $req->fetch();
    $req->closeCursor();
    $id = $donnees['COUNT(*)'] + 1;

    $req = $db->prepare('INSERT INTO link_games (id, name_link, link) VALUES (:id, :name_link, :link)');
    $req->execute(array(
        'name_link' => $add_name_link_games,
        'link' => $add_link_games,
        'id' => $id
    ));
    $req->closeCursor();
    echo "Le lien n°" . $id . " de la partie games à bien été ajouté <br/><br/><a href='admin.php'>retour à la configuration</a>";

}
