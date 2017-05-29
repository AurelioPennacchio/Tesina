<?php
	header('Content-type: application/json');
	$id_cibo = $_POST['cibo'];
	$prova_3 = $this->model->getStatsCibo($id_cibo);
	$data = array();
	foreach($prova_3 as $row){
		$data[] = $row;
	}
	print json_encode($data);
?>