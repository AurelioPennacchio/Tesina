<?php
	$nome = $_POST['nome'];
	$descrizione = $_POST['descrizione'];
	$categoria = $_POST['categoria'];
	$this->model->addCibo($nome, $descrizione, $categoria);
?>