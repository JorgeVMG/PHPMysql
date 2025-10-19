-- phpMyAdmin SQL Dump
-- version 2.8.1
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 17-08-2012 a las 00:43:05
-- Versión del servidor: 5.0.21
-- Versión de PHP: 5.1.4
-- 
-- Base de datos: infoautos
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla auto
-- 

CREATE TABLE auto (
  Patente varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL,
  Marca varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  Modelo int(11) NOT NULL,
  DniDuenio varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (Patente)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla auto
-- 

INSERT INTO auto (Patente, Marca, Modelo, DniDuenio) VALUES 
('ADC 152', 'Fiat Uno', 98, '28326986'),
('POL 968', 'Renault 12', 77, '28326986'),
('KJU 952', 'Ford Fiesta', 2006, '25963874'),
('UYH 985', 'Fiat Palio', 95, '30875962'),
('LKI 865', 'Fiat Siena', 90, '28326986'),
('SDC 965', 'Peugeot 205', 88, '30875962');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla persona
-- 

CREATE TABLE persona (
  NroDni varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL,
  Apellido varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  Nombre varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  fechaNac date NOT NULL default 0000-00-00,
  Telefono varchar(20) character set utf8 collate utf8_unicode_ci NOT NULL,
  Domicilio varchar(200) character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (NroDni)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla persona
-- 

INSERT INTO persona (NroDni, Apellido, Nombre, fechaNac, Telefono, Domicilio) VALUES 
('28326986', 'Moya', 'Manuel', '1981-12-03', '299-9632587', 'Linares 44 piso 2 dpto 5'),
('25963874', 'Farias', 'Marta', '1975-06-21', '299-1559354', 'Roca 568'),
('30875962', 'Lopez', 'Eduardo', '1983-10-03', '299-6587741', 'Santa Fe 98'),
('22985265', 'Ramirez', 'Claudia', '1971-05-16', '299-9854155', 'Sarmiento 55');


ALTER TABLE auto ADD KEY idTipoVehiculo (DniDuenio);

ALTER TABLE auto
ADD CONSTRAINT auto_ibfk_1 FOREIGN KEY (DniDuenio) REFERENCES persona (NroDni);

----dsndsbudbsubdsiubdsuonbicusbuincbcd-
CREATE TABLE auto (
  Patente varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL,
  Marca varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  Modelo int(11) NOT NULL,
  DniDuenio varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY (Patente)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE persona (
  NroDni varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL,
  Apellido varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  Nombre varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  fechaNac date default '0000-00-00',
  Telefono varchar(20) character set utf8 collate utf8_unicode_ci NOT NULL,
  Domicilio varchar(200) character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY (NroDni)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO persona (NroDni, Apellido, Nombre, fechaNac, Telefono, Domicilio) VALUES
('28326986', 'Moya', 'Manuel', '1981-12-03', '299-9632587', 'Linares 44 piso 2 dpto 5'),
('25963874', 'Farias', 'Marta', '1975-06-21', '299-1559354', 'Roca 568'),
('30875962', 'Lopez', 'Eduardo', '1983-10-03', '299-6587741', 'Santa Fe 98'),
('22985265', 'Ramirez', 'Claudia', '1971-05-16', '299-9854155', 'Sarmiento 55'),
('31245896', 'Gonzalez', 'Lucia', '1990-07-22', '299-4125874', 'Mitre 874'),
('29587412', 'Perez', 'Jorge', '1985-11-09', '299-8856321', 'Italia 102'),
('30457896', 'Fernandez', 'Laura', '1992-04-13', '299-9632547', 'Belgrano 1200'),
('27896541', 'Ruiz', 'Carlos', '1978-09-25', '299-4256987', 'Brown 745'),
('32458796', 'Suarez', 'Andrea', '1995-01-19', '299-7854123', 'Olascoaga 150'),
('30125478', 'Diaz', 'Juan', '1987-03-05', '299-4785963', 'Alberdi 68'),
('31547895', 'Cabrera', 'Elena', '1991-10-11', '299-3569874', 'Corrientes 430'),
('28965412', 'Martinez', 'Pablo', '1980-08-03', '299-4785123', 'Neuquén 580'),
('32589647', 'Moreno', 'Rosa', '1994-06-29', '299-6587412', 'San Martín 250'),
('30987456', 'Rojas', 'Sergio', '1989-02-14', '299-3569741', 'Bahía Blanca 777'),
('27658941', 'Campos', 'Diego', '1976-12-20', '299-7896541', 'Jujuy 84'),
('29874563', 'Luna', 'Cecilia', '1986-05-08', '299-8745632', 'Catamarca 412'),
('32214589', 'Dominguez', 'Mario', '1993-11-27', '299-3258741', 'Misiones 120'),
('33125478', 'Paz', 'Victoria', '1997-09-09', '299-8754126', 'Formosa 910'),
('31854769', 'Correa', 'Esteban', '1992-01-03', '299-5478963', 'Córdoba 332'),
('32987412', 'Silva', 'Natalia', '1998-04-22', '299-6987452', 'Chubut 221');

INSERT INTO auto (Patente, Marca, Modelo, DniDuenio) VALUES
('ADC 152', 'Fiat Uno', 1998, '28326986'),
('POL 968', 'Renault 12', 1977, '28326986'),
('KJU 952', 'Ford Fiesta', 2006, '25963874'),
('UYH 985', 'Fiat Palio', 1995, '30875962'),
('LKI 865', 'Fiat Siena', 1990, '28326986'),
('SDC 965', 'Peugeot 205', 1988, '30875962'),
('TRF 741', 'Volkswagen Golf', 2010, '31245896'),
('DFR 852', 'Chevrolet Corsa', 2008, '29587412'),
('FGH 369', 'Toyota Corolla', 2015, '30457896'),
('GJK 741', 'Renault Clio', 2004, '27896541'),
('HLM 963', 'Peugeot 207', 2012, '32458796'),
('JKL 357', 'Citroen C3', 2018, '30125478'),
('LMN 258', 'Honda Civic', 2017, '31547895'),
('NPO 753', 'Volkswagen Gol', 2009, '28965412'),
('OPQ 951', 'Ford Focus', 2014, '32589647'),
('QRS 654', 'Chevrolet Onix', 2019, '30987456'),
('RST 842', 'Nissan March', 2020, '27658941'),
('STU 159', 'Toyota Etios', 2021, '29874563'),
('TUV 357', 'Renault Sandero', 2013, '32214589'),
('UVW 468', 'Fiat Cronos', 2022, '33125478');

ALTER TABLE auto ADD KEY idTipoVehiculo (DniDuenio);

ALTER TABLE auto
ADD CONSTRAINT auto_ibfk_1 FOREIGN KEY (DniDuenio) REFERENCES persona (NroDni);
