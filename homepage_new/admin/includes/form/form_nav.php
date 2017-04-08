<?php
/**
 * Created by PhpStorm.
 * User: Lumi
 * Date: 06/04/2017
 * Time: 14:36
 */

/*
 * ZONE LINK NAV
 */
// Déclarations et fonctions pour la zone link nav
$table = 'link_nav';
$list_total_place = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14);
$list_free_place = listFreePlace($table, $list_total_place);
$list_empty_place = listEmptyPlace($table);
$list_name_empty_place = listNameEmptyPlace($table);

// Formulaire partie 1
echo '<!-- ZONE LINK NAV  -->
<div id="nav" class="formulaire">
<form method="post" action="register_link.php" enctype="multipart/form-data" >
    <h2>Lien Nav</h2>
    <h3>Modification Lien</h3>
    <label for="link_nav">Lien</label>
    <input type="url" name="link_nav" id="link_nav"/>
    <label for="name_link_nav">Nom Lien</label>
    <input type="text" name="name_link_nav" id="name_link_nav"/>
    <label for="nav_place_number">Lien n°</label>
    <select id="nav_place_number" name="nav_place_number">';

foreach (array_combine($list_empty_place, $list_name_empty_place) as $place => $name) {
    echo '<option>' . $place . ' - ' . $name;
}

echo '</select><br/><br/>
<label for="img_link_nav" class="form_img">Icône du fichier (JPG, PNG ou GIF | max. 15 Ko) :</label>
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

echo '<label for="img_link_nav" class="form_img ' . $class = freeOrFull($list_free_place) . '">Icône du fichier (JPG, PNG ou GIF | max. 15 Ko) :</label>
<input type="file" required name="img_link_nav"/> *<br/><br/>
<input type="submit" value="Ajouter"/><br /><br /><i class="required_message">Les champs indiqués par une * sont obligatoires</i></form>';

//Formulaire partie 2
echo '<form method="post" action="register_link.php" enctype="multipart/form-data" >
    <h3>Suppression Lien</h3>
    <label for="delete_link_nav_place">Lien n°</label>
    <select id="delete_link_nav_place" name="delete_link_nav_place">';

foreach (array_combine($list_empty_place, $list_name_empty_place) as $place => $name) {
    echo '<option>' . $place . ' - ' . $name;
}
//Formulaire partie 3
echo '</select><br/><br/>
<input type="submit" value="Supprimer"/>
</form>
</div>
<!-- ZONE LINK NAV  -->';
/*
 * FIN ZONE LINK NAV
 */