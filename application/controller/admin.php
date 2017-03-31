<?php

/**
 * Class User
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Admin extends Controller
{

	/**
	** Funzione che dirige alla pagina principale
	** dell'admin
	*/
	public function index() 
	{
		$title = 'Login page';
		require APP . 'view/admin/login.php';
	}

	/**
	**
	*/
	public function home()
	{
		$title = 'Home';
		require APP . 'view/admin/index.php';
	}

}
