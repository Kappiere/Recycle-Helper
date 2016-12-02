CREATE TABLE bidoni(
	id int,
	nome char(30),
);
CREATE TABLE prodotti(
	id int,
	nome char(30),
	id_bidone int,
);
CREATE TABLE richieste_prodotti(
	id int,
	nome char(30),
	email char(50),
	stato char(20),
	data datetime;
);