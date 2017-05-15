<?php 
	header('Cache-Control: no cache');
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<script type="text/javascript" src="<?php echo URL; ?>js/jquery.js"></script>
	<link rel="stylesheet" href="<?php echo URL; ?>css/pure-min.css">
	<link rel="stylesheet" href="<?php echo URL; ?>css/style.css">
	<link rel="stylesheet" href="<?php echo URL; ?>css/grids-responsive-min.css">
	<link rel="stylesheet" href="<?php echo URL; ?>css/font-awesome/css/font-awesome.min.css" type="text/css">
	<style type="text/css">
		.button-error{
			color: white;
			border-radius: 4px;
			text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
			background: rgb(202, 60, 60);
		}
	</style>
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
		    <br>
		    <a class="pure-button pure-button-primary" href="<?php echo URL; ?>user/registration">Not registered? Click here</a>
		    <br>
		    <br>
		    <?php 
				if(isset($info)){
					echo "<button class=\"button-error pure-button\">$info</button>";
				}
			?>
		</form>
	</div>
</body>
</html>