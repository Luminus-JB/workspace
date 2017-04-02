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
    $maxheight = 100;
    $maxwidth= 100;

    //  La fonction getimagesize retourne un tableau dont l'index 0 donne la largeur et l'index 1 la hauteur de l'image
    $image_sizes = getimagesize($_FILES['img_link_head']['tmp_name']);
    //1. strrchr renvoie l'extension avec le point (« . »).
    //2. substr(chaine,1) ignore le premier caractère de chaine.
    //3. strtolower met l'extension en minuscules.
    $extension_upload = strtolower(  substr(  strrchr($_FILES['img_link_head']['name'], '.')  ,1)  );

    if ($_FILES['img_link_head']['error'] > 0) $erreur = "Erreur lors du transfert";
    if ($_FILES['img_link_head']['size'] > $maxsize) $erreur = "Le fichier est trop gros";
    if (!in_array($extension_upload,$extensions_valides) ) $erreur = "Ce type de fichier n'est pas autorisé";
    if ($image_sizes[0] > $maxwidth OR $image_sizes[1] > $maxheight) $erreur = "Image trop grande taille max 100 px";

    $name_img = md5(uniqid(rand(), true));
    $destination = "../img/{$name_img}.{$extension_upload}";
    $resultat = move_uploaded_file($_FILES['img_link_head']['tmp_name'],$destination);


    if (isset($erreur)){
        echo $erreur . '<br/><br/><a href=\'admin.php\'>retour à la configuration</a>';
    }else{
        updateLinkImage($table, $_POST['name_link_head'], $_POST['link_head'], $_POST['head_place_number'], $destination);
        echo "Le lien n°" . $_POST['head_place_number'] . " de l'entête à bien été mis à jour <br/><br/><a href='admin.php'>retour à la configuration</a>";
    }
}
// INSERT dans la db avec les infos du formulaire HEAD
// On récupère et vérifie les données utilisateurs
if (isset($_POST['add_link_head'])) {
    $add_link_head = $_POST['add_link_head'];
    $add_name_link_head = $_POST['add_name_link_head'];
    $add_place_link_head = $_POST['$add_place_link_head'];
    $table = 'link_head';

    insertLinkImage($table, $add_name_link_head, $add_link_head, $add_place_link_head);
    echo "Le lien n°" . $add_place_link_head . " de l'entête à bien été ajouté <br/><br/><a href='admin.php'>retour à la configuration</a>";
}
// DELETE dans la db avec les infos du formulaire HEAD
// On récupère et vérifie les données utilisateurs
if (isset($_POST['delete_link_head_place'])) {
    $delete_link_head_place = $_POST['delete_link_head_place'];
    $table = 'link_head';

    deleteLink($table, $delete_link_head_place);
    echo "Le lien n°" . $delete_link_head_place . " de l'entête à bien été supprimer <br/><br/><a href='admin.php'>retour à la configuration</a>";
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
    $link_nav = $_POST['link_nav'];
    $name_link_nav = $_POST['name_link_nav'];
    $nav_place_number = $_POST['nav_place_number'];
    $table = 'link_nav';

    updateLink($table, $name_link_nav, $link_nav, $nav_place_number);
    echo "Le lien n°" . $nav_place_number . " du nav à bien été mis à jour <br/><br/><a href='admin.php'>retour à la configuration</a>";
}
// INSERT dans la db avec les infos du formulaire NAV
// On récupère et vérifie les données utilisateurs
if (isset($_POST['add_link_nav'])) {
    $add_link_nav = $_POST['add_link_nav'];
    $add_name_link_nav = $_POST['add_name_link_nav'];
    $add_place_link_nav = $_POST['$add_place_link_nav'];
    $table = 'link_nav';

    insertLink($table, $add_name_link_nav, $add_link_nav, $add_place_link_nav);
    echo "Le lien n°" . $add_place_link_nav . " du nav à bien été ajouté <br/><br/><a href='admin.php'>retour à la configuration</a>";
}
// DELETE dans la db avec les infos du formulaire NAV
// On récupère et vérifie les données utilisateurs
if (isset($_POST['delete_link_nav_place'])) {
    $delete_link_nav_place = $_POST['delete_link_nav_place'];
    $table = 'link_nav';

    deleteLink($table, $delete_link_nav_place);
    echo "Le lien n°" . $delete_link_nav_place . " du nav à bien été supprimer <br/><br/><a href='admin.php'>retour à la configuration</a>";
}
/*
 * FIN ZONE LINK NAV
 */

