<?php
/**
 * Created by PhpStorm.
 * User: pugju
 * Date: 20/03/2017
 * Time: 12:13
 */
echo "<p>";

if (isset($_POST['mail']))
{
    $_POST['mail'] = htmlspecialchars($_POST['mail']); // On rend inoffensives les balises HTML que le visiteur a pu entrer

    if (preg_match("#^[a-z\d_.-]+@[a-z\d_.-]{2,}\.[a-z]{2,4}$#", $_POST['mail']))
    {
        echo 'Le ' . $_POST['mail'] . ' est un mail <strong>valide</strong> !';
    }
    else
    {
        echo 'L\'adresse e-mail ' . $_POST['mail'] . ' n\'est pas valide, recommencez !';
    }
}

echo "</p>

<form method=\"post\">
    <p>
        <label for=\"mail\">Votre e-mail ?</label> <input id=\"mail\" name=\"mail\" /><br />
        <input type=\"submit\" value=\"Vérifier l'e-mail\" />
    </p>
</form>";
?>
