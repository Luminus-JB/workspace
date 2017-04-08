<?php
/**
 * Created by PhpStorm.
 * User: Lumi
 * Date: 06/04/2017
 * Time: 14:39
 */

/*
 * ZONE LINK GAMES
 */
// Déclarations et fonctions pour la zone link games
$table = 'link_games';
$list_total_place = array(1, 2, 3, 4, 5, 6);
$list_free_place = listFreePlace($table, $list_total_place);
$list_empty_place = listEmptyPlace($table);
$list_name_empty_place = listNameEmptyPlace($table);

// Formulaire partie 1
echo '<!-- ZONE LINK GAMES  -->
<div id="games" class="formulaire">
    <form method="post" action="register_link.php" enctype="multipart/form-data" >
        <h2>Lien Games</h2>
        <h3>Image de couverture</h3>
        <label for="img_games" class="small">Icône du fichier (JPG, PNG ou GIF | max. 35 Ko) :</label>
        <input type="file" name="img_games" id="img_games"/> *<br/><br/>
        <input type="submit" value="Modifier"/>
    </form>
    <form method="post" action="register_link.php" enctype="multipart/form-data" >
        <h3>Modification Lien</h3>
        <label for="link_games">Lien</label>
        <input type="url" name="link_games" id="link_games"/>
        <label for="name_link_games">Nom Lien</label>
        <input type="text" name="name_link_games" id="name_link_games"/>
        <label for="games_place_number">Lien n°</label>
        <select id="games_place_number" name="games_place_number">';

foreach (array_combine($list_empty_place, $list_name_empty_place) as $place => $name) {
    echo '<option>' . $place . ' - ' . $name;
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
echo '<form method="post" action="register_link.php" enctype="multipart/form-data" >
    <h3>Suppression Lien</h3>
    <label for="delete_link_games_place">Lien n°</label>
    <select id="delete_link_games_place" name="delete_link_games_place">';

foreach (array_combine($list_empty_place, $list_name_empty_place) as $place => $name) {
    echo '<option>' . $place . ' - ' . $name;
}
//Formulaire partie 3
echo '</select><br/><br/>
<input type="submit" value="Supprimer"/>
</form>
</div>
<!-- ZONE LINK GAMES  -->';
/*
 * FIN ZONE LINK GAMES
 */