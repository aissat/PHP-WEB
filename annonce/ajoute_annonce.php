<!doctype html>
<link rel="stylesheet" type="text/css" href="../style/style1.css"/>
<meta charset="UTF-8">
<html>
<head><title>ajouté annonce</title></head>
<body>

<?php

include_once('../core/DB.php');
echo '<center>';
if(!empty($_POST['titre_annonce'])  && !empty($_POST['auteur']) && !empty($_POST['context_annonce']))
{
	$DB = new DB();

	$objRequest = new stdClass();
	$objRequest->titre_annonce  = $_POST['titre_annonce'];
	$objRequest->auteur = $_POST['auteur'];
	$objRequest->context_annonce = $_POST['context_annonce'];


	if($DB->insert_record('annonces',$objRequest))
	{
		echo '<center>annonce ajouté.</center>';
		header("Location: filtrer_annonce.php");
	}
	else
	{
		echo '<center>annonce n\'est pas sauvgardé ; <b>reessayer</b>.</center>';
	}
	$DB->disconnect();
}
else echo '<center>Remplir les champs.</center>';
echo '</div>';
echo '</center>';


?>