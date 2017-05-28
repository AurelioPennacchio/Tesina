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
				$info = 'Utente non registrato o dati inseriti errati';
			}
			else{
				$info = $this->model->getUserInfo($result->id);
				$_SESSION['nome'] = $info->nome;
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
		if(isset($_SESSION['id'])){
			header('location:' . URL . 'user/home');
		}
		else{
			require APP . 'view/user/registra.php';
		}
		
	}

	/**
	** Funzione che dirige alla pagina home
	*/
	public function home()
	{
		session_start();
		if(isset($_SESSION['id'])){
			$title = 'Home';
			$primi_piatti = $this->model->getAllPrimiPiatti();
			$secondi_piatti = $this->model->getAllSecondiPiatti();
			$bibite = $this->model->getAllBibite();
			require APP . 'view/user/menu.php';
			require APP . 'view/user/home.php';
		}
		else{
			header('location:' . URL . 'user/login');
		}
	}

	/**
	** Funzione che permette ad un utente di 
	** di vedere le proprie prenotazioni nel tempo
	*/
	public function vediPrenotazioni()
	{
		session_start();
		if(isset($_SESSION['id'])){
			$title = 'Prenotazioni';
			$prenotazioni = $this->model->getPrenotazione($_SESSION['id']);
			require APP . 'view/user/menu.php';
			require APP . 'view/user/prenotazioni.php';
		}
		else{
			header('location:' . URL . 'user/login');
		}
	}

	/**
	** Funzione che dirige sulla pagina 
	** delle informazioni dello user
	*/
	public function vediInformazioni()
	{
		session_start();
		if(isset($_SESSION['id'])){
			$title = 'Informazioni';
			$informazioni = $this->model->getUserInfo($_SESSION['id']);
			require APP . 'view/user/menu.php';
			require APP . 'view/user/informazioni.php';
		}
		else{
			header('location:' . URL . 'user/login');
		}
	}

	/**
	** Funzione che permette di prenotare
	*/
	public function prenota()
	{
		if(isset($_SESSION['id'])){
			header('location:' . URL . 'user/home');
		}
		else{
			require APP . 'view/user/prenota.php';
		}
	}

	/**
	** Funzione che permette di svolgere i test
	** dei metodi presenti nel model
	*/
	public function test()
	{
		$primi_piatti = $this->model->getAllPrimiPiatti();
		$secondi_piatti = $this->model->getAllSecondiPiatti();
		$bibite = $this->model->getAllBibite();
		//$this->model->addPrenotazioneDistinta(5);
		//$prova = $this->model->getPrenotazioneDistinta(7);
		//$this->model->addPrenotazioneSemplice(2,1);
		//$this->model->addPrenotazioneSemplice(2,3);
		//$this->model->addPrenotazioneSemplice(2,5);
		$prova2 = $this->model->getPrenotazione(5);
		$prova3 = $this->model->getPrenotazioneDistinta(5);
		$prova4 = $this->model->addPrenotazioneCompleta(5,1,3,5);
		require APP . 'view/user/test.php';
	}

}
