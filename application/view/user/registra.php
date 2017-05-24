<?php
	$nome = $_POST['nome'];
	$cognome = $_POST['cognome'];
	$email = $_POST['email'];
	$data_nascita = $_POST['data_nascita'];
	$password = $_POST['password'];
	$temp = $this->model->addUser($nome, $cognome, $data_nascita, $email, $password);
?>