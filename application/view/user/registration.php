<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="<?php echo URL; ?>css/materialize.css">
	<script type="text/javascript" src="<?php echo URL; ?>js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo URL; ?>js/materialize.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
	
	<div class="container">
		<div class="row">
			<form class="col s12" method="POST" id="form_registrazione">
				<div class="row">
					<div class="input-field col s12">
						<input type="text" name="nome" placeholder="Nome" class="validate">
						<label for="nome">Nome</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input type="text" name="cognome" placeholder="Cognome" class="validate">
						<label for="cognome">Cognome</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<label for="data_nascita">Data di nascita</label>
						<input type="date" name="data_nascita" class="datepicker">
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input type="text" name="email" placeholder="Email" class="validate">
						<label for="email">Email</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input type="password" name="password" placeholder="Password" class="validate">
						<label for="Password">Password</label>
					</div>
				</div>
				<div class="row">
					<div class="col s6 offset-s3">
						<button class="btn waves-effect waves-light" type="submit" name="login">Registrati</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<script type="text/javascript">
		$('.datepicker').pickadate({
			selectMonths: true, // Creates a dropdown to control month
			selectYears: 150 // Creates a dropdown of 15 years to control year
		});
	</script>
	<script type="text/javascript">

		$('#form_registrazione').submit(function(e) {

			e.preventDefault();
			$.ajax({

				url: 'register',
				type: 'POST',
				data: $(this).serialize(),
				dataType: 'html'
			})
			.done(function(data) {
				console.log('Fatto tutto');
				$('#prova').fadeOut('slow', function() {
					$('#prova').fadeIn('slow').html(data);
				});
			})
			.fail(function(){
				alert('Failed');
			});
		});

	</script>
</body>
</html>