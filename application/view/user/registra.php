<?php
	$nome = $_POST['nome'];
	$cognome = $_POST['cognome'];
	$email = $_POST['email'];
	$data_nascita = $_POST['data_nascita'];
	$password = $_POST['password'];
	$registrato = false;
	if(empty($nome) || empty($cognome) || empty($data_nascita) || empty($email) || empty($password)){
		$flag = false;
	}
	else{
		$flag = true;
		$casual = rand();
		$real_pass = password_hash($password, PASSWORD_DEFAULT);
		$temp = $this->model->addUser($nome, $cognome, $data_nascita, $email, $real_pass, $casual );
	}
?>
<div class="row">
	<div class="col s12">
		
			<?php
				if($flag == false){
					echo "Errore durante la registrazione";
				}
				else{
					if($temp == false){
						echo "Utente già registrato";
					}
					else{
						$mail = new PHPMailer;
						$id_fake = $this->model->findId($email);
						$id = $id_fake->id;
						$mail->isSMTP();                                   
						$mail->Host = 'smtp.gmail.com';
						$mail->SMTPAuth = true;
						$mail->Username = 'prova.tesina.2017@gmail.com';
						$mail->Password = 'inzaghi9';
						$mail->SMTPSecure = 'tls';
						$mail->Port = 587;

						$mail->setFrom('prova.tesina.2017@gmail.com', 'CodexWorld');
						$mail->addAddress($email);

						$mail->isHTML(true);

						$bodyContent = '<h1>http://localhost:8888/progetti/provaMail/index.php?id=5</h1>';

						$contenuto = '<h1>' . URL . 'user/verify/' . $id . '/' . $casual . '</h1>';

						$mail->Subject = 'Email from Localhost by CodexWorld';
						$mail->Body    = $contenuto;

						if(!$mail->send()) {

						} else {
						    echo "Registrazione avvenuta con successo";
						    $registrato = true;
						}
					}
				}
			?>
	</div>
</div>
<script type="text/javascript">
	var registrato = <?php echo json_encode($registrato); ?>;
	if(registrato == true){
		window.setTimeout(function(){
	        window.location.href = "login";
	    }, 2000);
	}
</script>