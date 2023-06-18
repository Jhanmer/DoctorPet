drop database if exists BDDoctorPet;
create database BDDoctorPet;
use BDDoctorPet;


drop table if exists DP_Consulta;
Create table DP_Consulta( 
idConsulta int primary key auto_increment not null, 
nombreCli varchar(50) not null,
TelefonoCons char(9) not null, 
FechaCons date not null, 
correoCli varchar(100) not null,
Motivo varchar(200) not null
); 

drop table if exists DP_Distrito;
Create table DP_Distrito( 
idDistrito int primary key auto_increment not null, 
Nombre varchar(100) 
); 
INSERT INTO DP_Distrito (idDistrito, Nombre) VALUES
(1, 'Chorrillos'),
(2, 'Pachacamac'),
(3, 'Pucusana'),
(4, 'San Juan de Miraflores'),
(5, 'San Bartolo'),
(6, 'Punta Hermosa'),
(7, 'Punta Negra'),
(8, 'Lurín'),
(9, 'Santa María del Mar'),
(10, 'Villa El Salvador'),
(11, 'Villa María del Triunfo');

drop table if exists DP_Categoria_Producto;
Create table DP_Categoria_Producto(
idCategoriaPro int primary key auto_increment not null, 
nombreCatePro varchar(100)
);

drop table if exists DP_Raza;
Create table DP_Raza(
idRaza int primary key auto_increment not null,
nombreRaza varchar(100)
);
INSERT INTO dp_raza (idRaza, nombreRaza) VALUES
(1, 'Perro - Boxer'),
(2, 'Perro - Bulldog'),
(3, 'Perro - Caniche'),
(4, 'Perro - Chihuahua'),
(5, 'Perro - Chow chow'),
(6, 'Perro - Golden retriever'),
(7, 'Perro - Husky'),
(8, 'Perro - Labrador'),
(9, 'Perro - Pitbull'),
(10, 'Perro - San Bernardo'),
(11, 'Perro - Yorkshire terrier'),
(12, 'Perro - Mestizo'),
(13, 'Gato - Azul ruso'),
(14, 'Gato - British Shorthair'),
(15, 'Gato - Himalayo'),
(16, 'Gato - Maine Coon'),
(17, 'Gato - Persa'),
(18, 'Gato - Ragdoll'),
(19, 'Gato - Siames'),
(20, 'Gato - Sphynx'),
(21, 'Gato - Siberiano'),
(22, 'Gato - Mestizo');

drop table if exists DP_Especie;
Create table DP_Especie(
idEspecie int primary key auto_increment not null,
nombreEspe varchar(100)
);
INSERT INTO dp_especie (idEspecie, nombreEspe) VALUES
(1, 'Perro'),
(2, 'Gato');

drop table if exists DP_Cliente;
Create table DP_Cliente( 
idCliente int primary key auto_increment not null, 
nombre varchar(50) not null, 
apellidos varchar(50) not null, 
Fecha_nacimiento date not null, 
Genero bit not null,
direccion varchar(100) not null, 
IdDistrito int, 
Telefono varchar(20),
Email varchar(100) not null, 
Password varchar(50) not null, 
cargo varchar(20) default 'Usuario' not null,
Fecha_registro Datetime not null default CURRENT_TIMESTAMP,
foreign key (IdDistrito) references DP_Distrito(IdDistrito)
); 


drop table if exists DP_Mascota;
Create table DP_Mascota( 
idMascota int primary key auto_increment not null, 
NomMasc varchar(200), 
EdadMasc varchar(20), 
idEspecie int, 
idRaza  int, 
SexoMasc varchar(10), 
idCliente int,
peso varchar(250) DEFAULT NULL,
imgMascota LONGBLOB,
foreign key (idCliente) references DP_Cliente(idCliente),
foreign key (idEspecie) references DP_Especie(idEspecie),
foreign key (idRaza) references DP_Raza(idRaza)
); 

drop table if exists DP_Personal;
Create table DP_Personal( 
idPersonal int primary key auto_increment not null, 
NomPers varchar(200), 
ApePers varchar(200), 
CorreoPers varchar(200), 
NumeroPers int, 
IdDistrito int,
CargoPers varchar(200),
foreign key (IdDistrito) references DP_Distrito(IdDistrito)
); 




