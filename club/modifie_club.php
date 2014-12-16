<!doctype html>
<link rel="stylesheet" type="text/css" href="../style/style1.css"/>
<meta charset="UTF-8">

<html style="font-family:Ubuntu">
<head><title>modifié article</title></head>
<body>

<?php
echo '<center>';
include_once('../core/DB.php');
include_once('../core/GUI.php');
$id = $_GET['id'];

$where = new stdClass();
$where->id = $id;

$DB = new DB();

$updated_data = new stdClass();
$updated_data = $DB->get_record_where('clubs',$where);


echo '<div>';

$GUI = new GUI();
echo '<form action="affiche_club.php?id='.$id.'" method="POST" >'.
$GUI->lineEdit('nom_club','text','Nom du Club','textfield',$updated_data->nom_club).'<br>'.
$GUI->pushButton('Verifie >>','button');
echo '</form>';

$DB->disconnect();
echo '</div>';
echo '</center>';

?>

</body>
</html>