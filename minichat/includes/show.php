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
//Affiche les messages de haut en bas
//$reponse = $db->query('SELECT * FROM chat ORDER BY id DESC LIMIT 5');
//Affiche les messages de bas en haut
$reponse = $db->query('SELECT lower(pseudo) AS pseudo_min, message FROM (
SELECT * FROM chat ORDER BY id DESC LIMIT '. $historique .',10)x ORDER BY id ASC');
echo '<div id="box_message">';
while ($donnees = $reponse->fetch())
{
    echo '<b>' . $donnees['pseudo_min']. ': ' . '</b>' . $donnees['message'] . '<br />';
}

$reponse->closeCursor();

$max_historique = $db->query('SELECT COUNT(*) AS maximum FROM chat ');
$donnees_max_historique = $max_historique->fetch();
?>