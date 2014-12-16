<!doctype html>
<link rel="stylesheet" type="text/css" href="../style/style1.css"/>
<meta charset="UTF-8">
<html>

<head><title>tous les Clubs</title></head>
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

	$dataTab =(array)$DB->get_array_id('clubs');
	$nbrAccount = sizeof($dataTab);

	echo'<center>';
	echo '<div id="eltList"><h2>list des clubs : </h2></div>';

	for($i=0; $i<$nbrAccount; $i++)
	{// id 14-15 mekach = error  hhhhhhh
		$data = $DB->get_recordById('clubs',$dataTab[$i]);

		echo '<div id="eltList">Nom du Club : '.'<br>'.$data->nom_club.'<br>'.'<div id="button"><a href="modifie_club.php?id='.$data->id.'"><p>Modifie</p></a></div>';
		echo '<div id="button"><a href="supprime_club.php?id='.$data->id.'"><p>Delete</p></a></div></div>';
	}
	echo '</form>'; 
	echo'</center>';
	// form to update ....
	

	$DB->disconnect();
?>
</div>
</body>
</html>