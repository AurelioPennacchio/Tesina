		<div class="row">
			<div class="col s12">
				<?php
					$prova = $this->model->getCiboInfo($_GET['cibo']);
				?>
				<h3 class="center-align"><?php echo $prova->nome; ?></h3>
				<p class="center-align"><?php echo $prova->descrizione; ?></p>
			</div>
		</div>
		<div class="container">
			<div class="row" id="grafo">
				<canvas id="myChart"></canvas>
			</div>
		</div>
		<div class="row">
			<div class="col s6 center-align">
				<?php if($prova->disponibile == 'F'): ?>
					<a class="waves-effect waves-light btn" href="<?php echo URL; ?>admin/aviable/<?php echo $_GET['cibo']; ?>">Aggiungi</a>
				<?php else: ?>
					<a class="waves-effect waves-light btn" href="<?php echo URL; ?>admin/notAviable/<?php echo $_GET['cibo']; ?>">Elimina</a>
				<?php endif; ?>
			</div>
		</div>
		<script type="text/javascript">
			$(document).ready(function() {
    			$('select').material_select();
  			});
		</script>
		<script type="text/javascript">
			var $_GET = <?php echo json_encode($_GET); ?>;
			$(document).ready(function(){
				$.ajax({
					url: "api2/" + $_GET['cibo'],
					method: "GET",
					success: function(data) {
						console.log(data);
						var data_prenotazioni = [];
						var n_prenotazioni = [];
						for(var i in data) {
							data_prenotazioni.push(data[i].data);
							n_prenotazioni.push(data[i].n_prenotazioni);
						}

						var chartdata = {
							labels: data_prenotazioni,
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