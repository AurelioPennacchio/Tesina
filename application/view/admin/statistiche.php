		<div class="row">
			<div class="col s12">
				<h3 class="center-align">Statistiche</h3>
			</div>
		</div>
		<div class="row">
			<form class="col s12" id="" method="POST">
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
		<canvas id="myChart"></canvas>
		<script type="text/javascript">
			$(document).ready(function() {
    			$('select').material_select();
  			});
		</script>
	</body>
</html>