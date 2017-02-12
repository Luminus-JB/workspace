<?php
    // Récupération des entrées utilisateurs
    $pseudo = $_POST['pseudo_inscrit'];
    $mail = $_POST['mail_inscrit'];
    $password = $_POST['password_inscrit'];

    // Connexion à la BDD
    try
    {
        $bdd = new PDO('mysql:host=db643990396.db.1and1.com;dbname=db643990396;charset=utf8', 'dbo643990396', '*M1n3BDD*', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }

    // Préparation requète SQL

    $req = $bdd->prepare('INSERT INTO membres(pseudo, mail, password) VALUES(:pseudonyme, :email, :mot_de_passe)');

    // Exécution requète SQL
    $req->execute(array(

        'pseudonyme' => $pseudo,

        'email' => $mail,
        
        'mot_de_passe' => $password,

        ));

    // Redirection vers minichat.php
    header('Location: minichat.php');

?>

        