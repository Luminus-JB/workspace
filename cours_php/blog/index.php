<?php
/**
 * Created by PhpStorm.
 * User: pugju
 * Date: 27/02/2017
 * Time: 16:34
 */
//Définition de la variable titre pour le <title>
$titre = "Lumi's Blog";
//Contient la connexion à la db
include("./includes/connect_db.php");
//Contient le header et le titre principal
include("./includes/debut.php");
// On récupère le nombre de billet présent ds la db
include("./includes/nbre_billets.php");
//Affiche les 5 derniers billets
include("./includes/show_billets.php");
//Affiche la pagination
include("./includes/pagination.php");