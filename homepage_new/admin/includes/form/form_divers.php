<?php
/**
 * Created by PhpStorm.
 * User: Lumi
 * Date: 06/04/2017
 * Time: 14:46
 */

/*
 * ZONE LINK DIVERS
 */
// Déclarations et fonctions pour la zone link divers
$table = 'link_divers';
$list_total_place = array(1, 2, 3, 4, 5, 6);
$list_free_place = listFreePlace($table, $list_total_place);
$list_empty_place = listEmptyPlace($table);
$list_name_empty_place = listNameEmptyPlace($table);

// Formulaire partie 1
echo '<!-- ZONE LINK DIVERS  -->
<div id="divers" class="formulaire">
    <form method="post" action="register_link.php" enctype="multipart/form-data" >
        <h2>Lien Divers</h2>
        <h3>Image de couverture</h3>
        <label for="img_divers" class="small">Icône du fichier (JPG, PNG ou GIF | max. 35 Ko) :</label>
        <input type="file" name="img_divers" id="img_divers"/> *<br/><br/>
        <input type="submit" value="Modifier"/>
    </form>
    <form method="post" action="register_link.php" enctype="multipart/form-data" >
        <h3>Modification Lien</h3>
        <label for="link_divers">Lien</label>
        <input type="url" name="link_divers" id="link_divers"/>
        <label for="name_link_divers">Nom Lien</label>
        <input type="text" name="name_link_divers" id="name_link_divers"/>
        <label for="divers_place_number">Lien n°</label>
        <select id="divers_place_number" name="divers_place_number">';

foreach (array_combine($list_empty_place, $list_name_empty_place) as $place => $name) {
    echo '<option>' . $place . ' - ' . $name;
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
echo '<form method="post" action="register_link.php" enctype="multipart/form-data" >
    <h3>Suppression Lien</h3>
    <label for="delete_link_divers_place">Lien n°</label>
    <select id="delete_link_divers_place" name="delete_link_divers_place">';

foreach (array_combine($list_empty_place, $list_name_empty_place) as $place => $name) {
    echo '<option>' . $place . ' - ' . $name;
}
//Formulaire partie 3
echo '</select><br /><br />
<input type="submit" value="Supprimer"/>
</form>
</div>
<!-- ZONE LINK DIVERS  -->';
/*
 * FIN ZONE LINK DIVERS
 */