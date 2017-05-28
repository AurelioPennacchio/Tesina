<?php
	session_start();
	$id_primo = $_POST['primo_piatto'];
	$id_secondo = $_POST['secondo_piatto'];
	$id_bibita = $_POST['bibita'];
	$id_utente = $_SESSION['id'];
	//$this->model->addPrenotazione($id_primo_piatto,$id_secondo_piatto,$id_bibita,$id_utente);
	$prenotazione = $this->model->addPrenotazioneCompleta($id_utente, $id_primo, $id_secondo, $id_bibita);
?>
<div class="col s12">
	<?php
		if($prenotazione){
			echo "<a class=\"waves-effect waves-light btn\">Prenotato!</a>";
		}
		else{
			echo "<a class=\"waves-effect waves-light btn\">Prenotazione gia fatta!</a>";
		}
	?>
</div>