<!doctype html>
<link rel="stylesheet" type="text/css" href="../style/style1.css"/>
<meta charset="UTF-8">
<html>
<head><title>tous les services</title></head>
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

	$dataTab =(array)$DB->get_array_id('services');
	$nbrAccount = sizeof($dataTab);
    echo '<center>';
	echo '<div id="eltList"><h2>list des services : </h2></div>';

	for($i=0; $i<$nbrAccount; $i++)
	{// id 14-15 mekach = error  hhhhhhh
		$data = $DB->get_recordById('services',$dataTab[$i]);

		echo '<div id="eltList">Nom service : '.$data->nom_service.'<div id="button"><a href="modifie_service.php?id='.$data->id.'"><p>Modifie</p></a></div>';
		echo '<div id="button"><a href="supprime_service.php?id='.$data->id.'"><p>Delete</p></a></div></div>';
	}
	echo '</form>'; 
	echo '</center>';
	// form to update ....

	$DB->disconnect();
?>
</div>
</body>
</html>