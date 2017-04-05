<?php
/**
 * Created by PhpStorm.
 * User: Lumi
 * Date: 25/03/2017
 * Time: 15:35
 */
//Contient la connexion à la db
include("includes/connect_db.php");
//Contient les fonctions
include("function.php");

/*
 * ZONE LINK HEAD
 */
// UPDATE la db avec les infos du formulaire HEAD
// On récupère et vérifie les données utilisateurs
if (isset($_POST['link_head'])) {
    //Déclarations
    $table = 'link_head';
    $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
    $maxsize = 15000;
    $maxheight = 350;
    $maxwidth= 350;

    //Vérification données utilisateur
    $_POST['link_head'] = htmlspecialchars($_POST['link_head']);
    $_POST['name_link_head'] = htmlspecialchars($_POST['name_link_head']);

    //Si le lien , le nom du lien et l'image sont présentes
    if (!empty($_POST['link_head']) && !empty($_POST['name_link_head']) && !empty($_FILES['img_link_head']['tmp_name'])){

        //Contient les vérification de l'image
        include("includes/register/register_img_head.php");

        if (!empty($erreur)){
            echo $erreur . '<br/><br/><a href=\'admin.php\'>retour à la configuration</a>';
        }else{
            $name_img = md5(uniqid(rand(), true));
            $destination = "../img/{$name_img}.{$extension_upload}";
            $resultat = move_uploaded_file($_FILES['img_link_head']['tmp_name'],$destination);
            updateLinkNameImage($table, $_POST['link_head'], $_POST['name_link_head'], $destination, $_POST['head_place_number']);
            echo "Le lien n°" . $_POST['head_place_number'] . " de l'entête, son nom, et l'image associée ont bien été mis à jour <br/><br/><a href='admin.php#header'>retour à la configuration</a>";
        }

    //Sinon si uniquement le lien et le nom du lien sont présent
    }else if (!empty($_POST['link_head']) && !empty($_POST['name_link_head']) && empty($_FILES['img_link_head']['tmp_name'])){
        updateLinkName($table, $_POST['link_head'], $_POST['name_link_head'], $_POST['head_place_number']);
        echo "Le lien n°" . $_POST['head_place_number'] . " de l'entête et son nom ont bien été mis à jour <br/><br/><a href='admin.php#header'>retour à la configuration</a>";

    //Sinon si uniquement le lien et l'image sont présent
    }else if (!empty($_POST['link_head']) && empty($_POST['name_link_head']) && !empty($_FILES['img_link_head']['tmp_name'])) {
        //Déclarations
        $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
        $maxsize = 15000;
        $maxheight = 350;
        $maxwidth= 350;
        //Contient les vérification de l'image
        include("includes/register/register_img_head.php");

        if (!empty($erreur)){
            echo $erreur . '<br/><br/><a href=\'admin.php\'>retour à la configuration</a>';
        }else{
            $name_img = md5(uniqid(rand(), true));
            $destination = "../img/{$name_img}.{$extension_upload}";
            $resultat = move_uploaded_file($_FILES['img_link_head']['tmp_name'],$destination);
            updateLinkImage($table, $_POST['link_head'], $destination, $_POST['head_place_number']);
            echo "Le lien n°" . $_POST['head_place_number'] . " de l'entête, et l'image associée ont bien été mis à jour <br/><br/><a href='admin.php#header'>retour à la configuration</a>";
        }

    //Sinon si uniquement le nom du lien et l'image sont présent
    }else if (empty($_POST['link_head']) && !empty($_POST['name_link_head']) && !empty($_FILES['img_link_head']['tmp_name'])) {
        //Déclarations
        $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
        $maxsize = 15000;
        $maxheight = 250;
        $maxwidth= 350;
        //Contient les vérification de l'image
        include("includes/register/register_img_head.php");

        if (!empty($erreur)){
            echo $erreur . '<br/><br/><a href=\'admin.php\'>retour à la configuration</a>';
        }else{
            $name_img = md5(uniqid(rand(), true));
            $destination = "../img/{$name_img}.{$extension_upload}";
            $resultat = move_uploaded_file($_FILES['img_link_head']['tmp_name'],$destination);
            updateNameImage($table, $_POST['name_link_head'], $destination, $_POST['head_place_number']);
            echo "Le nom du lien n°" . $_POST['head_place_number'] . " de l'entête, et l'image associée ont bien été mis à jour <br/><br/><a href='admin.php#header'>retour à la configuration</a>";
        }

    //Sinon si uniquement le lien est présent
    }else if (!empty($_POST['link_head']) && empty($_POST['name_link_head']) && empty($_FILES['img_link_head']['tmp_name'])) {
        updateLinkOnly($table, $_POST['link_head'], $_POST['head_place_number']);
        echo "Le lien n°" . $_POST['head_place_number'] . " de l'entête, à bien été mis à jour <br/><br/><a href='admin.php#header'>retour à la configuration</a>";
    //Sinon si uniquement le nom du lien est présent
    }else if (empty($_POST['link_head']) && !empty($_POST['name_link_head']) && empty($_FILES['img_link_head']['tmp_name'])) {
        updateNameOnly($table, $_POST['name_link_head'], $_POST['head_place_number']);
        echo "Le nom du lien n°" . $_POST['head_place_number'] . " de l'entête, à bien été mis à jour <br/><br/><a href='admin.php#header'>retour à la configuration</a>";
    //Sinon si uniquement l'image est présente
    }else if (empty($_POST['link_head']) && empty($_POST['name_link_head']) && !empty($_FILES['img_link_head']['tmp_name'])) {
        //Déclarations
        $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
        $maxsize = 15000;
        $maxheight = 350;
        $maxwidth= 350;
        //Contient les vérification de l'image
        include("includes/register/register_img_head.php");

        if (!empty($erreur)){
            echo $erreur . '<br/><br/><a href=\'admin.php#header\'>retour à la configuration</a>';
        }else{
            $name_img = md5(uniqid(rand(), true));
            $destination = "../img/{$name_img}.{$extension_upload}";
            $resultat = move_uploaded_file($_FILES['img_link_head']['tmp_name'],$destination);
            updateImageOnly($table, $destination, $_POST['head_place_number']);
            echo "L'image associée au lien n°" . $_POST['head_place_number'] . " de l'entête, à bien été mis à jour <br/><br/><a href='admin.php#header'>retour à la configuration</a>";
        }

    }else{
        echo "si vous ne voulez rien changer, libre à vous =). <br/><br/><a href='admin.php#header'>retour à la configuration</a>";
    }
}

