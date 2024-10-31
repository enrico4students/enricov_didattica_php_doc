CREATE DATABASE formichi_prodotti;

USE formichi_prodotti;

CREATE TABLE Componenti(
	id_comp VARCHAR(4) NOT NULL,
	nome_componente VARCHAR(25) NOT NULL,
	fornitore VARCHAR(25) NOT NULL,
	costo_unitario DOUBLE NOT NULL,
	CONSTRAINT ChiavePrimaria PRIMARY KEY(id_comp)
);
CREATE TABLE Dipartimenti(
	id_dip VARCHAR(3) NOT NULL,
	nome_dipartimento VARCHAR(30) NOT NULL,
	localita VARCHAR(20) NOT NULL,
	provincia VARCHAR(2) NOT NULL,
	CONSTRAINT ChiavePrimaria PRIMARY KEY(id_dip)
);
CREATE TABLE Personale(
	matricola VARCHAR(5) NOT NULL,
	id_dip VARCHAR(3) NOT NULL,
	nominativo VARCHAR(50) NOT NULL,
	data_nascita DATE NOT NULL,
	qualifica VARCHAR(2) NOT NULL,
	stipendio DOUBLE NOT NULL,
	CONSTRAINT ChiavePrimaria PRIMARY KEY(matricola),
	CONSTRAINT DipartimentiPersonale FOREIGN KEY(id_dip)
		REFERENCES Dipartimenti(id_dip)
);
CREATE TABLE Prodotti(
	id_prod VARCHAR(4) NOT NULL,
	id_dip VARCHAR(3) NOT NULL,
	nome_prodotto VARCHAR(50) NOT NULL,
	prezzo DOUBLE NOT NULL,
	CONSTRAINT ChiavePrimaria PRIMARY KEY(id_prod),
	CONSTRAINT DipartimentiProdotti FOREIGN KEY(id_dip)
		REFERENCES Dipartimenti(id_dip)
);
CREATE TABLE Composizioni(
	id_prod VARCHAR(4) NOT NULL,
	id_comp VARCHAR(4) NOT NULL,
	unita_comp REAL NOT NULL,
	CONSTRAINT ChiavePrimaria PRIMARY KEY(id_prod,id_comp),
	CONSTRAINT ComponentiComposizioni FOREIGN KEY(id_comp)
		REFERENCES Componenti(id_comp),
	CONSTRAINT ProdottiComposizioni FOREIGN KEY(id_prod)
		REFERENCES Prodotti(id_prod)
);

// popolare

USE formichi_prodotti;

-- Popola la tabella Dipartimenti
INSERT INTO Dipartimenti (id_dip, nome_dipartimento, localita, provincia) VALUES
('D01', 'Produzione', 'Milano', 'MI'),
('D02', 'Vendite', 'Roma', 'RM'),
('D03', 'Ricerca', 'Torino', 'TO'),
('D04', 'Logistica', 'Napoli', 'NA'),
('D05', 'Amministrazione', 'Bologna', 'BO');

-- Popola la tabella Componenti
INSERT INTO Componenti (id_comp, nome_componente, fornitore, costo_unitario) VALUES
('C001', 'compon01', 'Fornitore_A', 12.5),
('C002', 'compon02', 'Fornitore_B', 8.0),
('C003', 'compon03', 'Fornitore_C', 10.0),