drop table if exists DP_Camapania;
Create table DP_Camapania(
idCampania int primary key auto_increment not null, 
tip_campania varchar(100) not null,
direccion varchar(200) not null,
idDistrito int not null,
urlGoogle_maps varchar(500) null,
foreign key (IdDistrito) references DP_Distrito(IdDistrito)
);

drop table if exists DP_BanioCorte;
Create table DP_BanioCorte(
idBanioCorte int primary key auto_increment not null, 
idCliente int not null,
idMascota int not null,
direccion varchar(200) not null,
idDistrito int not null,
urlGoogle_maps varchar(500) null,
foreign key (idCliente) references DP_Cliente(idCliente),
foreign key (idMascota) references DP_Mascota(idMascota),
foreign key (IdDistrito) references DP_Distrito(IdDistrito)
);


drop table if exists DP_Producto;
Create table DP_Producto(
idProducto int primary key auto_increment not null,
nombreProducto varchar(100) not null,
idCategoriaPro int not null,
precio Decimal(10,2) not null,
fechaVencimiento date not null,
foreign key (idCategoriaPro) references DP_Categoria_Producto(idCategoriaPro)
);
drop table if exists dp_mascota_perdida;
CREATE TABLE dp_mascota_perdida (
  Id_perdidos int NOT NULL PRIMARY KEY auto_increment,
  nombre_perdido varchar(50) NOT NULL,
  fecha_perdido varchar(30) NOT NULL,
  visto_perdido varchar(50) NOT NULL,
  contacto_perdido int(15) NOT NULL,
  tamanio_perdido varchar(50) NOT NULL,
  descripcion_perdido varchar(200) NOT NULL
);

drop table if exists dp_ConsultaPersonalizada;
CREATE TABLE dp_ConsultaPersonalizada (
idConsultaPer int NOT NULL PRIMARY KEY auto_increment,
motivo varchar(255) NOT NULL,
estado int NOT NULL,
fechaCita date not null,
HoraCita time not null,
idMascota int NOT NULL,
imgCita varchar(255) NULL,
dispo int not null,
FechaUltRe date NOT NULL,
Fecha_registro Datetime not null default CURRENT_TIMESTAMP,
foreign key (idMascota) references DP_Mascota(idMascota)
);


drop table if exists dp_Veterinarios;
CREATE TABLE dp_Veterinarios (
idVeterinario int NOT NULL PRIMARY KEY auto_increment,
nombreVet varchar(50) NOT NULL,
apellidoVet varchar(50) NOT NULL,
direccion varchar(50) NOT NULL,
telefono varchar(20) NOT NULL,
correo varchar(100) NOT NULL,
especialidad varchar(100) NOT NULL,
experiencia int NOT NULL,
fechaContra date NOT NULL,
disponibilidad varchar(100) NOT NULL,
Salario decimal(10,2) not null
);

INSERT INTO dp_Veterinarios (nombreVet, apellidoVet, direccion, telefono, correo, especialidad, experiencia, fechaContra, disponibilidad, Salario) VALUES ('Carlos', 'Messi Lopez', 'Av. Calamar', '992992992', 'carlos@doctorpet.pe', 'Medicina Interna', 5, '2023-06-14', 'Lunes a Martes: 9:00 AM - 2:00 PM', '1600'); 
INSERT INTO dp_Veterinarios (nombreVet, apellidoVet, direccion, telefono, correo, especialidad, experiencia, fechaContra, disponibilidad, Salario) VALUES ('Maria', 'Perez Castillo', 'Av. Sarita', '992992992', 'maria@doctorpet.pe', 'Cirugía veterinaria', 8, '2023-06-14', 'Lunes a Martes: 12:00 AM - 6:00 PM', '1600'); 
INSERT INTO dp_Veterinarios (nombreVet, apellidoVet, direccion, telefono, correo, especialidad, experiencia, fechaContra, disponibilidad, Salario) VALUES ('Carla', 'Maita Puma', 'Av. Los Andes', '992992992', 'carla@doctorpet.pe', 'Dermatología veterinaria', 9, '2023-06-14', ' Miercoles a Viernes: 9:00 AM - 11:00 PM', '1600'); 
INSERT INTO dp_Veterinarios (nombreVet, apellidoVet, direccion, telefono, correo, especialidad, experiencia, fechaContra, disponibilidad, Salario) VALUES ('Carmen', 'Condor Paza', 'Av. Los Cielos', '992992992', 'carmen@doctorpet.pe', 'Oftalmología veterinaria', 3, '2023-06-14', 'Miercoles a Viernes: 9:00 AM - 6:00 PM', '1600'); 