// INSERT dans la db avec les infos du formulaire HEAD
// On récupère et vérifie les données utilisateurs
if (isset($_POST['add_link_head'])) {
    //Déclarations
    $table = 'link_head';
    $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
    $maxsize = 15000;
    $maxheight = 250;
    $maxwidth= 350;

    //Vérification données utilisateur
    $_POST['add_link_head'] = htmlspecialchars($_POST['add_link_head']);
    $_POST['add_name_link_head'] = htmlspecialchars($_POST['add_name_link_head']);

    //Contient les vérification de l'image
    include("includes/register/register_img_head.php");

    if (!empty($erreur)){
        echo $erreur . '<br/><br/><a href=\'admin.php#header\'>retour à la configuration</a>';
    }else{
        $name_img = md5(uniqid(rand(), true));
        $destination = "../img/{$name_img}.{$extension_upload}";
        $resultat = move_uploaded_file($_FILES['img_link_head']['tmp_name'],$destination);
        insertLinkImage($table, $_POST['add_name_link_head'], $_POST['add_link_head'], $destination, $_POST['$add_place_link_head']) ;
        echo "Le lien n°" . $_POST['$add_place_link_head'] . " de l'entête, son nom et l'image associée ont bien été ajouté <br/><br/><a href='admin.php#header'>retour à la configuration</a>";
    }
}
// DELETE dans la db avec les infos du formulaire HEAD
// On récupère et vérifie les données utilisateurs
if (isset($_POST['delete_link_head_place'])) {
    $delete_link_head_place = $_POST['delete_link_head_place'];
    $table = 'link_head';

    deleteLink($table, $delete_link_head_place);
    echo "Le lien n°" . $delete_link_head_place . " de l'entête à bien été supprimer <br/><br/><a href='admin.php#header'>retour à la configuration</a>";
}
/*
 * FIN ZONE LINK HEAD
 */

/*
 * ZONE LINK NAV
 */
