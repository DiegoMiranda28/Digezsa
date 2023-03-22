create database digesza
use digesza

create table derechoHabienteDatos(	
	numero_solicitud varchar(6) primary key not null,
	nombres varchar(50) not null,
	apellido_paterno varchar(50) not null,
	apellido_materno varchar(50) not null,
	curp varchar(18) unique not null,
	rfc varchar(13) unique not null,
	email varchar(50) unique not null,
	genero char not null check (genero in('M','F')),
	fecha_registro datetime,
	estado_civil varchar(25) not null check (estado_civil in('Casado(a)','Soltero(a)','Jefe(a) de familia')),
)

create table derechoHabienteDomicilio (	
	solicitud varchar(6) not null foreign key references derechoHabienteDatos(numero_solicitud),
	curp varchar(18) unique not null foreign key references derechoHabienteDatos (curp),
	calle varchar(50) not null,
	numero_interior numeric, 
	numero_exterior numeric not null,
	colonia varchar(50) not null,
	codigo_postal numeric not null,
	municipio varchar(50) not null,
	entidad varchar(30) not null,
	num_integrantes_fam numeric not null,
	tel_particular varchar(10),
	tel_personal varchar(10) not null
)

create table adquisicionVivienda 
(	rfc varchar(13) unique not null foreign key references derechoHabienteDatos(rfc),
	curp varchar(18) unique not null foreign key references derechoHabienteDatos(curp),
	entidad varchar(50) not null,
	especificacion_vivienda varchar(200),
	tipo_vivienda varchar(25) not null check (tipo_vivienda in ('Nueva','Usada'))
)

create table derechoHabienteLaboral 
(	rfc varchar(13) unique not null foreign key references derechoHabienteDatos(rfc),
	dependencia varchar(50) not null,
	nss varchar(10) unique not null,
	sueldo decimal(11,2) not null,
	nombramiento varchar(10) not null check(nombramiento in ('Base','Confianza')),
	organizacion_sindical varchar(70),
	bimestres_cotizados numeric not null
)

create table conyugeDatos
(	nombres varchar(50) not null,
	apellido_paternos varchar(50) not null,
	apellido_maternos varchar(50) not null,
	curp varchar(18) primary key not null,
	rfc varchar(13) unique not null,
	genero char not null check (genero in('M','F')),
	infonavit varchar(2) not null check (infonavit in ('Si','No')),
	num_solicitud_Hab varchar(6) foreign key references derechoHabienteDatos(numero_solicitud)
)

create table conyugeLaboral 
(	numero_solicitud_DH varchar(6) not null foreign key references derechoHabienteDatos(numero_solicitud),
	rfc varchar(13) not null foreign key references conyugeDatos (rfc),
	dependencia varchar(50) not null,
	nss varchar(10) not null,
	sueldo decimal(11,2) not null,
	nombramiento varchar(10) not null check(nombramiento in ('Base','Confianza')),
	organizacion_sindical varchar(70),
	bimestres_cotizados numeric
)

