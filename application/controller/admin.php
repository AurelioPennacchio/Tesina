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
	public function login()
	{
		session_start();
		if(isset($_SESSION['id_admin'])){
			header('location:': . URL . 'admin/home')
		}
		if(isset($_POST['password']) && isset($_POST['email'])){

		}
		$title = 'Login page';
		require APP . 'view/admin/login.php';
	}

	/*
	**
	*/
	public function logout()
	{
		session_start();
		session_unset();
		session_destroy();
		header('location:' . URL . 'admin/login');
	}

	/**
	** Funzione che permette di andare alla pagina home
	*/
	public function home()
	{
		session_start();
		if(isset($_SESSION['id_admin'])){
			$title = 'Home';
			require APP . 'view/admin/home.php';
		}
		else{
			header('location:' . URL . 'admin/index');
		}
		
	}

}