// UPDATE la db avec les infos du formulaire NAV
// On récupère et vérifie les données utilisateurs
if (isset($_POST['link_nav'])) {
    //Déclarations
    $table = 'link_nav';
    $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
    $maxsize = 15000;
    $maxheight = 350;
    $maxwidth= 350;

    //Vérification données utilisateur
    $_POST['link_nav'] = htmlspecialchars($_POST['link_nav']);
    $_POST['name_link_nav'] = htmlspecialchars($_POST['name_link_nav']);

    //Si le lien , le nom du lien et l'image sont présentes
    if (!empty($_POST['link_nav']) && !empty($_POST['name_link_nav']) && !empty($_FILES['img_link_nav']['tmp_name'])){

        //Contient les vérification de l'image
        include("includes/register/register_img_nav.php");

        if (!empty($erreur)){
            echo $erreur . '<br/><br/><a href=\'admin.php\'>retour à la configuration</a>';
        }else{
            $name_img = md5(uniqid(rand(), true));
            $destination = "../img/{$name_img}.{$extension_upload}";
            $resultat = move_uploaded_file($_FILES['img_link_nav']['tmp_name'],$destination);
            updateLinkNameImage($table, $_POST['link_nav'], $_POST['name_link_nav'], $destination, $_POST['nav_place_number']);
            echo "Le lien n°" . $_POST['nav_place_number'] . " du nav, son nom, et l'image associée ont bien été mis à jour <br/><br/><a href='admin.php#nav'>retour à la configuration</a>";
        }

        //Sinon si uniquement le lien et le nom du lien sont présent
    }else if (!empty($_POST['link_nav']) && !empty($_POST['name_link_nav']) && empty($_FILES['img_link_nav']['tmp_name'])){
        updateLinkName($table, $_POST['link_nav'], $_POST['name_link_nav'], $_POST['nav_place_number']);
        echo "Le lien n°" . $_POST['nav_place_number'] . " du nav et son nom ont bien été mis à jour <br/><br/><a href='admin.php#header'>retour à la configuration</a>";

        //Sinon si uniquement le lien et l'image sont présent
    }else if (!empty($_POST['link_nav']) && empty($_POST['name_link_nav']) && !empty($_FILES['img_link_nav']['tmp_name'])) {
        //Déclarations
        $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
        $maxsize = 15000;
        $maxheight = 350;
        $maxwidth= 350;
        //Contient les vérification de l'image
        include("includes/register/register_img_nav.php");

        if (!empty($erreur)){
            echo $erreur . '<br/><br/><a href=\'admin.php#header\'>retour à la configuration</a>';
        }else{
            $name_img = md5(uniqid(rand(), true));
            $destination = "../img/{$name_img}.{$extension_upload}";
            $resultat = move_uploaded_file($_FILES['img_link_nav']['tmp_name'],$destination);
            updateLinkImage($table, $_POST['link_nav'], $destination, $_POST['nav_place_number']);
            echo "Le lien n°" . $_POST['nav_place_number'] . " du nav, et l'image associée ont bien été mis à jour <br/><br/><a href='admin.php#header'>retour à la configuration</a>";
        }

        //Sinon si uniquement le nom du lien et l'image sont présent
    }else if (empty($_POST['link_nav']) && !empty($_POST['name_link_nav']) && !empty($_FILES['img_link_nav']['tmp_name'])) {
        //Déclarations
        $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
        $maxsize = 15000;
        $maxheight = 250;
        $maxwidth= 350;
        //Contient les vérification de l'image
        include("includes/register/register_img_nav.php");

        if (!empty($erreur)){
            echo $erreur . '<br/><br/><a href=\'admin.php#header\'>retour à la configuration</a>';
        }else{
            $name_img = md5(uniqid(rand(), true));
            $destination = "../img/{$name_img}.{$extension_upload}";
            $resultat = move_uploaded_file($_FILES['img_link_nav']['tmp_name'],$destination);
            updateNameImage($table, $_POST['name_link_nav'], $destination, $_POST['nav_place_number']);
            echo "Le nom du lien n°" . $_POST['nav_place_number'] . " du nav, et l'image associée ont bien été mis à jour <br/><br/><a href='admin.php#header'>retour à la configuration</a>";
        }

        //Sinon si uniquement le lien est présent
    }else if (!empty($_POST['link_nav']) && empty($_POST['name_link_nav']) && empty($_FILES['img_link_nav']['tmp_name'])) {
        updateLinkOnly($table, $_POST['link_nav'], $_POST['nav_place_number']);
        echo "Le lien n°" . $_POST['nav_place_number'] . " du nav, à bien été mis à jour <br/><br/><a href='admin.php#header'>retour à la configuration</a>";
        //Sinon si uniquement le nom du lien est présent
    }else if (empty($_POST['link_nav']) && !empty($_POST['name_link_nav']) && empty($_FILES['img_link_nav']['tmp_name'])) {
        updateNameOnly($table, $_POST['name_link_nav'], $_POST['nav_place_number']);
        echo "Le nom du lien n°" . $_POST['nav_place_number'] . " du nav, à bien été mis à jour <br/><br/><a href='admin.php#header'>retour à la configuration</a>";
        //Sinon si uniquement l'image est présente
    }else if (empty($_POST['link_nav']) && empty($_POST['name_link_nav']) && !empty($_FILES['img_link_nav']['tmp_name'])) {
        //Déclarations
        $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
        $maxsize = 15000;
        $maxheight = 350;
        $maxwidth= 350;
        //Contient les vérification de l'image
        include("includes/register/register_img_nav.php");

        if (!empty($erreur)){
            echo $erreur . '<br/><br/><a href=\'admin.php#header\'>retour à la configuration</a>';
        }else{
            $name_img = md5(uniqid(rand(), true));
            $destination = "../img/{$name_img}.{$extension_upload}";
            $resultat = move_uploaded_file($_FILES['img_link_nav']['tmp_name'],$destination);
            updateImageOnly($table, $destination, $_POST['nav_place_number']);
            echo "L'image associée au lien n°" . $_POST['nav_place_number'] . " du nav, à bien été mis à jour <br/><br/><a href='admin.php#header'>retour à la configuration</a>";
        }

    }else{
        echo "si vous ne voulez rien changer, libre à vous =). <br/><br/><a href='admin.php#header'>retour à la configuration</a>";
    }
}
// INSERT dans la db avec les infos du formulaire NAV
// On récupère et vérifie les données utilisateurs
if (isset($_POST['add_link_nav'])) {
    //Déclarations
    $table = 'link_nav';
    $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
    $maxsize = 15000;
    $maxheight = 250;
    $maxwidth= 350;

    //Vérification données utilisateur
    $_POST['add_link_nav'] = htmlspecialchars($_POST['add_link_nav']);
    $_POST['add_name_link_nav'] = htmlspecialchars($_POST['add_name_link_nav']);

    //Contient les vérification de l'image
    include("includes/register/register_img_nav.php");

    if (!empty($erreur)){
        echo $erreur . '<br/><br/><a href=\'admin.php#header\'>retour à la configuration</a>';
    }else{
        $name_img = md5(uniqid(rand(), true));
        $destination = "../img/{$name_img}.{$extension_upload}";
        $resultat = move_uploaded_file($_FILES['img_link_nav']['tmp_name'],$destination);
        insertLinkImage($table, $_POST['add_name_link_nav'], $_POST['add_link_nav'], $destination, $_POST['$add_place_link_nav']) ;
        echo "Le lien n°" . $_POST['$add_place_link_nav'] . " de l'entête, son nom et l'image associée ont bien été ajouté <br/><br/><a href='admin.php#header'>retour à la configuration</a>";
    }
}
// DELETE dans la db avec les infos du formulaire NAV
// On récupère et vérifie les données utilisateurs
if (isset($_POST['delete_link_nav_place'])) {
    $delete_link_nav_place = $_POST['delete_link_nav_place'];
    $table = 'link_nav';

    deleteLink($table, $delete_link_nav_place);
    echo "Le lien n°" . $delete_link_nav_place . " du nav à bien été supprimer <br/><br/><a href='admin.php#header'>retour à la configuration</a>";
}
/*
 * FIN ZONE LINK NAV
 */

