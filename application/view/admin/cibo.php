		<div class="container">
			<div class="row">
				<div class="col s12 m6 offset-m3">
					<h1>Lista di tutti i cibi</h1>
				</div>
			</div>
			<div class="row">
			<?php
				foreach ($cibi as $key) {
					echo "<div class=\"col s12 m6\">";
					echo "<div class=\"card blue-grey darken-1\">";
					echo "<div class=\"card-content white-text\">";
					echo "<span class=\"card-title\">" . $key->Nome . "</span>";
					echo "<p>" . $key->Descrizione . "</p>";
					echo "</div>";
					echo "</div>";
					echo "</div>";
				}
			?>
			</div>
		</div>
	</body>
</html>