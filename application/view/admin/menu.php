<!DOCTYPE html>
<html>
<head>
	<title>Admin Menu</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="<?php echo URL; ?>js/jquery.js"></script>
	<link rel="stylesheet" href="<?php echo URL; ?>css/pure-min.css">
	<link rel="stylesheet" href="<?php echo URL; ?>css/grids-responsive-min.css">
	<link rel="stylesheet" href="<?php echo URL; ?>css/font-awesome/css/font-awesome.min.css" type="text/css">
</head>
<body>
	<div class="pure-menu pure-menu-horizontal">
		<ul class="pure-menu-list">
			<li class="pure-menu-item">
				<a href="<?php echo URL; ?>admin/aggiungiCibo" class="pure-button">Aggiungi cibo</a>
			</li>
			<li class="pure-menu-item">
				<a href="<?php echo URL; ?>admin/eliminaCibo" class="pure-button">Elimina cibo</a>
			</li>
			<li class="pure-menu-item">
				<a href="<?php echo URL; ?>admin/vediPrenotazioni" class="pure-button">Vedi prenotazioni</a>
			</li>
			<li class="pure-menu-item">
				<a href="<?php echo URL; ?>admin/logout" class="pure-button ">Logout</a>
			</li>
		</ul>
	</div>