INSERT INTO dp_mascota_perdida (Id_perdidos, nombre_perdido, fecha_perdido, visto_perdido, contacto_perdido, tamanio_perdido, descripcion_perdido) VALUES
(1, 'Carlos', '14 de mayo', 'Mall del sur', 992992992, '60cm', 'De estatura pequeña, con manchitas rojas'),
(2, 'Panchito', '15 de mayo', 'Mall del sur, junto con las gatitas ', 993993993, 'aproximado de 50 cm de altura', 'Estatura pequeña, manchita en su cola'),
(3, 'Luisito', '13 de mayo', 'Real plaza de vmt', 996996996, '1 cm', 'mi pulguita se perdio'),
(4, 'Dumbito', '14 de abril', 'Zoologico ', 994994994, '15 metros', 'Tiene 3 piernas, se escapo cuando vio una rata'),
(5, 'Jacinto', '2 de marzo', 'Mercado unicachi', 997997997, '40cm', 'Me acompañaba al mercado, y se perdio cuando fui a la carniceria'),
(6, 'Quesito', '8 de junio', 'Plaza de armas de surco', 998998998, '20cm', 'Mi ratita esta gordita, fuimos a un parque y aparecieron gatos'),
(7, 'Zapatito', '4 de marzo', 'Universidad utp', 944944944, '5cm', 'mi lorito se perdio en el baño');


