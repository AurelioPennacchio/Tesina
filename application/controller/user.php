<?php

/**
 * Class User
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class User extends Controller
{

	/**
	** Funzione che dirige alla pagina principale
	** dell'user
	*/
	public function index() 
	{
		header('location:' . URL . 'user/login');
	}


	/**
	** Funzione che dirige alla pagina di login
	*/
	public function login()
	{
		$title = 'Login page';
		require APP . 'view/user/login.php';
	}

	/**
	** Funzione che dirige alla pagina di registrazione
	** dell'user
	*/
	public function registration()
	{
		$title = 'Registration page';
		require APP . 'view/user/registration.php';
	}

	/**
	** Funzione che permette di registrarsi
	*/
	public function register()
	{
		require APP . 'view/user/registra.php';
	}

	/**
	** Funzione che dirige alla pagina home
	*/
	public function home()
	{
		$title = 'Home';
		require APP . 'view/user/home.php';
	}

}
