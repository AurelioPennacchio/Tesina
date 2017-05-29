<div class="row">
			<div class="col s11 m6 offset-m3 offset-s1">
				<table class="bordered responsive-table centered">
					<thead>
						<tr>
							<th>Data</th>
							<th>Nome</th>
							<th>Cognome</th>
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
								echo  "<td>" . $prenotazioni[$i]->nome_utente . "</td>";
								echo  "<td>" . $prenotazioni[$i]->cognome . "</td>";
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

<br>
<br>
<br>
<?php 
	print_r($prenotazioni);
?>