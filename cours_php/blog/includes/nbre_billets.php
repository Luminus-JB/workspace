<?php
/**
 * Created by PhpStorm.
 * User: pugju
 * Date: 01/03/2017
 * Time: 15:47
 */
// On récupère le nombre de billet présent ds la db
$reponse = $db->query('SELECT COUNT(*) AS nbre_billets FROM billets');
$donnees = $reponse->fetch();
$nbre_billets = $donnees['nbre_billets'];
$messagesParPage=5; //5 messages par page.
//On compte le nombre de pages.
$nombreDePages=ceil($nbre_billets/$messagesParPage);

if(isset($_GET['page'])) // Si la variable $_GET['page'] existe...
{
    $pageActuelle=intval($_GET['page']);

    if($pageActuelle>$nombreDePages) // Si $pageActuelle est plus grande que $nombreDePages...
    {
        $pageActuelle=$nombreDePages;
    }
}
else // Sinon
{
    $pageActuelle=1; // La page actuelle est la n°1
}
?>