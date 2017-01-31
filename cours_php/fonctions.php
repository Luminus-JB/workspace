<?php

/*
 * php info - Permet d'afficher l'ensemble des infos relatives au PHP
 *  utilisé par le serveur web
 */
phpinfo();

/*
 * isset — Détermine si une variable est définie et est différente de NULL
 */


/*
 * prompt function - function PHP can be use instead of JS's prompt function
 */
function prompt($prompt_msg)
{
    //autorise le script à utiliser JS et affiche un prompt avec pour message le param�tre de la fonction
    echo("<script type='text/javascript'> var answer = prompt('" . $prompt_msg . "'); </script>");
    //autorise le script à utiliser JS et récupère la réponse user et la stocke dans une variable
    $answer = "<script type='text/javascript'> document.write(answer); </script>";
    //la fonction renvoie le contenu de la réponse user.
    return ($answer);
}

?>