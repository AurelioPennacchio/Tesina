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
			$risultato = $this->model->findId($_POST['email']);
			$result = $this->model->findUser($_POST['email'], $_POST['password']);
			//funziona con le cose che ritorna
			if($risultato == false){
				$info = 'Dati errati';
			}
			else{
				$user = $this->model->getUserVerified($risultato->id);
				//$info = $this->model->getUserInfo($result->id);
				if($user == false){

				}
				else{
					$password_hash = $user->password;
					if(password_verify($_POST['password'], $password_hash)){
						$_SESSION['nome'] = $user->email;
						$_SESSION['id'] = $user->id;
						header('location:' . URL . 'user/home');
					}
				}
				
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
	** Funzione che permette di verificare un utente
	*/
	public function verify($id, $casual)
	{
		$user = $this->model->getUser($id);
		$casual_user = $user->casual_number;
		
		if($casual_user == $casual){
			$this->model->setVerified($id);
			require APP . 'view/user/verify.php';
		}
	}

	public function modifica()
	{
		session_start();
		if(isset($_SESSION['id'])){
			require APP .'view/user/menu.php';
			require APP .'view/user/modifica.php';
		}
		else{
			header('location:' . URL . 'user/home');
		}
	}

	public function modifica_reale()
	{
		session_start();
		if(isset($_SESSION['id'])){
			require APP .'view/user/modifica_reale.php';
		}
		else{
			header('location:' . URL . 'user/home');
		}
	}

	/**
	** Funzione che permette di svolgere i test
	** dei metodi presenti nel model
	*/
	public function test()
	{
		$prova = $this->model->findId('aurelio99819@gmail.com');
		$prova2 = $this->model->getUserVerified($prova->id);
		$prova_password = $prova2->password;
		require APP . 'view/user/test.php';
	}

}
