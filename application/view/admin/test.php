<?php
	header('Content-type: application/json');
	$prova_3 = $this->model->getStatsCibo(1);
	$prova_4 = $this->model->getAllStatsCibo();
	$data = array();
	foreach($prova_3 as $row){
		$data[] = $row;
	}
	print json_encode($data);
?>