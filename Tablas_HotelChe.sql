-- Creada el:       07/22/2020
-- Modificada el:   07/22/2020

--Creación de tablas del Proyecto Final Hotel
--
--
--Creación de Base de Datos
create database hotel_che

--Uso de la Base de Datos Creada
use hotel_che

--Guarda los tipos de costos que existen
Create table costos(
costos_id int not null primary key identity(1,1),
costos float not null
)

-- Guarda el nombre del tipo de habitaciones
create table tipo_habitaciones(
tipo_id int not null primary key identity(1,1),
tipo_nombre varchar(255) not null,
)

-- Guarda el numero de habitacion y que tipo de habitacion es
create table numero(
numero_id int not null primary key identity(1,1),
numero_num int not null,
tipo_num int not null foreign key references tipo_habitaciones(tipo_id)
)

-- Guarda las habitaciones disponibles, el tipo de habitacion y el numero de habitacion
-- La variable habitacion_disponibilidad guarda cuantas habitaciones existen de ese tipo
create table habitaciones(
habitaciones_id int not null primary key identity(1,1),
habitaciones_tipo int not null foreign key references tipo_habitaciones(tipo_id),
habitaciones_numero int not null foreign key references numero(numero_id),
habitaciones_capacidad int not null,
habitaciones_costo int not null foreign key references costos(costos_id),
habitaciones_disponibilidad int not null
)

-- Guarda los porcentajes de promociones existentes
-- Si no hay promocion, se le asignará 0 en automático a la reservación
Create table promociones(
promociones_id int not null primary key identity(1,1),
promociones_porcentaje int not null
)

-- Guarda datos del usuario y el tipo de usuario que es
create table usuarios(
usuarios_id int not null primary key identity(1,1),
usuarios_nombres varchar(255) not null,
usuarios_apellidos varchar(255) not null,
usuarios_num_empleado int not null,
usuarios_telefono int not null,
usuarios_correo varchar(255) not null,
usuarios_contra varchar(255) not null,
usuarios_tipo int not null
)

-- Guarda tipo de tarjetas
create table tarjetas_tipo(
tarjetas_tipo_id int not null primary key identity(1,1),
tarjetas_tipo_nombre varchar(255) not null
)

-- Guarda datos de tarjetas y los usuarios a los que están asignados estas tarjetas
-- La variable de tarjetas_usuario guarda a quien le pertenece esa tarjeta
-- La variable tarjetas_year guarda el año de expiracion
create table tarjetas(
tarjetas_id int not null primary key identity(1,1),
tarjetas_tipo int foreign key references tarjetas_tipo(tarjetas_tipo_id),
tarjetas_numero int not null,
tarjetas_mes int not null,
tarjetas_year int not null,
tarjetas_ccv int not null,
tarjetas_usuario int not null foreign key references usuarios(usuarios_id)
)

-- Guarda las reservaciones ya existentes y pagadas
-- La variable reservacion_habitacion guarda solo el numero de la habitacion
-- La variable reservacion_habitacion_tipo guarda el tipo de habitacion que es
Create table reservacion(
reservacion_id int not null primary key identity (1,1),
reservacion_numero int not null,
reservacion_usuario int not null foreign key references usuarios(usuarios_id),
reservacion_habitacion int not null foreign key references numero(numero_id),
reservacion_habitacion_tipo int not null foreign key references habitaciones(habitaciones_id),
reservacion_ingreso date not null,
reservacion_salida date not null,
reservacion_subtotal money not null,
reservacion_promocion int not null foreign key references promociones(promociones_id),
reservacion_total money not null
)
