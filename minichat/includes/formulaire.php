<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 18/02/2017
 * Time: 16:03
 */
if (isset($_COOKIE['pseudo_user'])){
    $pseudo_user = $_COOKIE['pseudo_user'];
}else{
    $pseudo_user = "";
}
echo '<body>
    <form method="post" action="register.php" enctype="multipart/form-data" >
         <!-- zone pseudo -->
         <label for="pseudo">Pseudo</label>
         <input type="text" name="pseudo" id="pseudo" value="'.$pseudo_user.'"><br /><br />
         <!-- zone message -->
         <label for="message">Message</label>
         <textarea onKeyPress="if(event.keyCode == 13) validerForm();" id="message" placeholder="Votre message ici" name="message" rows="5" cols="30" pl></textarea><br /><br />
         <input id="valider" type="submit" name="Valider"/> 
    </form>';