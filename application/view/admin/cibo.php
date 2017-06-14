		<div class="container">
			<div class="row">
				<div class="col s12 m6 offset-m3">
					<h3 class="center-align">Lista di tutti i cibi e bibite</h3>
				</div>
			</div>
			<div class="row">
				<div class="col s12 m4 offset-m5 offset-s3">
					<a class="waves-effect waves-light btn red accent-1" href="<?php echo URL; ?>admin/aggiungi">Aggiungi cibo</a>
				</div>
			</div>
			<div class="row">
				<?php foreach ($cibi as $key): ?>
					<div class="col s12 m6">
						<div class="card blue-grey darken-1">
							<div class="card-content white-text">
								<span class="card-title">
									<a class="white-text" href="<?php echo URL; ?>admin/info?cibo=<?php echo $key->id_cibo; ?>">
										<?php echo $key->Nome; ?>
									</a>
								</span>
								<p>
									<?php echo $key->Descrizione; ?>
								</p>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</body>
</html>