<?php
if (file_exists('./core/DB.php')) 
	{
		require_once('./core/DB.php');
	}
// connect basedonneé
	$DB = new DB();
	$data = new stdClass();
	$dataTab = array();

// table pour recupuré  les Id de manifestation 
	$dataTab =(array)$DB->get_array_id('manifestation');
	$nbrAccount = sizeof($dataTab);
    echo '<center>';
	echo '<div id="eltList" ><h2>les manifestation : </h2></div>';
// boucle de l'affichage ...
	for($i=0; $i<$nbrAccount; $i++)
	{
		$data = $DB->get_recordById('manifestation',$dataTab[$i]);
		echo '<div id="eltList" style="text-align:left;"><b>Nom manifestation : </b>'.$data->nom_manifestation.'<br><b>date debut : </b>'.$data->date_debut.'<br><b>date fin  : </b>'.$data->date_fin.'</div>';
		echo '<br>';
	}
?>