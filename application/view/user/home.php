
			<h1>Pagina di prenotazione</h1>
			<div>
				<div>
					<form class="pure-form pure-form-stacked">
						<fieldset>
							<label>Primo piatto</label>
							<select name="primo_piatto">
								<?php
									foreach ($primi_piatti as $key) {
										echo "<option>" . $key->Nome . "</option>";
									}
								?>
							</select>
							<label>Secondo piatto</label>
							<select name="secondo_piatto">
								<?php
									foreach ($secondi_piatti as $key) {
										echo "<option>" . $key->Nome . "</option>";
									}
								?>
							</select>
							<label>Bibita</label>
							<select name="bibita">
								<?php
									foreach ($bibite as $key) {
										echo "<option>" . $key->Nome . "</option>";
									}
								?>
							</select>
							<button type="submit" class="pure-button pure-button-primary">Prenota</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</body>
	<script type="text/javascript" src="<?php echo URL; ?>js/ui.js"></script>
</html>
