<?php
/**
 * Created by PhpStorm.
 * User: pugju
 * Date: 29/03/2017
 * Time: 17:26
 */
/*
 * INCLUDES
 */
//Contient le header
include("includes/head.html");
//Contient la connexion à la db
include("includes/connect_db.php");
//Contient les fonctions
include("function.php");


echo '<!-- General --><div id="main_container">';

/*
 * NAV
 */
$table = 'link_nav';
$list_link = listLink($table);
$list_name_link = listNameLink($table);

echo '<!-- Nav --><div id="nav"><a href="http://www.julien-barras.fr/" id="lumi"></a><div id="second_link_container">';

if (isset($list_link[0])) {
    echo '<a href="' . $list_link[0] . '" id="link_nav_1" class="second_link" title="' . $list_name_link[0] . '"></a><br/>';
}
if (isset($list_link[1])) {
    echo '<a href="' . $list_link[1] . '" id="link_nav_2" class="second_link" title="' . $list_name_link[1] . '"></a><br/>';
}
if (isset($list_link[2])) {
    echo '<a href="' . $list_link[2] . '" id="link_nav_3" class="second_link" title="' . $list_name_link[2] . '"></a>';
}
if (isset($list_link[3])) {
    echo '<a href="' . $list_link[3] . '" id="link_nav_4" class="second_link" title="' . $list_name_link[3] . '"></a>';
}
if (isset($list_link[4])) {
    echo '<a href="' . $list_link[4] . '" id="link_nav_5" class="second_link" title="' . $list_name_link[4] . '"></a>';
}
if (isset($list_link[5])) {
    echo '<a href="' . $list_link[5] . '" id="link_nav_6" class="second_link" title="' . $list_name_link[5] . '"></a>';
}
if (isset($list_link[6])) {
    echo '<a href="' . $list_link[6] . '" id="link_nav_7" class="second_link" title="' . $list_name_link[6] . '"></a>';
}
if (isset($list_link[7])) {
    echo '<a href="' . $list_link[7] . '" id="link_nav_8" class="second_link" title="' . $list_name_link[7] . '"></a>';
}
if (isset($list_link[8])) {
    echo '<a href="' . $list_link[8] . '" id="link_nav_9" class="second_link" title="' . $list_name_link[8] . '"></a>';
}
if (isset($list_link[9])) {
    echo '<a href="' . $list_link[9] . '" id="link_nav_10" class="second_link" title="' . $list_name_link[9] . '"></a>';
}
if (isset($list_link[10])) {
    echo '<a href="' . $list_link[10] . '" id="link_nav_11" class="second_link" title="' . $list_name_link[10] . '"></a>';
}
if (isset($list_link[11])) {
    echo '<a href="' . $list_link[11] . '" id="link_nav_12" class="second_link" title="' . $list_name_link[11] . '"></a>';
}
if (isset($list_link[12])) {
    echo '<a href="' . $list_link[12] . '" id="link_nav_13" class="second_link" title="' . $list_name_link[12] . '"></a>';
}
if (isset($list_link[13])) {
    echo '<a href="' . $list_link[13] . '" id="link_nav_14" class="second_link" title="' . $list_name_link[13] . '"></a>';
}
if (isset($list_link[14])) {
    echo '<a href="' . $list_link[14] . '" id="link_nav_15" class="second_link" title="' . $list_name_link[14] . '"></a>';
}
if (isset($list_link[15])) {
    echo '<a href="' . $list_link[15] . '" id="link_nav_16" class="second_link" title="' . $list_name_link[15] . '"></a>';
}

echo '</div></div><!-- Nav -->';
/*
 * END NAV
 */

/*
 * HEADER
 */
echo '<!-- Lien Sociaux + Corp --><div id="body">';
$table = 'link_head';
$list_link = listLink($table);
$list_name_link = listNameLink($table);
echo '<!-- Link - Header --><div id="main_link_container">';

if (isset($list_link[0])) {
    echo '<a href="' . $list_link[0] . '" id="gmail" class="main_link" background ="img/agenda.png" title="' . $list_name_link[0] . '" ></a>';
}
if (isset($list_link[1])) {
    echo '<a href="' . $list_link[1] . '" id="google_translate" class="main_link" title="' . $list_name_link[1] . '"></a>';
}
if (isset($list_link[2])) {
    echo '<a href="' . $list_link[2] . '" id="google_drive" class="main_link" title="google ' . $list_name_link[2] . '"></a>';
}
if (isset($list_link[3])) {
    echo '<a href="' . $list_link[3] . '" id="youtube" class="main_link" title="' . $list_name_link[3] . '"></a>';
}
if (isset($list_link[4])) {
    echo '<a href="' . $list_link[4] . '" id="netflix" class="main_link" title="' . $list_name_link[4] . '"></a>';
}
if (isset($list_link[5])) {
    echo '<a href="' . $list_link[5] . '" id="github" class="main_link" title="' . $list_name_link[5] . '"></a>';
}
if (isset($list_link[6])) {
    echo '<a href="' . $list_link[6] . '" id="evernote" class="main_link" title="' . $list_name_link[6] . '"></a>';
}
if (isset($list_link[7])) {
    echo '<a href="' . $list_link[7] . '" id="dropbox" class="main_link" title="' . $list_name_link[7] . '"></a>';
}

echo '</div><!-- Link - Header -->';
/*
 * END HEADER
 */

/*
 * GAMING
 */
$table = 'link_games';
$list_link = listLink($table);
$list_name_link = listNameLink($table);

