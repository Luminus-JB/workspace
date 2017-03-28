<?php
/**
 * Created by PhpStorm.
 * User: pugju
 * Date: 25/03/2017
 * Time: 13:09
 */

echo "<form method=\"post\" action=\"connect_admin.php\" enctype=\"multipart/form-data\" >
            <!-- zone password -->
            <label for=\"password\">Votre mdp</label>
            <input type=\"password\" name=\"password\" id=\"password\"/><br /><br />
            <input type=\"submit\" name=\"Valider\"/>
    </form>";

if (isset($_POST['password'])){
    //Password d'entrée
    $password = "lumi";
    $password_user = (string)$_POST['password'];

    if ($password_user == $password){
        echo "<script type='text/javascript'>document.location.replace('admin.php');</script>";
    }
}
