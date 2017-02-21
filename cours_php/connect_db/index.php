<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', ''); //Connection à la db
}
catch(Exception $e)//capture l'erreur s'il y en une
{
    die('Erreur : '.$e->getMessage());//affiche une message d'erreur sans afficher le mdp
}
//Préparation requète sql sans les criètres se selection - remplacer par des marqueurs nominatif
$req = $bdd->prepare('SELECT nom, prix, possesseur, console, nbre_joueurs_max FROM jeux_video WHERE prix <= :prixmin AND prix <= :prixmax ORDER BY prix');
$req->execute(array('prixmin' => 20, 'prixmax' => 50));//définition des marqueurs nominatif

echo '<ul>';
while ($donnees = $req->fetch())//Tant que fetch (va chercher) récupère des entrées dans le résultat de la requête SQL ($req)
{
    echo '<li>' . $donnees['nom'] . 'se jouant sur console ' . $donnees['console'] . ' , nbre de joueur max : '
        . $donnees['nbre_joueurs_max'] . ', possédé par ' . $donnees['possesseur']. ' : ' . $donnees['prix'] . '€' .  '.</li>';
}
echo '</ul>';

$req->closeCursor();

?>
