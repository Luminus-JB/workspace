<?php
/**
 * Created by PhpStorm.
 * User: pugju
 * Date: 27/02/2017
 * Time: 17:11
 */
//Contient la connexion à la db
include("./includes/connect_db.php");
//Définition de la variable titre pour le <title>
$titre = "Lumi's Blog";
//Récupération de l'id du billet
$id_billet = $_GET['id'];
//Contient le header et le titre principal
include("./includes/debut.php");
//Affiche les billet selectionné et ses commentaires
include("./includes/show_comment_billet.php");
//Affiche le formulaire pour commenter
include("./includes/form_comment.php");

