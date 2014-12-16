<!doctype html>
<link rel="stylesheet" type="text/css" href="../style/style1.css"/>
<meta charset="UTF-8">
<html>
<head><title>ajouté article</title></head>
<body>

<?php

include_once('../core/DB.php');
echo '<center>';
if(!empty($_POST['titre_article'])  && !empty($_POST['auteur']) && !empty($_POST['context_article']))
{
	$DB = new DB();

	$objRequest = new stdClass();
	$objRequest->titre_article  = $_POST['titre_article'];
	$objRequest->auteur = $_POST['auteur'];
	$objRequest->context_article = $_POST['context_article'];
	$objRequest->id_club = $_POST['club'];

	if($DB->insert_record('article',$objRequest))
	{
		echo '<center>article ajouté.</center>';
		header("Location: filtrer_article.php");
	}
	else
	{
		echo '<center>article n\'est pas sauvgardé ; <b>reessayer</b>.</center>';
	}
	$DB->disconnect();
}
else echo '<center>Remplir les champs.</center>';
echo '</div>';
echo '</center>';


?>