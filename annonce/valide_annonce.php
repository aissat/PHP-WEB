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

$updated_data->titre_annonce  = $_POST['titre_annonce'];
$updated_data->auteur = $_POST['auteur'];
$updated_data->context_annonce = $_POST['context_annonce'];


if($DB->update_record('annonces',$updated_data,$where))
{
	//echo '<center>annonce modifié.</center>';
	
	header("Location: filtrer_annonce.php");
}
else
{
	echo '<center>annonce n\'est pas sauvgardé ; <b>reessayer</b>.</center>';
	// header("Location : ");
}

?>
</body>
</html>