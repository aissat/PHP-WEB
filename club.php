<link rel="stylesheet" type="text/css" href="./style/style_index.css"/>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php
include_once('core/DB.php');
include_once('core/GUI.php');

$DB = new DB();

$data = new stdClass();
$where = $_GET['idClub'];
$ListOfIdArticles = array();
$ListOfIdArticles = (array)$DB->get_array_id_where('article',$where);
for ($i=0; $i < sizeof($ListOfIdArticles); $i++) { 
    # code...
    $data = $DB->get_recordById('article',$ListOfIdArticles[$i]);
   
    echo '<h2>'.$data->titre_article.'</h2>';
    echo '<h5>'.$data->context_article.'</h5>';
    echo '<p style="color:gray; font-size=12px; float:right;"> auteur : '.$data->auteur.'<br><b>'.$data->date_ajoute.'</b></p>';
    
}


?>