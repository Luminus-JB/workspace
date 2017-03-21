<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 18/02/2017
 * Time: 16:12
 */
//Contient la connexion à la db
include("includes_minichat/connect_db.php");
//On récupère les variables envoyés par le formulaire
$pseudo = $_POST['pseudo'];
$message = $_POST['message'];

if (isset($_POST['message']))
{
    $message = stripslashes($message); // On enlève les slashs qui se seraient ajoutés automatiquement
    $message = htmlspecialchars($message); // On rend inoffensives les balises HTML que le visiteur a pu rentrer
    $message = nl2br($message); // On crée des <br /> pour conserver les retours à la ligne

    // On fait passer notre texte à la moulinette des regex
    $message = preg_replace('#\[b\](.+)\[/b\]#isU', '<strong>$1</strong>', $message);
    $message = preg_replace('#\[i\](.+)\[/i\]#isU', '<em>$1</em>', $message);
    $message = preg_replace('#\[color=(red|green|blue|yellow|purple|olive|brown|white)\](.+)\[/color\]#isU', '<span style="color:$1">$2</span>', $message);
    $message = preg_replace('#(http://|www)[a-z\d._/-]+#i', '<a href="$0">$0</a>', $message);
}

setcookie('pseudo_user', $pseudo, time() + 30*24*3600, null, null, false, true);

$req = $db->prepare('INSERT INTO chat(pseudo, message, time_post) VALUES(:pseudo , :message, NOW())');
$req->execute(array(
'pseudo' => $pseudo,
'message' => $message
));

header('Location: minichat.php');

?>