echo '<!-- General Link --><div id="general_link_container">
      <!-- Gaming Link --><div id="gaming_container" class="link_list_container"><div id="gaming" class="link_list">';

if (isset($list_link[0])) {
    echo '<a href="' . $list_link[0] . '">' . $list_name_link[0] . '</a><br/>';
}
if (isset($list_link[1])) {
    echo '<a href="' . $list_link[1] . '">' . $list_name_link[1] . '</a><br/>';
}
if (isset($list_link[2])) {
    echo '<a href="' . $list_link[2] . '">' . $list_name_link[2] . '</a><br/>';
}
if (isset($list_link[3])) {
    echo '<a href="' . $list_link[3] . '">' . $list_name_link[3] . '</a><br/>';
}
if (isset($list_link[4])) {
    echo '<a href="' . $list_link[4] . '">' . $list_name_link[4] . '</a><br/>';
}
if (isset($list_link[5])) {
    echo '<a href="' . $list_link[5] . '">' . $list_name_link[5] . '</a><br/>';
}
echo '</div></div><!-- Gaming Link -->';
/*
 * END GAMING
 */

/*
 * DEVTOOLS
 */
$table = 'link_devtools';
$list_link = listLink($table);
$list_name_link = listNameLink($table);

echo '<!-- Devtools Link --><div id="devtools_container" class="link_list_container"><div id="devtools" class="link_list">';

if (isset($list_link[0])) {
    echo '<a href="' . $list_link[0] . '">' . $list_name_link[0] . '</a><br/>';
}
if (isset($list_link[1])) {
    echo '<a href="' . $list_link[1] . '">' . $list_name_link[1] . '</a><br/>';
}
if (isset($list_link[2])) {
    echo '<a href="' . $list_link[2] . '">' . $list_name_link[2] . '</a><br/>';
}
if (isset($list_link[3])) {
    echo '<a href="' . $list_link[3] . '">' . $list_name_link[3] . '</a><br/>';
}
if (isset($list_link[4])) {
    echo '<a href="' . $list_link[4] . '">' . $list_name_link[4] . '</a><br/>';
}
if (isset($list_link[5])) {
    echo '<a href="' . $list_link[5] . '">' . $list_name_link[5] . '</a><br/>';
}

echo '</div></div><!-- Devtools Link -->';
/*
 * END DEVTOOLS
 */

/*
 * ADMINISTRATIF
 */
$table = 'link_administratif';
$list_link = listLink($table);
$list_name_link = listNameLink($table);
echo '<!-- Administratif Link --><div id="administratif_container" class="link_list_container"><div id="administratif" class="link_list">';

if (isset($list_link[0])) {
    echo '<a href="' . $list_link[0] . '">' . $list_name_link[0] . '</a><br/>';
}
if (isset($list_link[1])) {
    echo '<a href="' . $list_link[1] . '">' . $list_name_link[1] . '</a><br/>';
}
if (isset($list_link[2])) {
    echo '<a href="' . $list_link[2] . '">' . $list_name_link[2] . '</a><br/>';
}
if (isset($list_link[3])) {
    echo '<a href="' . $list_link[3] . '">' . $list_name_link[3] . '</a><br/>';
}
if (isset($list_link[4])) {
    echo '<a href="' . $list_link[4] . '">' . $list_name_link[4] . '</a><br/>';
}
if (isset($list_link[5])) {
    echo '<a href="' . $list_link[5] . '">' . $list_name_link[5] . '</a><br/>';
}

echo '</div></div><!-- Administratif Link -->';
/*
 * END ADMINISTRATIF
 */

/*
 * DIVERS
 */
$table = 'link_divers';
$list_link = listLink($table);
$list_name_link = listNameLink($table);
echo '<!-- Divers Link --><div id="divers_container" class="link_list_container"><div id="divers" class="link_list">';

if (isset($list_link[0])) {
    echo '<a href="' . $list_link[0] . '">' . $list_name_link[0] . '</a><br/>';
}
if (isset($list_link[1])) {
    echo '<a href="' . $list_link[1] . '">' . $list_name_link[1] . '</a><br/>';
}
if (isset($list_link[2])) {
    echo '<a href="' . $list_link[2] . '">' . $list_name_link[2] . '</a><br/>';
}
if (isset($list_link[3])) {
    echo '<a href="' . $list_link[3] . '">' . $list_name_link[3] . '</a><br/>';
}
if (isset($list_link[4])) {
    echo '<a href="' . $list_link[4] . '">' . $list_name_link[4] . '</a><br/>';
}
if (isset($list_link[5])) {
    echo '<a href="' . $list_link[5] . '">' . $list_name_link[5] . '</a><br/>';
}

echo '</div></div><!-- Divers Link -->
      </div><!-- General Link -->
      </div><!-- Lien Sociaux + Corp  -->
      </div><!-- General -->
      </body>';
/*
 * FIN DIVERS
 */


/*
 * FOOTER
 */
echo '<footer>
      <!-- Signature -->
      <div id="signature" align="center">
        <p>Make by Lumi</p>
      </div>
      <!-- Signature -->

      <!-- Compteur -->
      <div id="compteur" align="center">';

$monfichier = fopen('compteur.txt', 'r+');
$pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
fseek($monfichier, 0); // On remet le curseur au début du fichier
fputs($monfichier, $pages_vues); // On écrit le nouveau nombre de pages vues
fclose($monfichier);

echo '<p id="compteur">Cette page a été vue ' . $pages_vues . ' fois !</p>
      </div>
      <!-- Compteur -->
      </footer>
      </html>';
/*
 * END FOOTER
 */