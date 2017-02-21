<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 18/02/2017
 * Time: 16:12
 */
//Contient la connexion à la db
include("includes/connect_db.php");
//On récupère les variables envoyés par le formulaire
$pseudo = $_POST['pseudo'];
$message = $_POST['message'];
setcookie('pseudo_user', $pseudo, time() + 30*24*3600, null, null, false, true);

$req = $db->prepare('INSERT INTO chat(pseudo, message, time_post) VALUES(:pseudo , :message, NOW())');
$req->execute(array(
'pseudo' => $pseudo,
'message' => $message
));

header('Location: index.php');
?>