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
//Contient le header
include("includes/admin_header.html");
//Contient la connexion à la db
include("includes/connect_db.php");
//Contient les fonctions
include("function.php");

/*
 * ZONE LINK HEAD
 */

// Déclarations et fonctions pour la zone link head
$table = 'link_head';
// Renvoie le nombre de place totale dans la table en paramètre
// Liste de tous les emplacements disponibles dans le nav
$list_total_place = array(1, 2, 3, 4, 5, 6, 7, 8);
// Compare la liste des places occupés et la liste des places totales en paramètres et renvoie la liste des places libres dans un array
$list_free_place = listFreePlace($table, $list_total_place);
// Récupère la liste croissante des places disponibles dans la table en paramètre.
$list_empty_place = listEmptyPlace($table);

//Redirection vers la homepage
echo '<a href="../index.php">Retour à la homepage</a>';
// Formulaire partie 1
include("includes/form_link_head/form_part_1.html");
//Tant que $i est plus petit que le nombre de lignes dans la db link_nav
foreach ($list_empty_place as $value) {
    echo '<option>' . $value;
}

echo '</select><br/><br/>
<label for="img_link_head">Icône du fichier (JPG, PNG ou GIF | max. 15 Ko) :</label>
<input type="file" name="img_link_head" id="img_link_head"/><br/><br/>
<input type="submit" value="Modifier"/><br /><br />
</form>';

echo '<form method="post" action="register_link.php" enctype="multipart/form-data" >
    <h3>Ajout Lien</h3>
    <label for="add_link_head" class="' . $class = freeOrFull($list_free_place) . '">Lien</label>
    <input type="url" required name="add_link_head" id="add_link_head" class="' . $class = freeOrFull($list_free_place) . '"/>  *<br/><br/>
    <label for="add_name_link_head" class="' . $class = freeOrFull($list_free_place) . '">Nom Lien</label>
    <input  type="text" required name="add_name_link_head" id="add_name_link_head" class="' . $class = freeOrFull($list_free_place) . '"/>  *<br/><br/>
    <label for="$add_place_link_head" class="' . $class = freeOrFull($list_free_place) . '">Lien n°</label>
    <select id="$add_place_link_head" required name="$add_place_link_head" class="' . $class = freeOrFull($list_free_place) . '">';
//Parcours de  l'array listant les places disponibles et l'affiche dans le menu déroulant
foreach ($list_free_place as $value) {
    echo '<option>' . $value;
}

echo'</select>  *<br/>';
if (empty($list_free_place)) {
    echo '<p><i class="limit_link_message"">Limite de lien atteinte, veuillez d\'abord en supprimer un.</i></p>';
}
echo '<label for="img_link_head" class="' . $class = freeOrFull($list_free_place) . '">Icône du fichier (JPG, PNG ou GIF | max. 15 Ko) :</label>
<input type="file" required name="img_link_head" id="img_link_head" class="' . $class = freeOrFull($list_free_place) . '"/>  *<br/><br/>
<input type="submit" value="Ajouter" class="' . $class = freeOrFull($list_free_place) . '"/><br /><br /><i class="required_message">Les champs indiqués par une * sont obligatoires</i></form>';


//Formulaire partie 3 (Suppression)
include("includes/form_link_head/form_part_3.html");

foreach ($list_empty_place as $value) {
    echo '<option>' . $value;
}
//Formulaire partie 4 (Fermeture du formulaire)
include("includes/form_link_head/form_part_4.html");
/*
 * FIN ZONE LINK HEAD
 */


/*
 * ZONE LINK NAV
 */
// Déclarations et fonctions pour la zone link nav
$table = 'link_nav';
$list_total_place = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14);
$list_free_place = listFreePlace($table, $list_total_place);
$list_empty_place = listEmptyPlace($table);

// Formulaire partie 1
include("includes/form_link_nav/form_part_1.html");

foreach ($list_empty_place as $value) {
    echo '<option>' . $value;
}

echo '</select><br/><br/>
<label for="img_link_nav">Icône du fichier (JPG, PNG ou GIF | max. 15 Ko) :</label>
<input type="file" name="img_link_nav" id="img_link_nav"/><br/><br/>
<input type="submit" value="Modifier"/><br /><br />
</form>';

echo '<form method="post" action="register_link.php" enctype="multipart/form-data" >
    <h3>Ajout Lien</h3>
    <label for="add_link_nav" class="' . $class = freeOrFull($list_free_place) . '" >Lien</label>
    <input type="url" required name="add_link_nav" id="add_link_nav" class="' . $class = freeOrFull($list_free_place) . '"/> *
    <label for="add_name_link_nav" class="' . $class = freeOrFull($list_free_place) . '">Nom Lien</label>
    <input type="text" required name="add_name_link_nav" id="add_name_link_nav" class="' . $class = freeOrFull($list_free_place) . '"/> *
    <label for="$add_place_link_nav" class="' . $class = freeOrFull($list_free_place) . '">Lien n°</label>
    <select id="$add_place_link_nav" required name="$add_place_link_nav" class="' . $class = freeOrFull($list_free_place) . '">';