/*
 * ZONE LINK GAMES
 */
// UPDATE la db avec les infos du formulaire GAMES
// On récupère et vérifie les données utilisateurs
if (isset($_POST['link_games'])){
    //Déclarations
    $table = 'link_games';

    //Vérification données utilisateur
    $_POST['link_games'] = htmlspecialchars($_POST['link_games']);
    $_POST['name_link_games'] = htmlspecialchars($_POST['name_link_games']);

    //Sinon si uniquement le lien et le nom du lien sont présent
    if (!empty($_POST['link_games']) && !empty($_POST['name_link_games'])){
        updateLinkName($table, $_POST['link_games'], $_POST['name_link_games'], $_POST['games_place_number']);
        echo "Le lien n°" . $_POST['games_place_number'] . " de la catégorie games et son nom ont bien été mis à jour <br/><br/><a href='admin.php#games'>retour à la configuration</a>";

    //Sinon si uniquement le lien est présent
    }else if (!empty($_POST['link_games']) && empty($_POST['name_link_games'])) {
        updateLinkOnly($table, $_POST['link_games'], $_POST['games_place_number']);
        echo "Le lien n°" . $_POST['games_place_number'] . " de la catégorie games, à bien été mis à jour <br/><br/><a href='admin.php#games'>retour à la configuration</a>";

    //Sinon si uniquement le nom du lien est présent
    }else if (empty($_POST['link_games']) && !empty($_POST['name_link_games'])) {
        updateNameOnly($table, $_POST['name_link_games'], $_POST['games_place_number']);
        echo "Le nom du lien n°" . $_POST['games_place_number'] . " de la catégorie games, à bien été mis à jour <br/><br/><a href='admin.php#games'>retour à la configuration</a>";

    }else{
        echo "si vous ne voulez rien changer, libre à vous =). <br/><br/><a href='admin.php#games'>retour à la configuration</a>";
    }
}
// INSERT dans la db avec les infos du formulaire GAMES
// On récupère et vérifie les données utilisateurs
if (isset($_POST['add_link_games'])) {
    $add_link_games = $_POST['add_link_games'];
    $add_name_link_games = $_POST['add_name_link_games'];
    $add_place_link_games = $_POST['$add_place_link_games'];
    $table = 'link_games';

    insertLink($table, $add_name_link_games, $add_link_games, $add_place_link_games);
    echo "Le lien n°" . $add_place_link_games . " de la catégorie games à bien été ajouté <br/><br/><a href='admin.php#games'>retour à la configuration</a>";
}
// DELETE dans la db avec les infos du formulaire GAMES
// On récupère et vérifie les données utilisateurs
if (isset($_POST['delete_link_games_place'])) {
    $delete_link_games_place = $_POST['delete_link_games_place'];
    $table = 'link_games';

    deleteLink($table, $delete_link_games_place);
    echo "Le lien n°" . $delete_link_games_place . " de la catégorie games à bien été supprimer <br/><br/><a href='admin.php#games'>retour à la configuration</a>";
}
/*
 * FIN ZONE LINK GAMES
 */

