<!doctype html>
<link rel="stylesheet" type="text/css" href="../style/style1.css"/>
<meta charset="UTF-8">

<html style="font-family:Ubuntu">
<head><title>modifié annonce</title></head>
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
$updated_data = $DB->get_record_where('annonces',$where);

echo '<div>';

$GUI = new GUI();
echo '<form action="affiche_annonce.php?id='.$id.'" method="POST" >'.
$GUI->lineEdit('titre_annonce','text','Titre annonce','textfield',$updated_data->titre_annonce).'<br>'.
$GUI->lineEdit('auteur','text','nom d\'	auteur','textfield',$updated_data->auteur).'<br>'.
$GUI->textArea('context_annonce','text','tapez votre text d\'annonce  \n (1024 caractere) au max','textarea',$updated_data->context_annonce).'<br>'.
$GUI->pushButton('Verifie >>','button');
echo '</form>';

$DB->disconnect();
echo '</div>';
echo '</center>';

?>

</body>
</html>