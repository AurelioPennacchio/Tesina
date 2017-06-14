		<div class="container">
			<div class="row">
				<div class="col s12">
					<h3 class="center-align">Aggiungi cibo</h1>
				</div>
			</div>
			<div class="row">
				<form class="col s12" method="POST" id="form_aggiungi">
					<div class="row">
						<div class="input-field col s12">
							<input type="text" name="nome" placeholder="Nome" class="validate">
							<label for="nome">Nome cibo</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input type="text" name="descrizione" placeholder="Descrizione" class="validate">
							<label for="descrizione">Descrizione cibo</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<select name="categoria">
								<option value="1">Primo piatto</option>
								<option value="2">Secondo piatto</option>
								<option value="3">Bibita</option>
							</select>
							<label>Categoria</label>
						</div>
					</div>
					<div class="row">
						<div class="col m12 s12">
							<p class="center-align">
								<button class="btn waves-effect waves-light red accent-1" type="submit" name="login">Aggiungi</button>
							</p>
						</div>
					</div>
				</form>
			</div>
		</div>
		<script type="text/javascript">
			$(document).ready(function() {
    			$('select').material_select();
  			});
		</script>
		<script type="text/javascript">
				$('#form_aggiungi').submit(function(e) {
					e.preventDefault();
					$.ajax({
						url: 'aggiungi_cibo',
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
					window.setTimeout(function(){
					    window.location.href = "cibo";
					}, 2000);
				});
			</script>
	</body>
</html>