foreach ($list_free_place as $i) {
    echo '<option>' . $i;
}
echo '</select> *<br/><br/>';

if (empty($list_free_place)) {
    echo '<p><i class="limit_link_message"">Limite de lien atteinte, veuillez d\'abord en supprimer un.</i></p>';
}

echo '<label for="img_link_nav">Icône du fichier (JPG, PNG ou GIF | max. 15 Ko) :</label>
<input type="file" name="img_link_nav"/> *<br/><br/>
<input type="submit" value="Ajouter"/><br /><br /><i class="required_message">Les champs indiqués par une * sont obligatoires</i></form>';

//Formulaire partie 2
include("includes/form_link_nav/form_part_2.html");

foreach ($list_empty_place as $value) {
    echo '<option>' . $value;
}
//Formulaire partie 3
include("includes/form_link_nav/form_part_3.html");
/*
 * FIN ZONE LINK NAV
 */

/*
 * ZONE LINK GAMES
 */
// Déclarations et fonctions pour la zone link games
$table = 'link_games';
$list_total_place = array(1, 2, 3, 4, 5, 6);
$list_free_place = listFreePlace($table, $list_total_place);
$list_empty_place = listEmptyPlace($table);

// Formulaire partie 1
include("includes/form_link_games/form_part_1.html");

foreach ($list_empty_place as $value) {
    echo '<option>' . $value;
}

echo '</select><br/><br/>
<input type="submit" value="Modifier"/><br /><br />
</form>';

echo '<form method="post" action="register_link.php" enctype="multipart/form-data" >
    <h3>Ajout Lien</h3>
    <label for="add_link_games" class="' . $class = freeOrFull($list_free_place) . '" >Lien</label>
    <input type="url" required name="add_link_games" id="add_link_games" class="' . $class = freeOrFull($list_free_place) . '"/>
    <label for="add_name_link_games" class="' . $class = freeOrFull($list_free_place) . '">Nom Lien</label>
    <input type="text" required name="add_name_link_games" id="add_name_link_games" class="' . $class = freeOrFull($list_free_place) . '"/>
    <label for="$add_place_link_games" class="' . $class = freeOrFull($list_free_place) . '">Lien n°</label>
    <select id="$add_place_link_games" required name="$add_place_link_games" class="' . $class = freeOrFull($list_free_place) . '">';

foreach ($list_free_place as $i) {
    echo '<option>' . $i;
}
echo '</select><br/><br/>';

if (empty($list_free_place)) {
    echo '<p><i class="limit_link_message"">Limite de lien atteinte, veuillez d\'abord en supprimer un.</i></p>';
}

echo '<input type="submit" value="Ajouter"/><br /><br /><i class="required_message">Les champs indiqués par une * sont obligatoires</i></form>';

//Formulaire partie 2
include("includes/form_link_games/form_part_2.html");

foreach ($list_empty_place as $value) {
    echo '<option>' . $value;
}
//Formulaire partie 3
include("includes/form_link_games/form_part_3.html");
/*
 * FIN ZONE LINK GAMES
 */

/*
 * ZONE LINK DEVTOOLS
 */
// Déclarations et fonctions pour la zone link devtools
$table = 'link_devtools';
$list_total_place = array(1, 2, 3, 4, 5, 6);
$list_free_place = listFreePlace($table, $list_total_place);
$list_empty_place = listEmptyPlace($table);

echo '<div id="devtools">';
// Formulaire partie 1
include("includes/form_link_devtools/form_part_1.html");

foreach ($list_empty_place as $value) {
    echo '<option>' . $value;
}

echo '</select><br/><br/>
<input type="submit" value="Modifier"/><br /><br />
</form>';

echo '<form method="post" action="register_link.php" enctype="multipart/form-data" >
    <h3>Ajout Lien</h3>
    <label for="add_link_devtools" class="' . $class = freeOrFull($list_free_place) . '" >Lien</label>
    <input type="url" required name="add_link_devtools" id="add_link_devtools" class="' . $class = freeOrFull($list_free_place) . '"/>
    <label for="add_name_link_devtools" class="' . $class = freeOrFull($list_free_place) . '">Nom Lien</label>
    <input type="text" required name="add_name_link_devtools" id="add_name_link_devtools" class="' . $class = freeOrFull($list_free_place) . '"/>
    <label for="$add_place_link_devtools" class="' . $class = freeOrFull($list_free_place) . '">Lien n°</label>
    <select id="$add_place_link_devtools" required name="$add_place_link_devtools" class="' . $class = freeOrFull($list_free_place) . '">';

foreach ($list_free_place as $i) {
    echo '<option>' . $i;
}
echo '</select><br/>';

if (empty($list_free_place)) {
    echo '<p><i class="limit_link_message"">Limite de lien atteinte, veuillez d\'abord en supprimer un.</i></p>';
}

