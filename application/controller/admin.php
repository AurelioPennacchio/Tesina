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
		header('location:' . URL . 'admin/login');
	}

	/**
	** Funzione che permette di fare il login
	*/
	public function login()
	{
		session_start();
		if(isset($_SESSION['id_admin'])){
			header('location:' . URL . 'admin/home');
		}
		if(isset($_POST['password_admin']) && isset($_POST['email_admin'])){
			$result = $this->model->findAdmin($_POST['email_admin'], $_POST['password_admin']);
			if($result == false){

			}
			else{
				$_SESSION['id_admin'] = $result->id;
				header('location:' . URL . 'admin/home');
			}
		}
		$title = 'Login page';
		require APP . 'view/admin/login.php';
	}

	/*
	** Funzione che permette di fare il logout
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
			$prenotazioni = $this->model->getAllPrenotazioni();
			require APP . 'view/admin/menu.php';
			require APP . 'view/admin/vedi_prenotazioni.php';
		}
		else{
			header('location:' . URL . 'admin/index');
		}
	}

	/**
	** Funzione che permette all'admin 
	** di andare nella pagina di eliminazione del cibo
	*/
	public function eliminaCibo()
	{
		session_start();
		if(isset($_SESSION['id_admin'])){
			require APP . 'view/admin/menu.php';
			require APP . 'view/admin/elimina_cibo.php';
		}
		else{
			header('location:' . URL . 'admin/index');
		}
	}

	/**
	** Funzione che permette di vedere
	** tutti i cibi presenti
	*/
	public function cibo()
	{
		session_start();
		if(isset($_SESSION['id_admin'])){
			$title = 'Cibo';
			$cibi = $this->model->getAllCiboAndBibite();
			require APP . 'view/admin/menu.php';
			require APP . 'view/admin/cibo.php';
		}
		else{
			header('location:' . URL . 'admin/index');
		}
	}

	/**
	** Funzione che permette di vedere
	** tutte le statistiche di un cibo
	*/
	public function statistiche()
	{
		session_start();
		if(isset($_SESSION['id_admin'])){
			$title = 'Statistiche';
		}
		else{
			header('location:' . URL . 'admin/index');
		}
	}

	/**
	** Funzione che aggiunge pagina di test per l'admin
	*/
	public function test()
	{
		$prova = $this->model->getAllPrenotazioni();
		require APP . 'view/admin/test.php';
	}

}