/*
 * ZONE LINK DEVTOOLS
 */
// UPDATE la db avec les infos du formulaire DEVTOOLS
// On récupère et vérifie les données utilisateurs
if (isset($_POST['link_devtools'])){
    //Déclarations
    $table = 'link_devtools';

    //Vérification données utilisateur
    $_POST['link_devtools'] = htmlspecialchars($_POST['link_devtools']);
    $_POST['name_link_devtools'] = htmlspecialchars($_POST['name_link_devtools']);

    //Sinon si uniquement le lien et le nom du lien sont présent
    if (!empty($_POST['link_devtools']) && !empty($_POST['name_link_devtools'])){
        updateLinkName($table, $_POST['link_devtools'], $_POST['name_link_devtools'], $_POST['devtools_place_number']);
        echo "Le lien n°" . $_POST['devtools_place_number'] . " de la catégorie devtools et son nom ont bien été mis à jour <br/><br/><a href='admin.php#devtools'>retour à la configuration</a>";

        //Sinon si uniquement le lien est présent
    }else if (!empty($_POST['link_devtools']) && empty($_POST['name_link_devtools'])) {
        updateLinkOnly($table, $_POST['link_devtools'], $_POST['devtools_place_number']);
        echo "Le lien n°" . $_POST['devtools_place_number'] . " de la catégorie devtools, à bien été mis à jour <br/><br/><a href='admin.php#devtools'>retour à la configuration</a>";

        //Sinon si uniquement le nom du lien est présent
    }else if (empty($_POST['link_devtools']) && !empty($_POST['name_link_devtools'])) {
        updateNameOnly($table, $_POST['name_link_devtools'], $_POST['devtools_place_number']);
        echo "Le nom du lien n°" . $_POST['devtools_place_number'] . " de la catégorie devtools, à bien été mis à jour <br/><br/><a href='admin.php#devtools'>retour à la configuration</a>";

    }else{
        echo "si vous ne voulez rien changer, libre à vous =). <br/><br/><a href='admin.php#devtools'>retour à la configuration</a>";
    }
}
// INSERT dans la db avec les infos du formulaire DEVTOOLS
// On récupère et vérifie les données utilisateurs
if (isset($_POST['add_link_devtools'])) {
    $add_link_devtools = $_POST['add_link_devtools'];
    $add_name_link_devtools = $_POST['add_name_link_devtools'];
    $add_place_link_devtools = $_POST['$add_place_link_devtools'];
    $table = 'link_devtools';

    insertLink($table, $add_name_link_devtools, $add_link_devtools, $add_place_link_devtools);
    echo "Le lien n°" . $add_place_link_devtools . " de la catégorie devtools à bien été ajouté <br/><br/><a href='admin.php#devtools'>retour à la configuration</a>";
}
// DELETE dans la db avec les infos du formulaire DEVTOOLS
// On récupère et vérifie les données utilisateurs
if (isset($_POST['delete_link_devtools_place'])) {
    $delete_link_devtools_place = $_POST['delete_link_devtools_place'];
    $table = 'link_devtools';

    deleteLink($table, $delete_link_devtools_place);
    echo "Le lien n°" . $delete_link_devtools_place . " de la catégorie devtools à bien été supprimer <br/><br/><a href='admin.php#devtools'>retour à la configuration</a>";
}
/*
 * FIN ZONE LINK DEVTOOLS
 */

