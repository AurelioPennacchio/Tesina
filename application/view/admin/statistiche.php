		<div class="row">
			<div class="col s12">
				<h3 class="center-align">Statistiche</h3>
			</div>
		</div>

		

		<div class="container">
			<div class="row" id="grafo">
				<canvas id="myChart"></canvas>
			</div>
		</div>
		<script type="text/javascript">
			$(document).ready(function() {
    			$('select').material_select();
  			});
		</script>
		<script type="text/javascript">
			$(document).ready(function(){
				$.ajax({
					url: "api",
					method: "GET",
					success: function(data) {
						console.log(data);
						var cibo = [];
						var n_prenotazioni = [];
						for(var i in data) {
							cibo.push(data[i].nome);
							n_prenotazioni.push(data[i].numero);
						}

						var chartdata = {
							labels: cibo,
							datasets : [
								{
									label: 'Numero prenotazioni',
									backgroundColor: 'rgba(200, 200, 200, 0.75)',
									borderColor: 'rgba(200, 200, 200, 0.75)',
									hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
									hoverBorderColor: 'rgba(200, 200, 200, 1)',
									data: n_prenotazioni
								}
							]
						};

						var ctx = $("#myChart");

						var barGraph = new Chart(ctx, {
							type: 'line',
							data: chartdata
						});
					},
					error: function(data) {
						console.log(data);
					}
				});
			});
		</script>
	</body>
</html>