echo '<input type="submit" value="Ajouter"/><br /><br /><i class="required_message">Les champs indiqués par une * sont obligatoires</i></form>';

//Formulaire partie 2
include("includes/form_link_devtools/form_part_2.html");

foreach ($list_empty_place as $value) {
    echo '<option>' . $value;
}
//Formulaire partie 3
include("includes/form_link_devtools/form_part_3.html");
/*
 * FIN ZONE LINK DEVTOOLS
 */

/*
 * ZONE LINK ADMINISTRATIF
 */
// Déclarations et fonctions pour la zone link administratif
$table = 'link_administratif';
$list_total_place = array(1, 2, 3, 4, 5, 6);
$list_free_place = listFreePlace($table, $list_total_place);
$list_empty_place = listEmptyPlace($table);

// Formulaire partie 1
include("includes/form_link_administratif/form_part_1.html");

foreach ($list_empty_place as $value) {
    echo '<option>' . $value;
}

echo '</select><br/><br/>
<input type="submit" value="Modifier"/><br /><br />
</form>';

echo '<form method="post" action="register_link.php" enctype="multipart/form-data" >
    <h3>Ajout Lien</h3>
    <label for="add_link_administratif" class="' . $class = freeOrFull($list_free_place) . '" >Lien</label>
    <input type="url" name="add_link_administratif" id="add_link_administratif" class="' . $class = freeOrFull($list_free_place) . '"/>
    <label for="add_name_link_administratif" class="' . $class = freeOrFull($list_free_place) . '">Nom Lien</label>
    <input type="text" name="add_name_link_administratif" id="add_name_link_administratif" class="' . $class = freeOrFull($list_free_place) . '"/>
    <label for="$add_place_link_administratif" class="' . $class = freeOrFull($list_free_place) . '">Lien n°</label>
    <select id="$add_place_link_administratif" name="$add_place_link_administratif" class="' . $class = freeOrFull($list_free_place) . '">';

foreach ($list_free_place as $i) {
    echo '<option>' . $i;
}
echo '</select><br/><br/>';

if (empty($list_free_place)) {
    echo '<p><i class="limit_link_message"">Limite de lien atteinte, veuillez d\'abord en supprimer un.</i></p>';
}

echo '<input type="submit" value="Ajouter"/><br /><br /><i class="required_message">Les champs indiqués par une * sont obligatoires</i></form>';

//Formulaire partie 2
include("includes/form_link_administratif/form_part_2.html");

foreach ($list_empty_place as $value) {
    echo '<option>' . $value;
}
//Formulaire partie 3
include("includes/form_link_administratif/form_part_3.html");
/*
 * FIN ZONE LINK ADMINISTRATIF
 */

/*
 * ZONE LINK DIVERS
 */
// Déclarations et fonctions pour la zone link divers
$table = 'link_divers';
$list_total_place = array(1, 2, 3, 4, 5, 6);
$list_free_place = listFreePlace($table, $list_total_place);
$list_empty_place = listEmptyPlace($table);

// Formulaire partie 1
include("includes/form_link_divers/form_part_1.html");

foreach ($list_empty_place as $value) {
    echo '<option>' . $value;
}

echo '</select><br/><br/>
<input type="submit" value="Modifier"/><br /><br />
</form>';

echo '<form method="post" action="register_link.php" enctype="multipart/form-data" >
    <h3>Ajout Lien</h3>
    <label for="add_link_divers" class="' . $class = freeOrFull($list_free_place) . '" >Lien</label>
    <input type="url" name="add_link_divers" id="add_link_divers" class="' . $class = freeOrFull($list_free_place) . '"/>
    <label for="add_name_link_divers" class="' . $class = freeOrFull($list_free_place) . '">Nom Lien</label>
    <input type="text" name="add_name_link_divers" id="add_name_link_divers" class="' . $class = freeOrFull($list_free_place) . '"/>
    <label for="$add_place_link_divers" class="' . $class = freeOrFull($list_free_place) . '">Lien n°</label>
    <select id="$add_place_link_divers" name="$add_place_link_divers" class="' . $class = freeOrFull($list_free_place) . '">';

foreach ($list_free_place as $i) {
    echo '<option>' . $i;
}
echo '</select><br/><br/>';

if (empty($list_free_place)) {
    echo '<p><i class="limit_link_message"">Limite de lien atteinte, veuillez d\'abord en supprimer un.</i></p>';
}

echo '<input type="submit" value="Ajouter"/><br /><br /><i class="required_message">Les champs indiqués par une * sont obligatoires</i></form>';

//Formulaire partie 2
include("includes/form_link_divers/form_part_2.html");

foreach ($list_empty_place as $value) {
    echo '<option>' . $value;
}
//Formulaire partie 3
include("includes/form_link_divers/form_part_3.html");
/*
 * FIN ZONE LINK DIVERS
 */

