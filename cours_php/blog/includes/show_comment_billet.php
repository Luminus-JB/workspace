<?php
/**
 * Created by PhpStorm.
 * User: pugju
 * Date: 27/02/2017
 * Time: 17:35
 */

// Récupération du billet
$reponse = $db->prepare('SELECT titre, contenu, DATE_FORMAT(date_creation, "%d/%m/%Y à %Hh%imin%ss") AS date_crea FROM billets WHERE id = :id_billet');
$reponse->execute(array('id_billet'=>$id_billet));
while ($donnees = $reponse->fetch())
{
        echo '<br /><a href="index.php">Retour à la liste des billets</a>';
        echo '<div class="news"><h3>' . htmlspecialchars($donnees['titre']) . ' le ' . htmlspecialchars($donnees['date_crea']) . '</h3>';
        echo '<p>' . htmlspecialchars($donnees['contenu']) . '</p></div>';

}

$reponse->closeCursor();//on libère le curseur pour la prochaine requête

$reponse = $db->prepare('SELECT auteur, commentaire, DATE_FORMAT(date_commentaire, "%d/%m/%Y à %Hh%imin%ss") AS date_commentaire FROM commentaires WHERE id_billet = :id_billet ORDER BY id');
$reponse->execute(array('id_billet'=>$id_billet));
echo '<h2>Commentaires</h2>';
while ($donnees = $reponse->fetch())
{
    echo '<b>' .  htmlspecialchars($donnees['auteur']) . '</b> le '. htmlspecialchars($donnees['date_commentaire']) . '<br />' . htmlspecialchars($donnees['commentaire']). '<br /><br />';
}

$reponse->closeCursor();
?>