<?php
/**
 * Created by PhpStorm.
 * User: pugju
 * Date: 13/03/2017
 * Time: 11:42
 */
echo '<p align="center">Page : '; //Pour l'affichage, on centre la liste des pages
for($i=1; $i<=$nombreDePages; $i++) //Boucle tant que plus petit ou égal au nbre de pages
{
    if($i==$pageActuelle) //Si il s'agit de la page actuelle...
    {
        echo ' [ '.$i.' ] ';//L'affiche entre crochets
    }
    else
    {
        echo ' <a href="index.php?page='.$i.'">'.$i.'</a> ';//Affiche un lien vers la page
    }
}
echo '</p>';