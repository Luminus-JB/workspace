<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 18/02/2017
 * Time: 15:47
 */
//Définition de la variable titre pour le <title>
$titre = "minichat";
//Contient la connexion à la db
include("./includes/connect_db.php");
//Contient le header
include("./includes/debut.php");
//Formulaire saisie pseudo & message
include("./includes/formulaire.php");
//Affiche les derniers messages et le bouton actualiser
include("./includes/show.php");


//Si on peut récupérer la variable superglobales GET
if (isset($_GET['precedent'])) {
    $valeur = (int) $_GET['precedent'] + 1;//incrementation de la variable
    //Si il ya plus de 10 messages dans l'historique
    if ($donnees_max_historique['maximum'] > 10) {
        //Permet de ne pas afficher plus de message que l'historique en contient
        // Moins les 10 messages actuellement afficher
        if ($valeur >= $donnees_max_historique['maximum'] - 10) {
            $valeur = $donnees_max_historique['maximum'] - 10;
        }
    }
}else if (isset($_GET['suivant'])){
    $valeur = (int) $_GET['suivant'] - 1;//décrécrementation
    // Afficher des messages qui n'existe pas n'a aucun intérêt on verouille donc à 0
    if ($valeur <= 0){
        $valeur = 0;
    }
}else{
    $valeur = 1;//Si pas de variable superglobales
}
//ferme la div contenant l'affichage des messages et ouvre le conteneur des liens
echo '</div><div id="historique">
<!-- Lien permettant le transfert de la valeur à la requête SQL permettant laffichage des messages -->
<a id="precedent" title="message précédent" href="index.php?precedent='. $valeur .'"></a>
<a title="actualiser" href="index.php" id="refresh"></a>
<a id="suivant" title=" message suivant" href="index.php?suivant='. $valeur .'"></a></div>';


//Affiche le fin de la page html
include("./includes/footer.php");
