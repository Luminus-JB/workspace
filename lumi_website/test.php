<?php
//Démarrage d'une session
session_start();
//initialise la variable 'connect'
$_SESSION['connect']=0; 

// Connexion à la BDD
try{
    $bdd = new PDO('mysql:host=db643990396.db.1and1.com;dbname=db643990396;charset=utf8', 'dbo643990396', '*M1n3BDD*', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    
}catch(Exception $e){
    die('Erreur : '.$e->getMessage());
}

// Si les variables existent
if (isset($_POST['password']) AND isset($_POST['login'])){ 

    //On récupère les données envoyées par la méthode POST du formulaire d'identification
    $password=$_POST['password'];
    $login=$_POST['login'];
    
}else{ 
    
    // Si les variables n'existent pas encore on les instancies vides
    $password="";
    $login="";
}
  
$req = $bdd->query("SELECT password FROM membres WHERE pseudo= '$login'");
$result = $req->fetch();

//Si le mot de passe et le login sont bons
if ( $result['password'] != NULL && $result['password'] == $password){
    
    $_SESSION['connect']=1; // Change la valeur de la variable connect. C'est elle qui nous permettra de savoir s'il y eu identification.
    $_SESSION['login']=$login;// Permet de récupérer le login afin de personnaliser la navigation
    
    // Redirection vers minichat.php
    header('Location: minichat.php');
    $_SESSION['pseudo'] = $login;
    
}else{ // le mot de passe n'est pas bon
    
    // Redirection vers minichat.php
    header('Location: connexion.php');
} //else
?>