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
		session_start();
		if(isset($_SESSION['id'])){
			header('location:' . URL . 'user/home');
		}
		if(isset($_POST['email']) && isset($_POST['password'])){
			$result = $this->model->findUser($_POST['email'], $_POST['password']);
			//funziona con le cose che ritorna
			if($result == false){
				
			}
			else{
				$_SESSION['id'] = $result->id;
				header('location:' . URL . 'user/home');
			}
		}
		$title = 'Login page';
		require APP . 'view/user/login.php';
	}

	/**
	** Funzione che permette di fare il logout
	*/
	public function logout()
	{
		session_start();
		session_unset();
		session_destroy();
		header('location:' . URL . 'user/login');
	}

	/**
	** Funzione che dirige alla pagina di registrazione
	** dell'user
	*/
	public function registration()
	{
		session_start();
		if(isset($_SESSION['id'])){
			header('location:' . URL . 'user/home');
		}
		else{
			$title = 'Registration page';
			require APP . 'view/user/registration.php';
		}
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
		session_start();
		if(isset($_SESSION['id'])){
			$title = 'Home';
			require APP . 'view/user/home.php';
		}
		else{
			header('location:' . URL . 'user/login');
		}
		
	}

}
