		<div class="container">
			<div class="row">
				<form class="col s12" method="POST" id="form_modifica">
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
						<div class="col m12 s12">
							<p class="center-align">
								<button class="btn waves-effect waves-light" type="submit" name="login">Modifica</button>
							</p>
						</div>
					</div>
				</form>
			</div>
		<div>
		<div class="prova">
			
		</div>
		<script type="text/javascript">
			$('.datepicker').pickadate({
				selectMonths: true, 
				selectYears: 150, 
				format: 'yyyy/mm/dd' 
			});
		</script>
		<script type="text/javascript">
			$('#form_modifica').submit(function(e) {
				e.preventDefault();
				$.ajax({
					url: 'modifica_reale',
					type: 'POST',
					data: $(this).serialize(),
					dataType: 'html'
				})
				.done(function(data) {
					console.log(data);
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