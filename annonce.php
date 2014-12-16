<?php
if (file_exists('./core/DB.php')) 
	{
		require_once('./core/DB.php');
	}
//
	$DB = new DB();
	$data = new stdClass();
	$dataTab = array();

	$dataTab =(array)$DB->get_array_id('annonces');
	$nbrAccount = sizeof($dataTab);
    echo '<center>';
	echo '<div id="eltList" ><h2>les annonces : </h2></div>';

	for($i=0; $i<$nbrAccount; $i++)
	{// id 14-15 mekach = error  hhhhhhh
		$data = $DB->get_recordById('annonces',$dataTab[$i]);
		echo '<div id="eltList" style="text-align:left;"><b>titre annonce : </b>'.$data->titre_annonce.'<br><b>contenu Annonce : </b>'.$data->context_annonce.'<br><b>auteur : </b>'.$data->auteur.'</div>';
	}
?>