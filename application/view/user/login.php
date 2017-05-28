<?php 
	header('Cache-Control: no cache');
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="<?php echo URL; ?>css/materialize.css">
	<script type="text/javascript" src="<?php echo URL; ?>js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo URL; ?>js/materialize.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="card blue-gray darken-1">
				<div class="card-content black-text">
					<span class="card-title center-align">Login</span>
					<form method="POST" action="<?php echo URL; ?>user/login">
						<div class="row">
							<div class="input-field col s12">
								<i class="material-icons prefix">account_circle</i>
								<input type="text" name="email" id="email" placeholder="Email" class="validate">
								<label for="email">Email</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<i class="material-icons prefix">lock_outline</i>
								<input type="password" name="password" id="password" placeholder="Password" class="validate">
								<label for="password">Password</label>
							</div>
						</div>
						<div class="row">
							<div class="col m12 s12">
								<p class="center-align"><button class="btn waves-effect waves-light" type="submit" name="login">Login</button></p>
							</div>
						</div>
						<?php 
							/*
							if(isset($info)){
								echo "<div class=\"row\">";
								echo "<div class=\"col s12 m12\">";
								echo "<p class=\"center-align\">";
								echo "<a class=\"waves-effect waves-light btn\">$info</a>";
								echo "</p>";
								echo "</div>";
								echo "</div>";
							}*/
						?>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col m12 s12">
			<p class="center-align">
				<a class="" href="<?php echo URL; ?>user/registration">Registrati</a>
			</p>
		</div>
	</div>
</body>
</html>