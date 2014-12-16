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
$updated_data = $DB->get_record_where('article',$where);

$arrayClubs = array();

$arrayClubs[0] = 'نادي محو الأمية';
$arrayClubs[1] = 'نادي الشباب';
$arrayClubs[2] = 'نادي البراعم';
$arrayClubs[3] = 'نادي الطفل';
$arrayClubs[4] = 'نادي المرأة';

echo '<div>';

$GUI = new GUI();
echo '<form action="affiche_article.php?id='.$id.'" method="POST" >'.
$GUI->lineEdit('titre_article','text','Titre article','textfield',$updated_data->titre_article).'<br>'.
$GUI->lineEdit('auteur','text','nom d\'	auteur','textfield',$updated_data->auteur).'<br>'.
$GUI->textArea('context_article','text','tapez votre text d\'article  \n (1024 caractere) au max','textarea',$updated_data->context_article).'<br>'.
$GUI->comboBox('club',(array)$arrayClubs,'comboBox').'<br>'.
$GUI->pushButton('Verifie >>','button');
echo '</form>';

$DB->disconnect();
echo '</div>';
echo '</center>';

?>

</body>
</html>