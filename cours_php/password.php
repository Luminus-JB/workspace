<?php
/**
 * Created by PhpStorm.
 * User: pugju
 * Date: 21/03/2017
 * Time: 13:44
 */

echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Guardian</title>
    <link rel=\"stylesheet\" media=\"screen\" type=\"text/css\" title=\"Design\" href=\"css/minichat_style.css\" />
</head>
<body>
    <form method=\"post\" action=\"index.php\" enctype=\"multipart/form-data\" >
        <fieldset><legend>Identifiants</legend>
            <!-- Label attaché à l'input via son pseudo -->
            <label for=\"pseudo\">Pseudo</label>

            <!-- zone de saisie -->
            <input type=\"text\" name=\"pseudo\" id=\"pseudo\"/>
            <br />

            <!-- zone password -->
            <label for=\"password\">Password</label>
            <input type=\"password\" name=\"password\" id=\"password\"/><br /><br />
            <input type=\"submit\" name=\"Valider\"/>
        </fieldset>
    </form>
    <p id='info1'>
    <a href='inscription.php'>Inscription</a>
    <a href='lost_id.php'>Identifiants Perdus</a>
    </p>
</body>
</html>";

if (isset($_POST['password'])){
    //Password d'entrée
    $password = "luminus";
    $pseudo = (string)$_POST['pseudo'];
    $password_user = (string)$_POST['password'];
    $pseudo = (htmlspecialchars($pseudo));
    $password = (htmlspecialchars($password));

    if ($password_user == $password){
        echo "<script type='text/javascript'>document.location.replace('minichat.php');</script>";
    }
}
