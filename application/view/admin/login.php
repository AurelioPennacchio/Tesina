<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="<?php echo URL; ?>css/pure-min.css">
	<link rel="stylesheet" href="<?php echo URL; ?>css/style.css">
	<link rel="stylesheet" href="<?php echo URL; ?>css/grids-responsive-min.css">
	<link rel="stylesheet" href="<?php echo URL; ?>css/font-awesome/css/font-awesome.min.css" type="text/css">
</head>
<body>
	<div class="container">
		<form class="pure-form contenitore" method="POST" action="<?php echo URL; ?>admin/login">
		    <fieldset class="pure-group">
		    	<input type="text" class="pure-input-1-2" placeholder="Email" name="email_admin">
		        <input type="password" class="pure-input-1-2" placeholder="Password" name="password_admin">
		    </fieldset>
		    <button type="submit" class="pure-button pure-input-1-2 pure-button-primary" name="login">Login</button>
		    <br>
		</form>
	</div>
</body>
</html>