<?php
	$nome = $_POST['nome'];
	$cognome = $_POST['cognome'];
	$email = $_POST['email'];
	$data_nascita = $_POST['data_nascita'];
	$password = $_POST['password'];
	if(empty($nome) || empty($cognome) || empty($data_nascita) || empty($email) || empty($password)){
		$flag = false;
	}
	else{
		$flag = true;
		$temp = $this->model->addUser($nome, $cognome, $data_nascita, $email, $password);
	}
?>
<div class="row">
	<div class="col s12">
		<button class="btn waves-effect waves-light" name="login">
			<?php
				if($flag == false){
					echo "Errore durante la registrazione";
				}
				else{
					if($temp == false){
						echo "Utente già registrato";
					}
					else{
						echo "Registrazione avvenuta con successo";
					}
				}
			?>
		</button>
	</div>
</div>