/*
 * ZONE LINK ADMINISTRATIF
 */
// UPDATE la db avec les infos du formulaire ADMINISTRATIF
// On récupère et vérifie les données utilisateurs
if (isset($_POST['link_administratif'])){
    //Déclarations
    $table = 'link_administratif';

    //Vérification données utilisateur
    $_POST['link_administratif'] = htmlspecialchars($_POST['link_administratif']);
    $_POST['name_link_administratif'] = htmlspecialchars($_POST['name_link_administratif']);

    //Sinon si uniquement le lien et le nom du lien sont présent
    if (!empty($_POST['link_administratif']) && !empty($_POST['name_link_administratif'])){
        updateLinkName($table, $_POST['link_administratif'], $_POST['name_link_administratif'], $_POST['administratif_place_number']);
        echo "Le lien n°" . $_POST['administratif_place_number'] . " de la catégorie administratif et son nom ont bien été mis à jour <br/><br/><a href='admin.php#administratif'>retour à la configuration</a>";

        //Sinon si uniquement le lien est présent
    }else if (!empty($_POST['link_administratif']) && empty($_POST['name_link_administratif'])) {
        updateLinkOnly($table, $_POST['link_administratif'], $_POST['administratif_place_number']);
        echo "Le lien n°" . $_POST['administratif_place_number'] . " de la catégorie administratif, à bien été mis à jour <br/><br/><a href='admin.php#administratif'>retour à la configuration</a>";

        //Sinon si uniquement le nom du lien est présent
    }else if (empty($_POST['link_administratif']) && !empty($_POST['name_link_administratif'])) {
        updateNameOnly($table, $_POST['name_link_administratif'], $_POST['administratif_place_number']);
        echo "Le nom du lien n°" . $_POST['administratif_place_number'] . " de la catégorie administratif, à bien été mis à jour <br/><br/><a href='admin.php#administratif'>retour à la configuration</a>";

    }else{
        echo "si vous ne voulez rien changer, libre à vous =). <br/><br/><a href='admin.php#administratif'>retour à la configuration</a>";
    }
}
// INSERT dans la db avec les infos du formulaire ADMINISTRATIF
// On récupère et vérifie les données utilisateurs
if (isset($_POST['add_link_administratif'])) {
    $add_link_administratif = $_POST['add_link_administratif'];
    $add_name_link_administratif = $_POST['add_name_link_administratif'];
    $add_place_link_administratif = $_POST['$add_place_link_administratif'];
    $table = 'link_administratif';

    insertLink($table, $add_name_link_administratif, $add_link_administratif, $add_place_link_administratif);
    echo "Le lien n°" . $add_place_link_administratif . " de la catégorie administratif à bien été ajouté <br/><br/><a href='admin.php#administratif'>retour à la configuration</a>";
}
// DELETE dans la db avec les infos du formulaire ADMINISTRATIF
// On récupère et vérifie les données utilisateurs
if (isset($_POST['delete_link_administratif_place'])) {
    $delete_link_administratif_place = $_POST['delete_link_administratif_place'];
    $table = 'link_administratif';

    deleteLink($table, $delete_link_administratif_place);
    echo "Le lien n°" . $delete_link_administratif_place . " de la catégorie games à bien été supprimer <br/><br/><a href='admin.php#administratif'>retour à la configuration</a>";
}
/*
 * FIN ZONE LINK ADMINISTRATIF
 */

