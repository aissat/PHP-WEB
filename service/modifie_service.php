<!doctype html>
<link rel="stylesheet" type="text/css" href="../style/style1.css"/>
<meta charset="UTF-8">

<html style="font-family:Ubuntu">
<head><title>modifié service</title></head>
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
$updated_data = $DB->get_record_where('services',$where);

echo '<div>';

$GUI = new GUI();
echo '<form action="affiche_service.php?id='.$id.'" method="POST" >'.
$GUI->lineEdit('nom_service','text','nom service','textfield',$updated_data->nom_service).'<br>'.
$GUI->textArea('info','text','tapez votre information sur le service  \n (1024 caractere) au max','textarea',$updated_data->info).'<br>'.
$GUI->pushButton('Verifie >>','button');
echo '</form>';

$DB->disconnect();
echo '</div>';
echo '</center>';

?>

</body>
</html>