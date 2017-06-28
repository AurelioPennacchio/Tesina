<?php
	$nome = $_POST['nome'];
	$cognome = $_POST['cognome'];
	$email = $_POST['email'];
	$data_nascita = $_POST['data_nascita'];
	$id = $_SESSION['id'];
	$modifica = false;
	if(isset($nome) && $nome != ''){
		echo $nome . $id;
		$this->model->updateNome($nome, $id);
		$modifica = true;
	}
	if(isset($cognome) && $cognome != ''){
		echo $cognome;
		$this->model->updateCognome($cognome, $id);
		$modifica = true;
	}
	if(isset($email) && $email != ''){
		echo $email;
		$this->model->updateEmail($email, $id);
		$modifica = true;
	}
	if(isset($data_nascita) && $data_nascita!= ''){
		echo $data_nascita;
		$this->model->updateDataNascita($data_nascita, $id);
		$modifica = true;
	}
	echo "Modifica avvenuta con successo";
?>