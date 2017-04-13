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
	public function findUser($email, $password)
	{
		$sql = "SELECT * FROM user WHERE email=:email AND password=:password";
		$query = $this->db->prepare($sql);
		$parameters = array(':email'=>$email, ':password'=>$password);
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
		$sql = 'INSERT INTO user (nome, cognome, data_nascita, email, password)
		VALUES (:nome, :cognome, :data_nascita, :email, :password)';
		$query = $this->db->prepare($sql);
		$parameters = array(':nome'=>$nome, ':cognome'=>$cognome, ':data_nascita'=>$data_nascita,
			':email'=>$email,':password'=>$password);
		$query->execute($parameters);

		/*
		$sql = 'INSERT INTO user (email, password)
			VALUES (:email,:password)';
		$query = $this->db->prepare($sql);
		$parameters = array(':email'=>$email,':password'=>$password);
		$query->execute($parameters);
		$id_utente = findId($email);
		*/
	}
}
