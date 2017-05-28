<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
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
                <a href="#!" class="brand-logo"><?php echo $_SESSION['nome']; ?></a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="<?php echo URL; ?>user/home"><i class="material-icons left">assignment</i>Prenota</a></li>
                    <li><a href="<?php echo URL; ?>user/vediInformazioni"><i class="material-icons left">person</i>Informazioni
                    </a></li>
                    <li><a href="<?php echo URL; ?>user/vediPrenotazioni"><i class="material-icons left">restaurant</i>Cibo</a></li>
                    <li><a href="<?php echo URL; ?>user/logout"><i class="material-icons left">input</i>Logout</a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a href="<?php echo URL; ?>user/home"><i class="material-icons left">assignment</i>Prenota</a></li>
                    <li><a href="<?php echo URL; ?>user/vediInformazioni"><i class="material-icons left">person</i>Informazioni</a></li>
                    <li><a href="<?php echo URL; ?>user/vediPrenotazioni"><i class="material-icons left">restaurant</i>Cibo</a></li>
                    <li><a href="<?php echo URL; ?>user/logout"><i class="material-icons left">input</i>Logout</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <script type="text/javascript">
        $(".button-collapse").sideNav();
    </script>