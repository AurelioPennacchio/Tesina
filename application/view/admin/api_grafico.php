<?php
	header('Content-type: application/json');
	$id_cibo = $_GET['cibo'];
	$prova_3 = $this->model->getStatsCibo($id_cibo);
	$prova_4 = $this->model->getAllStatsCibo();
	$data = array();
	foreach($prova_3 as $row){
		$data[] = $row;
	}
	print json_encode($data);
?>