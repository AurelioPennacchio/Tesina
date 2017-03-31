<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<script type="text/javascript" src="<?php echo URL; ?>js/jquery.js"></script>
	<link rel="stylesheet" href="<?php echo URL; ?>css/pure-min.css">
	<link rel="stylesheet" href="<?php echo URL; ?>css/style.css">
	<link rel="stylesheet" href="<?php echo URL; ?>css/grids-responsive-min.css">
	<link rel="stylesheet" href="<?php echo URL; ?>css/font-awesome/css/font-awesome.min.css" type="text/css">
</head>
<body>
	<div>
		<form class="pure-form contenitore" id="form_registrazione" method="POST">
		    <fieldset class="pure-group">
		    	<input type="text" class="pure-input-1-2" placeholder="Nome" name="nome" required>
		    	<input type="text" class="pure-input-1-2" placeholder="Cognome" name="cognome" required>
		    	<input type="date" class="pure-input-1-2" placeholder="Data di nascita" name="data_nascita" required>
		    	<input type="text" class="pure-input-1-2" placeholder="Email" name="email" required>
		        <input type="password" class="pure-input-1-2" placeholder="Password" name="password" required>
		        <input type="password" class="pure-input-1-2" placeholder="Confirm password" required>
		    </fieldset>
		    <button type="submit" class="pure-button pure-input-1-2 pure-button-primary" name="register">Register</button>
		</form>
		<a href="<?php echo URL; ?>/user/index">Login page</a>
	</div>
	<div id="prova">
		
	</div>
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