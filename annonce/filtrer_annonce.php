<!doctype html>
<link rel="stylesheet" type="text/css" href="../style/style1.css"/>
<meta charset="UTF-8">
<html>
<head><title>tous les annonces</title></head>
<body>
<div>

<?php
if (file_exists('../core/DB.php')) 
	{
		require_once('../core/DB.php');
	}
//
	$DB = new DB();
	$data = new stdClass();
	$dataTab = array();

	$dataTab =(array)$DB->get_array_id('annonces');
	$nbrAccount = sizeof($dataTab);

	echo'<center>';
	echo '<div id="eltList"><h2>list des annonce : </h2></div>';

	for($i=0; $i<$nbrAccount; $i++)
	{// id 14-15 mekach = error  hhhhhhh
		$data = $DB->get_recordById('annonces',$dataTab[$i]);

		echo '<div id="eltList">Titre annonce : '.'<br>'.$data->titre_annonce.'<div id="button"><a href="modifie_annonce.php?id='.$data->id.'"><p>Modifie</p></a></div>';
		echo '<div id="button"><a href="supprime_annonce.php?id='.$data->id.'"><p>Delete</p></a></div></div>';
	}
	echo '</form>'; 
	// form to update ....
	
echo'</center>';
	$DB->disconnect();
?>
</div>
</body>
</html>