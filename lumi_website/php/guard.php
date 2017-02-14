<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Guard</title>
    <link rel="stylesheet" type="text/css" href="../css/style_guard.css" />
    <link rel="icon" type="image/png" href="../img/favicon.png" />
</head>
<body>

<?php
$password = "lol";
$_POST['pseudo'] = (string)$_POST['pseudo'];
$_POST['password'] = (string)$_POST['password'];

if (empty ($_POST['pseudo'])&& (empty ($_POST['password']))){
    ?><div id="error_pwd_conteneur"><h2 id="error">En fait tu as décidé de rien mettre ... Félicitations!</h2></div><?php
}else if (empty ($_POST['pseudo'])){
    ?><div id="error_pwd_conteneur"><h2 id="error">Avec un pseudo c'est mieux =)</h2></div><?php
}else if (empty ($_POST['password'])){
    ?><div id="error_pwd_conteneur"><h2 id="error">Avec un mot de passe c'est mieux =)</h2></div><?php
}else if ($_POST['password'] != $password){
    ?><div id="error_pwd_conteneur"><h2 id="error">Je suis désolé, <?php echo htmlspecialchars($_POST['pseudo'])  ?> mais ce n'est pas le bon mot de passe</h2></div><?php
}else{
    require "../html/homepage.html";
}

echo $_FILES['monfichier']['tmp_name'];
?>
</body>
</html>

