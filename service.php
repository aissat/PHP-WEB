<?php
if (file_exists('./core/DB.php')) 
	{
		require_once('./core/DB.php');
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
		echo '<div id="eltList"><b>Nom Service : </b>'.$data->nom_service.'<br><b>Description : </b>'.$data->info.'</div>';
	}
?>