# Prueba Tecnica para MegaMedia
Para el desarrollo se uso Twig como motor plantilla PHP.
Se levanto una DB local para este proyecto, los parametros de conexion de esta se configuran en el archivo "config.php".

### Ejecución del proyecto (En una terminal ubicado en la carpeta raiz del proyecto)
```
php -S localhost:9000
```

### Ejecución de DB

```
CREATE DATABASE megamedia;

USE megamedia;

CREATE TABLE articles_type (
    id int auto_increment primary key,
    name varchar(100) not null comment 'Nombre correspondiente al tipo de articulo',
    description varchar(400) comment 'Descripcion correspondiente del tipo de articulo',
    active bool default 1 comment 'Indicativo si el registro esta activo o no, siendo 1 activo y 0 desactivado'
);

CREATE TABLE articles(
    id int auto_increment primary key,
    name varchar(100) not null comment 'Nombre correspondiente al articulo ingresado por periodista',
    description longtext not null comment 'Descripcion del articulo ingresado por el periodista',
    type int not null comment 'Tipo de articulo, referente a tabla "articles_type"',
    active bool default 1 comment 'Indicativo si el registro esta activo o no, siendo 1 activo y 0 desactivado',
    foreign key (type) references articles_type(id)
);

INSERT INTO articles_type(name, description) VALUES('Reportaje', 'Reportaje normal');
INSERT INTO articles_type(name, description) VALUES('Reportaje narrativo', 'Recuento narrativo de eventos');
INSERT INTO articles_type(name, description) VALUES('Reportaje científico', 'Avances y descubrimientos cientificos mas recientes');

INSERT INTO articles(name, description, type) VALUES('Reportaje en calle', 'Se realizó un reportaje a transeúnte en Av. Irarrazaval.', 1);
INSERT INTO articles(name, description, type) VALUES('IAs', 'Se hace enfasis en la importancia de las IAs hoy en día.', 3);
INSERT INTO articles(name, description, type) VALUES('Seguridad en el vecindario', 'Transeúnte describe la mejoria en el sector desde implementación de camaras.', 2);
```