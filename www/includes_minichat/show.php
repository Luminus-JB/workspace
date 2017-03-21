<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 18/02/2017
 * Time: 16:50
 */
//Récupère la valeur permettant de remonter l'historique & controle donnees valides
if (isset($_GET['precedent'])) {
    $historique = (int) $_GET['precedent'];
    if($historique < 0){
        $historique = 0;
    }
}else if (isset($_GET['suivant'])){
    $historique = (int) $_GET['suivant'];
    if($historique < 0){
        $historique = 0;
    }
}else{
    $historique = 0;
}
/*
 * Affiche les messages de haut en bas si l'on remplace par cette variable
 */

//$reponse = $db->query('SELECT * FROM chat ORDER BY id DESC LIMIT 5');
//----------------------------------------------------------------------//


//Affiche les messages de bas en haut
$reponse = $db->query('
SELECT lower(pseudo) AS pseudo_min, 
message, DAY(time_post) AS jour, 
MONTH(time_post) AS mois,
YEAR(time_post) AS annee,
HOUR(time_post) AS heure, 
SECOND(time_post) AS seconde 
FROM (SELECT * FROM chat ORDER BY id DESC LIMIT '. $historique .',10)x ORDER BY id ASC');

echo '<div id="box_message">';

while ($donnees = $reponse->fetch())
{
    if ($donnees['mois']<10){//Si mois actuel précédent au mois d'Octobre
        $donnees['mois'] = 0 . $donnees['mois'] ;//Ajoute un 0 devant le valeur du mois sinon on aurait 01/1/2017
    }
    //Pour le bien des consignes de l'excercie j'affiche l'heure du post à la française malgré que ce soit moche est prenne de la place pr rien =)
    echo '<b>'. $donnees['jour']. '/'. $donnees['mois']. '/' . $donnees['annee'] . '-' . $donnees['heure'] .'h'. $donnees['seconde'] . ' ' . $donnees['pseudo_min']. ': ' . '</b>' . $donnees['message'] . '<br />';
}
//Ferme le cursor pour la prochaine requête
$reponse->closeCursor();

//Récupère le nombre d'entrée dans la table chat
$max_historique = $db->query('SELECT COUNT(*) AS maximum FROM chat ');
$donnees_max_historique = $max_historique->fetch();
?>