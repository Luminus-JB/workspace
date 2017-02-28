<?php
/**
 * Created by PhpStorm.
 * User: pugju
 * Date: 27/02/2017
 * Time: 16:39
 */

$reponse = $db->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, "%d/%m/%Y à %Hh%imin%ss") AS date_crea FROM billets ORDER BY date_creation DESC LIMIT 0,5');

while ($donnees = $reponse->fetch())
{
    echo '<div class="news"><h3>' . htmlspecialchars($donnees['titre']) . ' le ' . htmlspecialchars($donnees['date_crea']) . '</h3>';
    echo '<p>' . htmlspecialchars($donnees['contenu']). '<br/><a href="commentaires.php?id=' . $donnees['id']  . '">Commentaires</a></p></div>';
}

$reponse->closeCursor();

?>