/*
 * ZONE LINK GAMES
 */
// UPDATE la db avec les infos du formulaire GAMES
// On récupère et vérifie les données utilisateurs
if (isset($_POST['link_games'])) {
    $link_games = $_POST['link_games'];
    $name_link_games = $_POST['name_link_games'];
    $games_place_number = $_POST['games_place_number'];
    $table = 'link_games';

    updateLink($table, $name_link_games, $link_games, $games_place_number);
    echo "Le lien n°" . $games_place_number . " de la catégorie games à bien été mis à jour <br/><br/><a href='admin.php'>retour à la configuration</a>";
}
// INSERT dans la db avec les infos du formulaire GAMES
// On récupère et vérifie les données utilisateurs
if (isset($_POST['add_link_games'])) {
    $add_link_games = $_POST['add_link_games'];
    $add_name_link_games = $_POST['add_name_link_games'];
    $add_place_link_games = $_POST['$add_place_link_games'];
    $table = 'link_games';

    insertLink($table, $add_name_link_games, $add_link_games, $add_place_link_games);
    echo "Le lien n°" . $add_place_link_games . " de la catégorie games à bien été ajouté <br/><br/><a href='admin.php'>retour à la configuration</a>";
}
// DELETE dans la db avec les infos du formulaire GAMES
// On récupère et vérifie les données utilisateurs
if (isset($_POST['delete_link_games_place'])) {
    $delete_link_games_place = $_POST['delete_link_games_place'];
    $table = 'link_games';

    deleteLink($table, $delete_link_games_place);
    echo "Le lien n°" . $delete_link_games_place . " de la catégorie games à bien été supprimer <br/><br/><a href='admin.php'>retour à la configuration</a>";
}
/*
 * FIN ZONE LINK GAMES
 */

/*
 * ZONE LINK DEVTOOLS
 */
// UPDATE la db avec les infos du formulaire DEVTOOLS
// On récupère et vérifie les données utilisateurs
if (isset($_POST['link_devtools'])) {
    $link_devtools = $_POST['link_devtools'];
    $name_link_devtools = $_POST['name_link_devtools'];
    $devtools_place_number = $_POST['devtools_place_number'];
    $table = 'link_devtools';

    updateLink($table, $name_link_devtools, $link_devtools, $devtools_place_number);
    echo "Le lien n°" . $devtools_place_number . " de la catégorie devtools à bien été mis à jour <br/><br/><a href='admin.php'>retour à la configuration</a>";
}
// INSERT dans la db avec les infos du formulaire DEVTOOLS
// On récupère et vérifie les données utilisateurs
if (isset($_POST['add_link_devtools'])) {
    $add_link_devtools = $_POST['add_link_devtools'];
    $add_name_link_devtools = $_POST['add_name_link_devtools'];
    $add_place_link_devtools = $_POST['$add_place_link_devtools'];
    $table = 'link_devtools';

    insertLink($table, $add_name_link_devtools, $add_link_devtools, $add_place_link_devtools);
    echo "Le lien n°" . $add_place_link_devtools . " de la catégorie devtools à bien été ajouté <br/><br/><a href='admin.php'>retour à la configuration</a>";
}
// DELETE dans la db avec les infos du formulaire DEVTOOLS
// On récupère et vérifie les données utilisateurs
if (isset($_POST['delete_link_devtools_place'])) {
    $delete_link_devtools_place = $_POST['delete_link_devtools_place'];
    $table = 'link_devtools';

    deleteLink($table, $delete_link_devtools_place);
    echo "Le lien n°" . $delete_link_devtools_place . " de la catégorie devtools à bien été supprimer <br/><br/><a href='admin.php'>retour à la configuration</a>";
}
/*
 * FIN ZONE LINK DEVTOOLS
 */

