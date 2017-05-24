<!DOCTYPE html>
<html>
<head>
	<title>Admin Menu</title>
	<link rel="stylesheet" href="<?php echo URL; ?>css/materialize.css">
	<script type="text/javascript" src="<?php echo URL; ?>js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo URL; ?>js/materialize.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
	<div>
		<nav>
			<div class="nav-wrapper">
				<a href="#!" class="brand-logo">Admin</a>
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				<ul class="right hide-on-med-and-down">
			    	<li><a href="<?php echo URL; ?>admin/vediPrenotazioni"><i class="material-icons left">assignment</i>Prenotazioni</a></li>
			    	<li><a href="<?php echo URL; ?>admin/statistiche"><i class="material-icons left">show_chart</i>Statistiche</a></li>
			    	<li><a href="<?php echo URL; ?>admin/cibo"><i class="material-icons left">restaurant</i>Cibo</a></li>
			    	<li><a href="<?php echo URL; ?>admin/logout"><i class="material-icons left">input</i>Logout</a></li>
			    </ul>
			    <ul class="side-nav" id="mobile-demo">
			    	<li><a href="<?php echo URL; ?>admin/vediPrenotazioni"><i class="material-icons left">assignment</i>Prenotazioni</a></li>
			    	<li><a href="<?php echo URL; ?>admin/statistiche"><i class="material-icons left">show_chart</i>Statistiche</a></li>
			    	<li><a href="<?php echo URL; ?>admin/cibo"><i class="material-icons left">restaurant</i>Cibo</a></li>
			    	<li><a href="<?php echo URL; ?>admin/logout"><i class="material-icons left">input</i>Logout</a></li>
			    </ul>
			</div>
		</nav>
	</div>
	<script type="text/javascript">
		$(".button-collapse").sideNav();
	</script>
