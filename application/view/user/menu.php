<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Side Menu &ndash; Layout Examples &ndash; Pure</title>
    <script type="text/javascript" src="<?php echo URL; ?>js/jquery.js"></script>
	<link rel="stylesheet" href="<?php echo URL; ?>css/pure-min.css">
	<link rel="stylesheet" href="<?php echo URL; ?>css/style.css">
	<link rel="stylesheet" href="<?php echo URL; ?>css/grids-responsive-min.css">
	<link rel="stylesheet" href="<?php echo URL; ?>css/font-awesome/css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="<?php echo URL; ?>css/side-menu.css">

</head>
<body>
<div id="layout">
    <a href="#menu" id="menuLink" class="menu-link">
        <span></span>
    </a>
    <div id="menu">
        <div class="pure-menu">
            <a class="pure-menu-heading" href="#"> <?php echo $_SESSION['nome']; ?> </a>
            <ul class="pure-menu-list">
                <li class="pure-menu-item"><a href="<?php echo URL; ?>user/home" class="pure-menu-link">Prenota</a></li>
                <li class="pure-menu-item"><a href="<?php echo URL; ?>user/vediPrenotazioni" class="pure-menu-link">Vedi prenotazioni</a></li>
                <li class="pure-menu-item"><a href="<?php echo URL; ?>user/vediInformazioni" class="pure-menu-link">Informazioni</a></li>
                <li class="pure-menu-item"><a href="<?php echo URL; ?>user/logout" class="pure-menu-link">Logout</a></li>
            </ul>
        </div>
    </div>