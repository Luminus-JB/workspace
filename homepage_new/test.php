<?php
include("includes/connect_db.php");
$table = 'wallpaper_games';
$_POST['head_place_number'] = "k - Gmail";
$_POST['head_place_number'] = substr($_POST['head_place_number'], 0, 1);
echo $_POST['head_place_number'];
?>