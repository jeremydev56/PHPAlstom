drop database if exists ppe ; 
create database ppe; 
use ppe;

create table admin (
	idadmin int(3) not null auto_increment, 
	nom varchar(50),
	prenom varchar(50),
	qualification varchar(50),
	tel varchar(20),
	primary key(idadmin)
);

create table employe (
	idemploye int(3) not null auto_increment, 
	nom varchar(50),
	prenom varchar(50),
	adresse varchar(50),
	tel varchar(20),
	primary key(idemploye)
);

create table vehicule (
	idvehicule int(3) not null auto_increment, 
	matricule varchar(50),
	marque varchar(50),
	nbkm int(10),
	energie enum("gazol","essence","electrique","autre"),
	idadmin int(3) not null,
	primary key(idvehicule), 
	foreign key(idadmin) references admin(idadmin)	
);

create table bus (
	idbus int(3) not null auto_increment, 
	matricule varchar(50),
	marque varchar(50),
	nbkm int(10),
	energie enum("gazol","essence","electrique","hybride","autre"),
	idadmin int(3) not null,
	primary key(idbus), 
	foreign key(idadmin) references admin(idadmin)
);

create table metro (
	idmetro int(3) not null auto_increment, 
	matricule varchar(50),
	marque varchar(50),
	nbkm int(10),
	energie enum("gazol","essence","electrique","autre"),
	idadmin int(3) not null,
	primary key(idmetro), 
	foreign key(idadmin) references admin(idadmin)
);

create table tgv (
	idtgv int(3) not null auto_increment, 
	matricule varchar(50),
	marque varchar(50),
	nbkm int(10),
	energie enum("gazol","essence","electrique","autre"),
	idadmin int(3) not null,
	primary key(idtgv),
	foreign key(idadmin) references admin(idadmin) 
);


insert into admin values (null,"Benjamin", "franklin", "Maintenance",
 "0101010101"), (null,"Juliette", "romeo", "Réparation Moteur", "0202020202");

insert into employe values (null,"macron", "jean", "Paris", "0101010101"), 
	(null,"jake", "spence", "Lyon", "0202020202"); 

insert into vehicule values (null, "23az23", "Peugeot", 20000, "gazol", 1), 
	(null, "56rt56", "Volswagen", 30000, "essence", 2); 

insert into bus values (null, "23az23", "Peugeot", 20000, "autre", 1), 
	(null, "56rt56", "Citroen", 30000, "essence", 2); 

insert into metro values (null, "23az23", "Citroën", 20000, "gazol", 1), 
	(null, "56rt56", "Alstom", 30000, "electrique", 2);

insert into tgv values (null, "23az23", "France", 20000, "gazol", 1), 
	(null, "56rt56", "Alstom", 30000, "electrique", 2);