drop table if exists comidap;
CREATE TABLE comidap (
  `idComidap` int NOT NULL PRIMARY KEY auto_increment,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `imagen` varchar(250) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `comidap` (`idComidap`, `nombre`, `descripcion`, `imagen`, `precio`) VALUES
(4, 'Rico cat', 'Alimento para gatos', '61f6f03f94c645373443fa853af27aa3', '75.00'),
(5, 'Mi mascot Actualizado', 'MI mascot alimento', '9196bea909f21a7e7a9604eb73ede6a1', '100.00');


INSERT INTO `dp_cliente`(`nombre`, `apellidos`, `Fecha_nacimiento`, `Genero`, `direccion`, `IdDistrito`, `Telefono`, `Email`, `Password`, `cargo`, `Fecha_registro`) 
				VALUES ('Admin','Administracion','2000-02-02','1','Icaros','11','987456321','admin@doctorpet.pe','123456','Admin','2023-06-05 00:28:01'); 
INSERT INTO `dp_cliente`(`nombre`, `apellidos`, `Fecha_nacimiento`, `Genero`, `direccion`, `IdDistrito`, `Telefono`, `Email`, `Password`, `cargo`, `Fecha_registro`) 
				VALUES ('Efren','HR','2023-06-08','1','AV CENTRAL','10','963598623','efrenhuamanreyna@gmail.com','123','Usuario','2023-06-12 18:02:10'); 
INSERT INTO `dp_cliente`(`nombre`, `apellidos`, `Fecha_nacimiento`, `Genero`, `direccion`, `IdDistrito`, `Telefono`, `Email`, `Password`, `cargo`, `Fecha_registro`) 
				VALUES ('Ryan', 'Juarez Perez', '2004-07-29', '1', '#711', '7', '962563262', 'Ryan@gmail.com', '123456', 'Usuario', '2023-06-17 21:22:24'); 
INSERT INTO `dp_cliente`(`nombre`, `apellidos`, `Fecha_nacimiento`, `Genero`, `direccion`, `IdDistrito`, `Telefono`, `Email`, `Password`, `cargo`, `Fecha_registro`) 
				VALUES ('Maria', 'Alves Alvis', '2008-06-11', '1', '#251', '4', '963256895', 'Juana@gmail.com', 'juana123', 'Usuario', '2023-06-17 21:23:16'); 				
INSERT INTO `dp_cliente`(`nombre`, `apellidos`, `Fecha_nacimiento`, `Genero`, `direccion`, `IdDistrito`, `Telefono`, `Email`, `Password`, `cargo`, `Fecha_registro`) 
				VALUES ('Berta', 'Perez Vasquez', '2005-06-15', '1', '#125', '4', '986523562', 'Berta@gmail.com', '123456', 'Usuario', '2023-06-17 21:24:01'); 	
INSERT INTO `dp_cliente`(`nombre`, `apellidos`, `Fecha_nacimiento`, `Genero`, `direccion`, `IdDistrito`, `Telefono`, `Email`, `Password`, `cargo`, `Fecha_registro`) 
				VALUES ('Diego', 'Cortez Quispe', '2002-05-29', '1', 'Av Revolucion', '10', '986235741', 'Diego@gmail.com', '156', 'Usuario', '2023-06-17 21:24:47'); 	

---------------------------------------------
--------------------------------------------
INSERT INTO `DP_Personal`(`NomPers`, `ApePers`, `CorreoPers`, `NumeroPers`, `IdDistrito`, `CargoPers`) 
				VALUES ('Juan Carlos', 'Rojas Azules', 'juan@gmail.com', '986523759', '5', 'Estilista'); 	
INSERT INTO `DP_Personal`(`NomPers`, `ApePers`, `CorreoPers`, `NumeroPers`, `IdDistrito`, `CargoPers`) 
				VALUES ('Carlos Juan', 'Suarez Messi', 'Carlos@gmail.com', '986523546', '4', 'Recepcionista'); 
INSERT INTO `DP_Personal`(`NomPers`, `ApePers`, `CorreoPers`, `NumeroPers`, `IdDistrito`, `CargoPers`) 
				VALUES ('Julian ', 'Alvis Alvarez', 'julian@gmail.com', '985236456', '7', 'recepcionista'); 
--------------------------------------------
--------------------------------------------
INSERT INTO `DP_Mascota`(`NomMasc`, `EdadMasc`, `idEspecie`, `idRaza`, `SexoMasc`, `idCliente`, `peso`, `imgMascota`) 
				VALUES ('Wilson', '4', '2', '17', 'Macho', '2', '10', NULL);
INSERT INTO `DP_Mascota`(`NomMasc`, `EdadMasc`, `idEspecie`, `idRaza`, `SexoMasc`, `idCliente`, `peso`, `imgMascota`) 
				VALUES ('Drako', '5', '1', '5', 'Macho', '6', '20', NULL);				
INSERT INTO `DP_Mascota`(`NomMasc`, `EdadMasc`, `idEspecie`, `idRaza`, `SexoMasc`, `idCliente`, `peso`, `imgMascota`) 
				VALUES ('Drako', '5', '1', '5', 'Macho', '6', '20', NULL);
INSERT INTO `DP_Mascota`(`NomMasc`, `EdadMasc`, `idEspecie`, `idRaza`, `SexoMasc`, `idCliente`, `peso`, `imgMascota`) 
				VALUES ('Lisa', '4', '2', '15', 'Hembra', '4', '10', NULL);
INSERT INTO `DP_Mascota`(`NomMasc`, `EdadMasc`, `idEspecie`, `idRaza`, `SexoMasc`, `idCliente`, `peso`, `imgMascota`) 
				VALUES ('Monty', '3', '1', '4', 'Macho', '5', '10', NULL);


/*
PROCEDIMIENTOS ALMACENADOS
*/
/*
drop procedure if exists SP_ObtenerMascotasPorCliente(IN idUsuario INT)
BEGIN
  SELECT idMascota, NomMasc
  FROM DP_Mascota
  WHERE idCliente = idUsuario;
END*/

drop procedure if exists SP_InsertarConsulta;
	delimiter $$
	create procedure SP_InsertarConsulta
	(in 
	nombreCli varchar (50),
	TelefonoCons char(9),
	FechaCons date,
	correoCli varchar(100),
	Motivo varchar(200))
	begin
	insert into DP_Consulta(nombreCli,TelefonoCons,FechaCons,correoCli,Motivo) 
	values(nombreCli,TelefonoCons,FechaCons,correoCli,Motivo);
	end $$
	delimiter ;

drop procedure if exists SP_Login;
DELIMITER $$
create PROCEDURE SP_Login(in
_email varchar(100),
_clave varchar(50)
)
BEGIN
	DECLARE res INT;
    select count(*) into res from dp_cliente where Email like _email;
	IF res = 0 THEN
		select -1;
	ELSE
		select count(*) into res from dp_cliente where Password like _clave;
		IF res = 0 THEN
			select -2;
		ELSE
			select * from dp_cliente
			where Email like _email and Password like _clave;
		END IF;
	END IF;
End$$
DELIMITER ;