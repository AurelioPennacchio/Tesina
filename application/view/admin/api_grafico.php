<?php
	header('Content-type: application/json');
	$prova_4 = $this->model->getAllStatsCibo();
	$data = array();
	foreach($prova_4 as $row){
		$data[] = $row;
	}
	print json_encode($data);
?>