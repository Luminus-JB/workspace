<?php
/**
 * Created by PhpStorm.
 * User: pugju
 * Date: 28/02/2017
 * Time: 14:52
 */
//Contient la connexion à la db
include("includes/connect_db.php");
//On récupère les variables envoyées par le formulaire
$auteur = $_POST['auteur'];
$commentaire = $_POST['commentaire'];
$id_billet = $_POST['id_billet'];

$req = $db->prepare('INSERT INTO commentaires(id_billet, auteur, commentaire, date_commentaire) VALUES(:id_billet, :auteur, :commentaire, NOW())');
$req->execute(array(
    'auteur' => $auteur,
    'commentaire' => $commentaire,
    'id_billet' => $id_billet
));
header('Location: commentaires.php?id='. $id_billet);
?>