<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 25/01/2017
 * Time: 15:14
 */

//Si un mot de passe à été saisi et que celui-ci est bon
if (isset($_POST['password']) AND $_POST['password'] == "kangourou")
{
    ?>
    <h1>Voici les codes d'accès :</h1>
    <p><strong>CRD5-GTFT-CK65-JOPM-V29N-24G1-HH28-LLFV</strong></p>

    <p>
        Cette page est réservée au personnel de la NASA. N'oubliez pas de la visiter régulièrement car les codes d'accès sont changés toutes les semaines.<br /><br />
        La NASA vous remercie de votre visite.
    </p>
    <?php
}else{
    echo $_POST['password'] .  ' n\'est pas le bon mot de passe <br />' . '<a href="formulaire.html">Réessayer</a>';
}
?>