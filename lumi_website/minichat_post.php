<?php
    // Mise en cookie du pseudo
    setcookie('pseudo',$_POST['pseudo_user'], time() + 5*24*3600, null, null, false, true);


    // Récupération des entrées utilisateurs
    $pseudo = $_POST['pseudo_user'];
    $message = $_POST['message_user'];

    // Connexion à la BDD
    try
    {
        $bdd = new PDO('mysql:host=db643990396.db.1and1.com;dbname=db643990396;charset=utf8', 'dbo643990396', '*M1n3BDD*', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        
    }catch(Exception $e){
            die('Erreur : '.$e->getMessage());
    }

    // Préparation requète SQL

    $req = $bdd->prepare('INSERT INTO minichat(pseudo, message) VALUES(:pseudonyme, :message)');

    // Exécution requète SQL
    $req->execute(array(

        'pseudonyme' => $pseudo,

        'message' => $message,

        ));

    // Redirection vers minichat.php
    header('Location: minichat.php');

?>

        