-- ... aggiungere fino a 150 componenti con costi unitari variabili e fornitori diversi
('C150', 'compon150', 'Fornitore_Z', 15.5);
-- Inserimento di altri 40 componenti
INSERT INTO Componenti (id_comp, nome_componente, fornitore, costo_unitario) VALUES
('C151', 'compon151', 'Fornitore_A', 5.0),
('C152', 'compon152', 'Fornitore_B', 6.5),
('C153', 'compon153', 'Fornitore_C', 7.2),
('C154', 'compon154', 'Fornitore_D', 4.5),
('C155', 'compon155', 'Fornitore_E', 8.0),
('C156', 'compon156', 'Fornitore_A', 9.0),
('C157', 'compon157', 'Fornitore_B', 6.0),
('C158', 'compon158', 'Fornitore_C', 5.8),
('C159', 'compon159', 'Fornitore_D', 4.2),
('C160', 'compon160', 'Fornitore_E', 10.0),
('C161', 'compon161', 'Fornitore_A', 3.5),
('C162', 'compon162', 'Fornitore_B', 7.8),
('C163', 'compon163', 'Fornitore_C', 6.4),
('C164', 'compon164', 'Fornitore_D', 5.6),
('C165', 'compon165', 'Fornitore_E', 8.5),
('C166', 'compon166', 'Fornitore_A', 9.3),
('C167', 'compon167', 'Fornitore_B', 7.1),
('C168', 'compon168', 'Fornitore_C', 4.9),
('C169', 'compon169', 'Fornitore_D', 5.5),
('C170', 'compon170', 'Fornitore_E', 6.8),
('C171', 'compon171', 'Fornitore_A', 3.2),
('C172', 'compon172', 'Fornitore_B', 6.3),
('C173', 'compon173', 'Fornitore_C', 8.2),
('C174', 'compon174', 'Fornitore_D', 4.8),
('C175', 'compon175', 'Fornitore_E', 9.1),
('C176', 'compon176', 'Fornitore_A', 7.6),
('C177', 'compon177', 'Fornitore_B', 8.3),
('C178', 'compon178', 'Fornitore_C', 5.7),
('C179', 'compon179', 'Fornitore_D', 3.8),
('C180', 'compon180', 'Fornitore_E', 6.1),
('C181', 'compon181', 'Fornitore_A', 7.4),
('C182', 'compon182', 'Fornitore_B', 4.7),
('C183', 'compon183', 'Fornitore_C', 8.7),
('C184', 'compon184', 'Fornitore_D', 6.2),
('C185', 'compon185', 'Fornitore_E', 5.3),
('C186', 'compon186', 'Fornitore_A', 9.5),
('C187', 'compon187', 'Fornitore_B', 7.7),
('C188', 'compon188', 'Fornitore_C', 6.6),
('C189', 'compon189', 'Fornitore_D', 3.9),
('C190', 'compon190', 'Fornitore_E', 4.6);


-- Popola la tabella Prodotti
INSERT INTO Prodotti (id_prod, id_dip, nome_prodotto, prezzo) VALUES
('P001', 'D01', 'prodotto01', 120.0),
('P002', 'D01', 'prodotto02', 150.0),
('P003', 'D02', 'prodotto03', 100.0),
-- ... aggiungere fino a 50 prodotti con prezzi variabili e assegnarli a dipartimenti diversi
('P050', 'D04', 'prodotto50', 200.0);

-- Popola la tabella Personale
INSERT INTO Personale (matricola, id_dip, nominativo, data_nascita, qualifica, stipendio) VALUES
('M0001', 'D01', 'Mario Rossi', '1985-05-10', 'IN', 30000),
('M0002', 'D02', 'Giulia Bianchi', '1978-12-22', 'AM', 35000),
('M0003', 'D03', 'Paolo Verdi', '1982-07-17', 'TE', 28000),
('M0004', 'D04', 'Laura Neri', '1990-04-25', 'GE', 32000),
-- ... aggiungere più record per raggiungere circa 20 dipendenti per dipartimento 
('M0120', 'D05', 'Francesca Lilla', '1988-11-11', 'AM', 34000);

-- Popola la tabella Composizioni con dati di relazione tra Prodotti e Componenti
INSERT INTO Composizioni (id_prod, id_comp, unita_comp) VALUES
('P001', 'C001', 2.0),
('P001', 'C002', 1.5),
('P002', 'C003', 3.0),
-- ... continua a popolare in modo simile per altri prodotti e componenti 
('P050', 'C150', 1.2);

INSERT INTO Composizioni (id_prod, id_comp, unita_comp) VALUES
('P001', 'C151', 2.5),
('P002', 'C152', 1.8),
('P003', 'C153', 3.0),
('P004', 'C154', 1.2),
('P005', 'C155', 2.0),
('P006', 'C156', 3.5),
('P007', 'C157', 1.5),
('P008', 'C158', 2.2),
('P009', 'C159', 1.7),
('P010', 'C160', 2.3),
('P011', 'C161', 2.9),
('P012', 'C162', 1.3),
('P013', 'C163', 3.1),
('P014', 'C164', 2.4),
('P015', 'C165', 1.6),
('P016', 'C166', 2.8),
('P017', 'C167', 3.0),
('P018', 'C168', 1.9),
('P019', 'C169', 2.7),
('P020', 'C170', 1.4),
('P021', 'C171', 2.6),
('P022', 'C172', 3.2),
('P023', 'C173', 1.2),
('P024', 'C174', 2.3),
('P025', 'C175', 3.4),
('P026', 'C176', 1.5),
('P027', 'C177', 2.9),
('P028', 'C178', 1.1),
('P029', 'C179', 2.5),
('P030', 'C180', 3.6),
('P031', 'C181', 1.8),
('P032', 'C182', 2.7),
('P033', 'C183', 1.9),
('P034', 'C184', 3.2),
('P035', 'C185', 1.4),
('P036', 'C186', 2.1),
('P037', 'C187', 3.0),
('P038', 'C188', 1.3),
('P039', 'C189', 2.4),
('P040', 'C190', 1.6);



