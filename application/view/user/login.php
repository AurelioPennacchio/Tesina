<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<script type="text/javascript" src="<?php echo URL; ?>js/jquery.js"></script>
	<link rel="stylesheet" href="<?php echo URL; ?>css/pure-min.css">
	<link rel="stylesheet" href="<?php echo URL; ?>css/style.css">
	<link rel="stylesheet" href="<?php echo URL; ?>css/grids-responsive-min.css">
	<link rel="stylesheet" href="<?php echo URL; ?>css/font-awesome/css/font-awesome.min.css" type="text/css">
</head>
<body>
	<div class="container">
		<form class="pure-form contenitore" method="POST" action="<?php echo URL; ?>user/login">
		    <fieldset class="pure-group">
		    	<input type="text" class="pure-input-1-2" placeholder="Email" name="email">
		        <input type="password" class="pure-input-1-2" placeholder="Password" name="password">
		    </fieldset>
		    <button type="submit" class="pure-button pure-input-1-2 pure-button-primary" name="login" >Login</button>
		    <br>
		    <a href="<?php echo URL; ?>user/registration">Not registered? Click here</a>
		</form>
	</div>
</body>
</html>