/*
 * ZONE LINK ADMINISTRATIF
 */
// UPDATE la db avec les infos du formulaire ADMINISTRATIF
// On récupère et vérifie les données utilisateurs
if (isset($_POST['link_administratif'])) {
    $link_administratif = $_POST['link_administratif'];
    $name_link_administratif = $_POST['name_link_administratif'];
    $administratif_place_number = $_POST['administratif_place_number'];
    $table = 'link_administratif';

    updateLink($table, $name_link_administratif, $link_administratif, $administratif_place_number);
    echo "Le lien n°" . $administratif_place_number . " de la catégorie administratif à bien été mis à jour <br/><br/><a href='admin.php'>retour à la configuration</a>";
}
// INSERT dans la db avec les infos du formulaire ADMINISTRATIF
// On récupère et vérifie les données utilisateurs
if (isset($_POST['add_link_administratif'])) {
    $add_link_administratif = $_POST['add_link_administratif'];
    $add_name_link_administratif = $_POST['add_name_link_administratif'];
    $add_place_link_administratif = $_POST['$add_place_link_administratif'];
    $table = 'link_administratif';

    insertLink($table, $add_name_link_administratif, $add_link_administratif, $add_place_link_administratif);
    echo "Le lien n°" . $add_place_link_administratif . " de la catégorie administratif à bien été ajouté <br/><br/><a href='admin.php'>retour à la configuration</a>";
}
// DELETE dans la db avec les infos du formulaire ADMINISTRATIF
// On récupère et vérifie les données utilisateurs
if (isset($_POST['delete_link_administratif_place'])) {
    $delete_link_administratif_place = $_POST['delete_link_administratif_place'];
    $table = 'link_administratif';

    deleteLink($table, $delete_link_administratif_place);
    echo "Le lien n°" . $delete_link_administratif_place . " de la catégorie games à bien été supprimer <br/><br/><a href='admin.php'>retour à la configuration</a>";
}
/*
 * FIN ZONE LINK ADMINISTRATIF
 */

/*
 * ZONE LINK DIVERS
 */
// UPDATE la db avec les infos du formulaire DIVERS
// On récupère et vérifie les données utilisateurs
if (isset($_POST['link_divers'])) {
    // On définit nom de la table sur lequel sera faites la requête SQL
    $table = 'link_divers';
    // On récupère le lien http
    $link_divers = $_POST['link_divers'];
    // On récupère le nom de ce lien
    $name_link_divers = $_POST['name_link_divers'];
    // On récupère la place du lien
    $divers_place_number = $_POST['divers_place_number'];

    // Fonction contenant la requête SQL éditant le contenu de la table ciblé
    updateLink($table, $name_link_divers, $link_divers, $divers_place_number);
    // Message de confirmation utilisateur
    echo "Le lien n°" . $divers_place_number . " de la catégorie divers à bien été mis à jour <br/><br/><a href='admin.php'>retour à la configuration</a>";
}
// INSERT dans la db avec les infos du formulaire DIVERS
// On récupère et vérifie les données utilisateurs
if (isset($_POST['add_link_divers'])) {
    $add_link_divers = $_POST['add_link_divers'];
    $add_name_link_divers = $_POST['add_name_link_divers'];
    $add_place_link_divers = $_POST['$add_place_link_divers'];
    $table = 'link_divers';

    insertLink($table, $add_name_link_divers, $add_link_divers, $add_place_link_divers);
    echo "Le lien n°" . $add_place_link_divers . " de la catégorie divers à bien été ajouté <br/><br/><a href='admin.php'>retour à la configuration</a>";
}
// DELETE dans la db avec les infos du formulaire DIVERS
// On récupère et vérifie les données utilisateurs
if (isset($_POST['delete_link_divers_place'])) {
    $delete_link_divers_place = $_POST['delete_link_divers_place'];
    $table = 'link_divers';

    deleteLink($table, $delete_link_divers_place);
    echo "Le lien n°" . $delete_link_divers_place . " de la catégorie divers à bien été supprimer <br/><br/><a href='admin.php'>retour à la configuration</a>";
}
/*
 * FIN ZONE LINK DIVERS
 */