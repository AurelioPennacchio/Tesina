
			<div class="row">
				<div class="col s12">
					<h1 class="center-align">Prenotazioni effettuate</h1>
				</div>
			</div>
			<div class="row">
				<div class="col s12 m6 offset-m3 ">
					<table class="bordered responsive-table centered">
						<thead>
							<tr>
								<th>Data</th>
								<th>Primo piatto</th>
								<th>Secondo piatto</th>
								<th>Bibita</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$i = 0;
								while($i < count($prenotazioni)-2) {
									echo "<tr>";
									echo  "<td>" . $prenotazioni[$i]->data . "</td>";
									echo  "<td>" . $prenotazioni[$i]->Cibo . "</td>";
									echo  "<td>" . $prenotazioni[$i+1]->Cibo . "</td>";
									echo  "<td>" . $prenotazioni[$i+2]->Cibo . "</td>";
									$i+=3;
									echo "</tr>";
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
	</body>
</html>