/*
 * ZONE LINK DIVERS
 */
// UPDATE la db avec les infos du formulaire DIVERS
// On récupère et vérifie les données utilisateurs
if (isset($_POST['link_divers'])){
    //Déclarations
    $table = 'link_divers';

    //Vérification données utilisateur
    $_POST['link_divers'] = htmlspecialchars($_POST['link_divers']);
    $_POST['name_link_divers'] = htmlspecialchars($_POST['name_link_divers']);

    //Sinon si uniquement le lien et le nom du lien sont présent
    if (!empty($_POST['link_divers']) && !empty($_POST['name_link_divers'])){
        updateLinkName($table, $_POST['link_divers'], $_POST['name_link_divers'], $_POST['divers_place_number']);
        echo "Le lien n°" . $_POST['divers_place_number'] . " de la catégorie divers et son nom ont bien été mis à jour <br/><br/><a href='admin.php#divers'>retour à la configuration</a>";

        //Sinon si uniquement le lien est présent
    }else if (!empty($_POST['link_divers']) && empty($_POST['name_link_divers'])) {
        updateLinkOnly($table, $_POST['link_divers'], $_POST['divers_place_number']);
        echo "Le lien n°" . $_POST['divers_place_number'] . " de la catégorie divers, à bien été mis à jour <br/><br/><a href='admin.php#divers'>retour à la configuration</a>";

        //Sinon si uniquement le nom du lien est présent
    }else if (empty($_POST['link_divers']) && !empty($_POST['name_link_divers'])) {
        updateNameOnly($table, $_POST['name_link_divers'], $_POST['divers_place_number']);
        echo "Le nom du lien n°" . $_POST['divers_place_number'] . " de la catégorie divers, à bien été mis à jour <br/><br/><a href='admin.php#divers'>retour à la configuration</a>";

    }else{
        echo "si vous ne voulez rien changer, libre à vous =). <br/><br/><a href='admin.php#divers'>retour à la configuration</a>";
    }
}
// INSERT dans la db avec les infos du formulaire DIVERS
// On récupère et vérifie les données utilisateurs
if (isset($_POST['add_link_divers'])) {
    $add_link_divers = $_POST['add_link_divers'];
    $add_name_link_divers = $_POST['add_name_link_divers'];
    $add_place_link_divers = $_POST['$add_place_link_divers'];
    $table = 'link_divers';

    insertLink($table, $add_name_link_divers, $add_link_divers, $add_place_link_divers);
    echo "Le lien n°" . $add_place_link_divers . " de la catégorie divers à bien été ajouté <br/><br/><a href='admin.php#divers'>retour à la configuration</a>";
}
// DELETE dans la db avec les infos du formulaire DIVERS
// On récupère et vérifie les données utilisateurs
if (isset($_POST['delete_link_divers_place'])) {
    $delete_link_divers_place = $_POST['delete_link_divers_place'];
    $table = 'link_divers';

    deleteLink($table, $delete_link_divers_place);
    echo "Le lien n°" . $delete_link_divers_place . " de la catégorie divers à bien été supprimer <br/><br/><a href='admin.php#divers'>retour à la configuration</a>";
}
/*
 * FIN ZONE LINK DIVERS
 */