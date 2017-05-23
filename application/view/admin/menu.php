<!DOCTYPE html>
<html>
<head>
	<title>Admin Menu</title>
	<link rel="stylesheet" href="<?php echo URL; ?>css/materialize.css">
	<script type="text/javascript" src="<?php echo URL; ?>js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo URL; ?>js/materialize.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	<div>
		<nav>
			<div class="nav-wrapper">
				<a href="#!" class="brand-logo">Admin</a>
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				<ul class="right hide-on-med-and-down">
			    	<li><a href="<?php echo URL; ?>admin/vediPrenotazioni">Prenotazioni</a></li>
			    	<li><a href="#">Statistiche</a></li>
			    	<li><a href="#">Cibo</a></li>
			    	<li><a href="<?php echo URL; ?>admin/logout">Logout</a></li>
			    </ul>
			    <ul class="side-nav" id="mobile-demo">
			    	<li><a href="<?php echo URL; ?>admin/vediPrenotazioni">Prenotazioni</a></li>
			    	<li><a href="#">Statistiche</a></li>
			    	<li><a href="#">Cibo</a></li>
			    	<li><a href="<?php echo URL; ?>admin/logout"</a></li>
			    </ul>
			</div>
		</nav>
	</div>
	<script type="text/javascript">
		$(".button-collapse").sideNav();
	</script>
