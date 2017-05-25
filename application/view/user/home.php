
			<div class="row">
				<div class="col s12">
					<h1 class="center-align">Effettua la prenotazione</h1>
				</div>
			</div>
			<div class="row">
				<form class="col s12" method="POST" id="form_prenotazione">
					<div class="row">
						<div class="input-field col s12 m6 offset-m3">
							<select name="primo_piatto">
								<?php
									foreach ($primi_piatti as $key) {
										echo "<option value=\"$key->id\">" . $key->Nome . "</option>";
									}
								?>
							</select>
							<label>Primo piatto</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12 m6 offset-m3">
							<select name="secondo_piatto">
								<?php
									foreach ($secondi_piatti as $key) {
										echo "<option value=\"$key->id\">" . $key->Nome . "</option>";
									}
								?>
							</select>
							<label>Secondo piatto</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12 m6 offset-m3">
							<select name="bibita">
								<?php
									foreach ($bibite as $key) {
										echo "<option value=\"$key->id\">" . $key->Nome . "</option>";
									}
								?>
							</select>
							<label>Bibita</label>
						</div>
					</div>
					<div class="row">
						<div class="col s1 m1 offset-m9 offset-s9">
							<button class="btn-floating btn-large waves-effect waves-light red" type="submit" name="action">
    							<i class="material-icons">add</i>
  							</button>
						</div>
					</div>
				</form>
			</div>
			<div id="prova">
				
			</div>
			<script type="text/javascript">
				$(document).ready(function() {
    				$('select').material_select();
  				});
			</script>
			<script type="text/javascript">
				$('#form_prenotazione').submit(function(e) {
					e.preventDefault();
					$.ajax({
						url: 'prenota',
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
