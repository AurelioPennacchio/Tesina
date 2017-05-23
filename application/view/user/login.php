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
</head>
<body>
	
	<div class="row">
		<form class="col s12" method="POST" action="<?php echo URL; ?>user/login">
			<div class="row">
				<div class="input-field col s6">
					<input type="text" name="email" id="email" placeholder="Email" class="validate">
					<label for="email">Email</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<input type="password" name="password" id="password" placeholder="Password" class="validate">
					<label for="password">Password</label>
				</div>
			</div>
			<div class="row">
				<button class="btn waves-effect waves-light" type="submit" name="login">Login</button>
				<a class="waves-effect waves-light btn" href="<?php echo URL; ?>user/registration">Non registrato? Clicca qui</a>
			</div>
			<?php 
				if(isset($info)){
					echo "<div class=\"row\">";
					echo "<a class=\"waves-effect waves-light btn\">$info</a>";
					echo "</div>";
				}
			?>
		</form>
	</div>	
</body>
</html>