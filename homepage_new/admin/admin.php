<?php
/**
 * Created by PhpStorm.
 * User: Lumi
 * Date: 27/03/2017
 * Time: 11:01
 */
/*
 * INCLUDES
 */
//Définition des variables titre pour le <title>, css et favicon pour les balises <link>
$titre = "Admin";
$css = "css/style_admini.css";
$favicon = "../img/favicon.png";
//Contient le header
include("../includes/head.php");
//Contient la connexion à la db
include("includes/connect_db.php");
//Contient les fonctions
include("function.php");

//Redirection vers la homepage
echo '<a id="homepage_link" href="../index.php"></a>';

//Selection de la partie à Editer
echo '<div id="select_form" class="formulaire"><form method="post" action="admin.php" enctype="multipart/form-data" >
<label for="form" class="small">Selectionner la partie de la Homepage à éditer</label>
<select name="form" id="form">
<option value=""> ----- Choisir ----- </option>
<option value="Head">Head</option>
<option value="Nav">Nav</option>
<option value="Games">Games</option>
<option value="Devtools">Devtools</option>
<option value="Administratif">Administratif</option>
<option value="Divers">Divers</option>
</select><br/><br/>
<input type="submit" value="Valider"/>
</form></div>';

if (isset($_POST['form'])){
    $form = $_POST['form'];

    if ($form == "Head"){
        //FORMULAIRE HEAD
        include("includes/form/form_head.php");
    }
    if ($form == "Nav"){
        //FORMULAIRE NAV
        include("includes/form/form_nav.php");
    }
    if ($form == "Games"){
        //FORMULAIRE GAMES
        include("includes/form/form_games.php");
    }
    if ($form == "Devtools"){
        //FORMULAIRE DEVTOOLS
        include("includes/form/form_devtools.php");
    }
    if ($form == "Administratif"){
        //FORMULAIRE ADMINISTRATIF
        include("includes/form/form_administratif.php");
    }
    if ($form == "Divers"){
        //FORMULAIRE DIVERS
        include("includes/form/form_divers.php");
    }
}


















