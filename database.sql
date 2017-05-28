CREATE TABLE user 
(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	email VARCHAR(40) NOT NULL,
	password VARCHAR(40) NOT NULL 
);

CREATE TABLE informazioni 
(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	id_utente INT UNSIGNED,
	nome VARCHAR(40) NOT NULL,
	cognome VARCHAR(40) NOT NULL,
	data_nascita DATE NOT NULL,
	FOREIGN KEY (id_utente) REFERENCES user(id) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE admin 
(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	email VARCHAR(50) NOT NULL,
	password VARCHAR(50) NOT NULL
);

CREATE TABLE cibo
(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome VARCHAR(50) NOT NULL,
	descrizione TEXT NOT NULL,
	id_categoria INT UNSIGNED,
	FOREIGN KEY (id_categoria) REFERENCES categoria(id) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE categoria
(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome VARCHAR(30) NOT NULL
);

CREATE TABLE prenotazioni
(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	data_prenotazione DATE NOT NULL,
	id_utente INT UNSIGNED, 
	id_primo_piatto INT UNSIGNED, 
	id_secondo_piatto INT UNSIGNED, 
	id_bibita INT UNSIGNED,
	FOREIGN KEY (id_utente) REFERENCES user(id) ON UPDATE CASCADE ON DELETE CASCADE,
	FOREIGN KEY (id_primo_piatto) REFERENCES cibo(id) ON UPDATE CASCADE ON DELETE CASCADE,
	FOREIGN KEY (id_secondo_piatto) REFERENCES cibo(id) ON UPDATE CASCADE ON DELETE CASCADE,
	FOREIGN KEY (id_bibita) REFERENCES cibo(id) ON UPDATE CASCADE ON DELETE CASCADE
);


CREATE TABLE prenotazione_distinta
(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	id_utente INT UNSIGNED,
	data DATE NOT NULL,
	FOREIGN KEY (id_utente) REFERENCES user(id) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE prenotazione_semplice
(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	id_pre_dist INT UNSIGNED, 
	id_cibo INT UNSIGNED,
	FOREIGN KEY (id_pre_dist) REFERENCES prenotazione_distinta(id) ON UPDATE CASCADE ON DELETE CASCADE,
	FOREIGN KEY (id_cibo) REFERENCES cibo(id) ON UPDATE CASCADE ON DELETE CASCADE
);


INSERT INTO categoria (nome) VALUES ('Primo piatto');
INSERT INTO categoria (nome) VALUES ('Secondo piatto');
INSERT INTO categoria (nome) VALUES ('Bibita');

INSERT INTO cibo (nome, descrizione, id_categoria) 
VALUES ('Risotto allo zafferano','Risotto allo zafferano',1);

INSERT INTO cibo (nome, descrizione, id_categoria) 
VALUES ('Risotto ai funghi','Risotto ai funghi',1);

INSERT INTO cibo (nome, descrizione, id_categoria) 
VALUES ('Grigliata','Grigliata',2);

INSERT INTO cibo (nome, descrizione, id_categoria) 
VALUES ('Costata','Costata',2);

INSERT INTO cibo (nome, descrizione, id_categoria) 
VALUES ('Acqua naturale 75cl','Acqua naturale 75cl',3);

INSERT INTO cibo (nome, descrizione, id_categoria) 
VALUES ('Acqua frizzante 75cl','Acqua frizzante 75cl',3);



INSERT INTO prenotazione_distinta (id_utente,data) 
VALUES (5,'2017-05-26');

INSERT INTO prenotazione_distinta (id_utente,data) 
VALUES (5,'2017-05-25');

INSERT INTO prenotazione_distinta (id_utente,data) 
VALUES (5,'2017-05-24');

INSERT INTO prenotazione_distinta (id_utente,data) 
VALUES (7,'2017-05-26');

INSERT INTO prenotazione_distinta (id_utente,data) 
VALUES (5,'2017-05-28');

INSERT INTO prenotazione_semplice (id_pre_dist,id_cibo)
VALUES (1, 1);

INSERT INTO prenotazione_semplice (id_pre_dist,id_cibo)
VALUES (1, 3);

INSERT INTO prenotazione_semplice (id_pre_dist,id_cibo)
VALUES (1, 5);

INSERT INTO prenotazione_semplice (id_pre_dist,id_cibo)
VALUES (3, 2);

INSERT INTO prenotazione_semplice (id_pre_dist,id_cibo)
VALUES (3, 3);

INSERT INTO prenotazione_semplice (id_pre_dist,id_cibo)
VALUES (3, 6);

INSERT INTO prenotazione_semplice (id_pre_dist,id_cibo)
VALUES (5, 2);

INSERT INTO prenotazione_semplice (id_pre_dist,id_cibo)
VALUES (5, 4);

INSERT INTO prenotazione_semplice (id_pre_dist,id_cibo)
VALUES (5, 6);
