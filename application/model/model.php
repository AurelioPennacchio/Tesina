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
	** Funzione che permette di prendere 
	** le info di uno user
	*/
	public function getUserInfo($id)
	{
		$sql = 'SELECT user.email, informazioni.nome, informazioni.cognome, informazioni.data_nascita
			FROM user, informazioni 
			WHERE user.id = informazioni.id_utente AND user.id = :id';
		$query = $this->db->prepare($sql);
		$parameters = array(':id'=>$id);
		$query->execute($parameters);
		return $query->fetch();
	}

	/**
	** Funzione che permette di trovare un user
	*/
	public function findUser($email, $password)
	{
		$sql = "SELECT * FROM user WHERE email=:email AND password=:password";
		$query = $this->db->prepare($sql);
		$parameters = array(':email'=>$email,':password'=>$password);
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
		if($this->findUser($email,$password)!=false){
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
	public function addCibo($nome, $descrizione, $id_categoria)
	{
		$sql = 'INSERT INTO cibo (nome, descrizione, id_categoria) 
				VALUES (:nome, :descrizione, :id_categoria)';
		$query = $this->db->prepare($sql);
		$parameters = array(':nome'=>$nome, ':descrizione'=>$descrizione, ':id_categoria'=>$id_categoria);
		$query->execute($parameters);
	}

	/**
	** Funzione che permette di prendere tutto il cibo
	** dal database
	*/
	public function getAllCibo()
	{
		$sql = 'SELECT cibo.id,cibo.nome AS Nome, cibo.descrizione AS Descrizione, categoria.nome AS Categoria
					FROM cibo, categoria
					WHERE cibo.id_categoria = categoria.id AND (categoria.id = 1 OR categoria.id = 2)';
		$query = $this->db->prepare($sql);
		$query->execute();
		return $query->fetchAll();
	}

	/**
	** Funzione che permette di prendere tutte le bibite
	** nel database
	*/
	public function getAllBibite()
	{
		$sql = 'SELECT cibo.id, cibo.nome AS Nome, cibo.descrizione AS Descrizione, categoria.nome AS Categoria
					FROM cibo, categoria
					WHERE cibo.id_categoria = categoria.id AND categoria.id = 3';
		$query = $this->db->prepare($sql);
		$query->execute();
		return $query->fetchAll();
	}

	/*
	** Funzione che permette di prendere 
	** cibo e bibite di un database
	*/
	public function getAllCiboAndBibite()
	{
		$sql = 'SELECT cibo.id, cibo.nome AS Nome, cibo.descrizione AS Descrizione, categoria.nome AS Categoria, categoria.id
					FROM cibo, categoria
					WHERE cibo.id_categoria = categoria.id ORDER BY categoria.id';
		$query = $this->db->prepare($sql);
		$query->execute();
		return $query->fetchAll();
	}

	/**
	** Funzione che permette di avere tutti 
	** i primi piatti presenti nel database
	*/
	public function getAllPrimiPiatti()
	{
		$sql = 'SELECT cibo.id, cibo.nome AS Nome, cibo.descrizione AS Descrizione, categoria.nome AS Categoria
					FROM cibo, categoria
					WHERE cibo.id_categoria = categoria.id AND categoria.id = 1';
		$query = $this->db->prepare($sql);
		$query->execute();
		return $query->fetchAll();
	}

	/**
	** Funzione che permette di avere tutti i 
	** secondi piatti presenti nel database
	*/
	public function getAllSecondiPiatti()
	{
		$sql = 'SELECT cibo.id, cibo.nome AS Nome, cibo.descrizione AS Descrizione, categoria.nome AS Categoria
					FROM cibo, categoria
					WHERE cibo.id_categoria = categoria.id AND categoria.id = 2';
		$query = $this->db->prepare($sql);
		$query->execute();
		return $query->fetchAll();
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
	** Funzione che permette di aggiungere una prenotazione
	*/
	public function addPrenotazione($id_primo, $id_secondo, $id_bibita, $id_utente)
	{
		$data = date("Y-m-d");
		$sql = 'INSERT INTO prenotazioni(data_prenotazione, id_utente, id_primo_piatto, id_secondo_piatto,
			id_bibita) VALUES (:data, :utente, :primo, :secondo, :bibita)';
		$query = $this->db->prepare($sql);
		$parameters = array(':data'=>$data, ':utente'=>$id_utente, ':primo'=>$id_primo,
			':secondo'=>$id_secondo,':bibita'=>$id_bibita);
		$query->execute($parameters);
	}

	/**
	** Funzione che permette di aggiungere una prenotazione distinta
	*/
	public function addPrenotazioneDistinta($id_utente)
	{
		$data = date("Y-m-d");
		$sql = 'INSERT INTO prenotazione_distinta (id_utente,data) 
				VALUES (:id_utente,:data)';
		$query = $this->db->prepare($sql);
		$parameters = array(':id_utente'=>$id_utente, ':data'=>$data);
		$query->execute($parameters);
	}

	/**
	** Funzione che permette di avere una prenotazione distinta
	*/ 
	public function getPrenotazioneDistinta($id_utente){
		$data = date("Y-m-d");
		$sql = 'SELECT * FROM prenotazione_distinta WHERE id_utente = :id AND data=:data';
		$query = $this->db->prepare($sql);
		$parameters = array(':id'=>$id_utente, ':data'=>$data);
		$query->execute($parameters);
		return $query->fetch();
	}

	/**
	** Funzione che permette di aggiungere 
	** una prenotazione semplice
	*/
	public function addPrenotazioneSemplice($id_pre_dist,$id_cibo)
	{
		$sql = 'INSERT INTO prenotazione_semplice (id_pre_dist,id_cibo)
				VALUES (:id, :cibo)';
		$query = $this->db->prepare($sql);
		$parameters = array(':id'=>$id_pre_dist, ':cibo'=>$id_cibo);
		$query->execute($parameters);
	}

	/**
	**
	*/
	public function addPrenotazioneCompleta($id_utente, $id_primo, $id_secondo, $id_bibita)
	{
		$data = date("Y-m-d");
		if($this->getPrenotazioneDistinta($id_utente)!=false){
			return false;
		}
		$this->addPrenotazioneDistinta($id_utente);
		$id_pre = $this->getPrenotazioneDistinta($id_utente);
		$id_pre_dist = $id_pre->id;
		$this->addPrenotazioneSemplice($id_pre_dist,$id_primo);
		$this->addPrenotazioneSemplice($id_pre_dist,$id_secondo);
		$this->addPrenotazioneSemplice($id_pre_dist,$id_bibita);
		return true;
	}

	/**
	** Funzione che permette di avere le prenotazioni
	** che ha effettuato un utente
	*/
	public function getPrenotazione($id_utente)
	{
		$sql = 'SELECT prenotazione_distinta.id AS id_prenotazione, cibo.nome AS Cibo, prenotazione_distinta.data AS data 
				FROM prenotazione_distinta, prenotazione_semplice, cibo
				WHERE prenotazione_distinta.id = prenotazione_semplice.id_pre_dist 
				AND cibo.id = prenotazione_semplice.id_cibo AND prenotazione_distinta.id_utente=:id
				ORDER BY id_prenotazione';
		$query = $this->db->prepare($sql);
		$parameters = array(':id'=>$id_utente);
		$query->execute($parameters);
		return $query->fetchAll();
	}


	/**
	** Funzione che permette di avere le prenotazioni
	** della giornata
	*/
	public function getPrenotazioniOdierne()
	{
		$data = date("Y-m-d");
		$sql = 'SELECT prenotazione_distinta.id AS id_prenotazione, cibo.nome AS Cibo, prenotazione_distinta.data AS data, 
					informazioni.nome AS nome_utente, informazioni.cognome, informazioni.id_utente
					FROM prenotazione_distinta, prenotazione_semplice, cibo, informazioni, user
					WHERE prenotazione_distinta.id = prenotazione_semplice.id_pre_dist AND cibo.id = prenotazione_semplice.id_cibo 
					AND informazioni.id_utente = user.id AND user.id = prenotazione_distinta.id_utente AND 
					prenotazione_distinta.data = :data
					ORDER BY id_prenotazione';
		$query = $this->db->prepare($sql);
		$parameters = array(':data'=>$data);
		$query->execute($parameters);
		return $query->fetchAll();
	}

	/**
	** Funzione che permette di avere le 
	** tutte le prenotazioni
	*/
	public function getAllPrenotazioni()
	{
		$sql = 'SELECT prenotazione_distinta.id AS id_prenotazione, cibo.nome AS Cibo, prenotazione_distinta.data AS data, 
					informazioni.nome AS nome_utente, informazioni.cognome, informazioni.id_utente
					FROM prenotazione_distinta, prenotazione_semplice, cibo, informazioni, user
					WHERE prenotazione_distinta.id = prenotazione_semplice.id_pre_dist AND cibo.id = prenotazione_semplice.id_cibo 
					AND informazioni.id_utente = user.id AND user.id = prenotazione_distinta.id_utente
					ORDER BY id_prenotazione';
		$query = $this->db->prepare($sql);
		$query->execute();
		return $query->fetchAll();
	}
}
