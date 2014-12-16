<!doctype html>
<link rel="stylesheet" type="text/css" href="../style/style1.css"/>
<meta charset="UTF-8">
<html>
<head><title>validé modification</title></head>
<body>


<?php
include_once('../core/DB.php');
// save and Gooo .......
$DB = new DB();

$id = $_GET['id'];
$where = new stdClass();
$where->id = $id;

$updated_data = new stdClass();

$updated_data->titre_article  = $_POST['titre_article'];
$updated_data->auteur = $_POST['auteur'];
$updated_data->context_article = $_POST['context_article'];
$updated_data->id_club = $_POST['club'];


if($DB->update_record('article',$updated_data,$where))
{
	//echo '<center>article modifié.</center>';
	
	header("Location: filtrer_article.php");
}
else
{
	echo '<center>article n\'est pas sauvgardé ; <b>reessayer</b>.</center>';
	// header("Location : ");
}

?>
</body>
</html>