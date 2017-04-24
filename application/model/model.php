<?php

class Model
{
	/**
	 * @param object $db A PDO database connection
	 */
	function __construct($db)
	{
		try {
			$this->db = $db;
		} catch (PDOException $e) {
			exit('Database connection could not be established.');
		}
	}

	/**
	** Funzione che permette di prendere tutti gli studenti
	*/
	public function getAllUsers()
	{
		$sql = 'SELECT * FROM user';
		$query = $this->db->prepare($sql);
		$query->execute();
		return $query->fetchAll();
	}

	/**
	** Funzione che permette di trovare un user
	*/
	public function findUser($email)
	{
		$sql = "SELECT * FROM user WHERE email=:email";
		$query = $this->db->prepare($sql);
		$parameters = array(':email'=>$email);
		$query->execute($parameters);
		return $query->fetch();
	}

	/**
	** Funzione che permette di trovare un admin
	*/
	public function findAdmin($email, $password)
	{
		$sql = "SELECT * FROM admin WHERE email=:email AND password=:password";
		$query = $this->db->prepare($sql);
		$parameters = array(':email'=>$email, ':password'=>$password);
		$query->execute($parameters);
		return $query->fetch();
	}

	/**
	** Funzione che permette di trovare un id
	** data una email
	*/
	public function findId($email)
	{
		$sql = 'SELECT id FROM user WHERE email= :email';
		$query = $this->db->prepare($sql);
		$parameters = array(':email'=>$email);
		$query->execute($parameters);
		return $query->fetch();
	}

	/**
	** Funzione che permette di aggiungere un user
	*/
	public function addUser($nome, $cognome, $data_nascita, $email, $password)
	{
		if($this->findUser($email)!=false){
			return false;
		}
		$sql = 'INSERT INTO user (email, password)
			VALUES (:email,:password)';
		$query = $this->db->prepare($sql);
		$parameters = array(':email'=>$email,':password'=>$password);
		$query->execute($parameters);
		$id_utente_first = $this->findId($email);
		$id_utente = $id_utente_first->id;
		$sql = 'INSERT INTO informazioni (id_utente, nome, cognome, data_nascita)
			VALUES (:id_utente, :nome, :cognome, :data_nascita)';
		$query = $this->db->prepare($sql);
		$parameters = array(':id_utente'=>$id_utente, ':nome'=>$nome, ':cognome'=>$cognome,
			':data_nascita'=>$data_nascita);
		$query->execute($parameters);
		return true;
	}

	/**
	** Funzione che permette di aggiungere cibo
	** nel database
	*/
	public function addCibo()
	{

	}

	/**
	** Funzione che permette di prendere tutto il cibo
	** dal database
	*/
	public function getAllCibo()
	{

	}

	/**
	** Funzione che permette di prendere le categorie
	** dal database
	*/
	public function getAllCategorie()
	{
		$sql = 'SELECT * FROM categoria';
		$query = $this->db->prepare($sql);
		$query->execute();
		return $query->fetchAll();
	}

	/**
	** Funzione che permette di eliminare cibo
	** nel database
	*/
	public function deleteCibo()
	{

	}

	/**
	** Funzione che permette di vedere 
	** tutte le prenotazioni effettuate
	*/
	public function vediPrenotazioni()
	{

	}
}
