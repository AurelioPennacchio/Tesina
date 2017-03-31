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
		<form class="pure-form contenitore">
		    <fieldset class="pure-group">
		    	<input type="text" class="pure-input-1-2" placeholder="Email">
		        <input type="text" class="pure-input-1-2" placeholder="Password">
		    </fieldset>
		    <button type="submit" class="pure-button pure-input-1-2 pure-button-primary">Login</button>
		    <br>
		    <a href="<?php echo URL; ?>user/registration">Not registered? Click here</a>
		</form>
	</div>
</body>
</html>