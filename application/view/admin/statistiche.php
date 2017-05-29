		<div class="row">
			<div class="col s12">
				<h3 class="center-align">Statistiche</h3>
			</div>
		</div>
		<div class="row">
			<form class="col s12" method="GET" id="form_grafico">
				<div class="input-field col s12 m6 offset-m3">
					<select name="cibo">
						<?php
							foreach ($cibo as $key) {
								echo "<option value=\"$key->id\">" . $key->Nome . "</option>";
							}
						?>
					</select>
					<label>Piatto</label>
				</div>
				<div class="row">
					<div class="col s9 m6 offset-m4 offset-s3">
						<button class="btn waves-effect waves-light red accent-1" type="submit" name="action">
							grafico
    						<i class="material-icons right">create</i>
  						</button>
					</div>
				</div>
			</form>
		</div>
		<div class="container">
			<div class="row">
				<canvas id="myChart"></canvas>
			</div>
		</div>
		<script type="text/javascript">
			$(document).ready(function() {
    			$('select').material_select();
  			});
		</script>
		<script type="text/javascript">
			/*
			$('#form_grafico').submit(function(){
				$.ajax({
					url: "api",
					method: "POST",
					success: function(data) {
						console.log(data);
						var data_prenotazione = [];
						var numero_prenotazioni = [];

						for(var i in data_prenotazione) {
							data_prenotazione.push("Player " + data[i].data);
							numero_prenotazioni.push(data[i].n_prenotazioni);
						}

						var chartdata = {
							labels: data_prenotazione,
							datasets : [
								{
									label: 'Numero prenotazioni',
									backgroundColor: 'rgba(200, 200, 200, 0.75)',
									borderColor: 'rgba(200, 200, 200, 0.75)',
									hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
									hoverBorderColor: 'rgba(200, 200, 200, 1)',
									data: score
								}
							]
						};

						var ctx = $("#myChart");

						var barGraph = new Chart(ctx, {
							type: 'bar',
							data: chartdata
						});
					},
					error: function(data) {
						console.log(data);
					}
				});
			});
			*/
			$('#form_grafico').submit(function(e) {
				e.preventDefault();
				$.ajax({
					url: 'api',
					type: 'GET',
					data: $(this).serialize(),
					dataType: 'json'
				})
				.done(function(data) {
					//console.log('Fatto tutto');
					console.log(data);
					var data_prenotazione = [];
					var numero_prenotazioni = [];
					for(var i in data) {
						data_prenotazione.push(data[i].data);
						numero_prenotazioni.push(data[i].n_prenotazioni);
					}
					//console.log(data_prenotazione);
					//console.log(numero_prenotazioni);
					var chartdata = {
						labels: data_prenotazione,
						datasets : [
							{
								label: 'Numero prenotazioni',
								backgroundColor: 'rgba(200, 200, 200, 0.75)',
								borderColor: 'rgba(200, 200, 200, 0.75)',
								hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
								hoverBorderColor: 'rgba(200, 200, 200, 1)',
								data: numero_prenotazioni
							}
						]
					};

					var ctx = $("#myChart");

					var barGraph = new Chart(ctx, {
						type: 'bar',
						data: chartdata
					});
				})
				.fail(function(){
					alert('Failed');
				});
			});
		</script>
	</body>
</html>