<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Connection</title>
    <link rel="stylesheet" type="text/css" href="css/style_guard.css" />
    <link rel="icon" type="image/png" href="img/favicon.png" />
</head>
<body>
    <form method="post" action="php/guard_tchat_connect.php" enctype="multipart/form-data" >
        <fieldset><legend>Connection</legend>
            <!-- Label attaché à l'input via son pseudo -->
            <label for="pseudo">Pseudo</label>

            <!-- zone de saisie -->
            <input type="text" name="pseudo" id="pseudo"/>
            <br />

            <!-- zone password -->
            <label for="password">Password</label>
            <input type="password" name="password" id="password"/><br /><br />
            <label for="monfichier">Fichier test</label><input type="file" name="monfichier"/><br />
            <input type="submit" name="Valider"/>
        </fieldset>
    </form>
</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 17/02/2017
 * Time: 11:33
 */