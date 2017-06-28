			
			<div class="row">
				<div class="col s12">
					<h3 class="center-align">Le tue info</h3>
				</div>
				<div class="col s12">
					<a class="waves-effect waves-light btn center" href="<?php echo URL; ?>user/modifica"><i class="material-icons right">create</i>Modifica</a>
				</div>
			</div>

			<div class="row">
				<div class="col s12">
					<p class="center-align">Nome: <?php echo $informazioni->nome; ?></p>
				</div>
			</div>
			<div class="row">
				<div class="col s12">
					<p class="center-align">Cognome: <?php echo $informazioni->cognome; ?></p>
				</div>
			</div>
			<div class="row">
				<div class="col s12">
					<p class="center-align">Email: <?php echo $informazioni->email; ?></p>
				</div>
			</div>
			<div class="row">
				<div class="col s12">
					<p class="center-align">Data di nascita: <?php echo $informazioni->data_nascita; ?></p>
				</div>
			</div>
	</body>
</html>