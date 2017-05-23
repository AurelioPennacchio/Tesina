<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="<?php echo URL; ?>css/materialize.css">
	<script type="text/javascript" src="<?php echo URL; ?>js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo URL; ?>js/materialize.js"></script>
</head>
<body>
	<div class="row">
		<form class="col s12" method="POST" action="<?php echo URL; ?>admin/login">
			<div class="row">
				<div class="input-field col s6">
					<input type="text" name="email_admin" id="email_admin" placeholder="Email" class="validate">
					<label for="email_admin">Email admin</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<input type="password" name="password_admin" id="password_admin" placeholder="Password" class="validate">
					<label for="password_admin">Password</label>
				</div>
			</div>
			<button class="btn waves-effect waves-light" type="submit" name="login">Login</button>
		</form>
	</div>	
</body>
</html>