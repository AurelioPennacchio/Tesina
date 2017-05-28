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
					<span class="card-title center-align">Admin login</span>
					<form method="POST" action="<?php echo URL; ?>admin/login">
						<div class="row">
							<div class="input-field col s12">
								<i class="material-icons prefix">account_circle</i>
								<input type="email" name="email_admin" id="email_admin" placeholder="Email" class="validate">
								<label for="email_admin">Email admin</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<i class="material-icons prefix">lock_outline</i>
								<input type="password" name="password_admin" id="password_admin" placeholder="Password" class="validate">
								<label for="password_admin">Password</label>
							</div>
						</div>
						<div class="row">
							<div class="col m12 s12">
								<p class="center-align"><button class="btn waves-effect waves-light" type="submit" name="login">Login</button></p>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>