<?php

//CONEXIÓN A LA BASE DE DATOS

//Datos de conexión
$hostname_db = "localhost";
$database_db = "siadi";
$username_db = "root";
$password_db = "";

// Creación del Objeto y entregando los datos a los atributos
// Se crea el objeto a de la clase mysql
$a = new mysqli($hostname_db, $username_db, $password_db,$database_db);

// Se verifica si hay algún erro en la conexion

if ($a->connect_errno) {
    printf("Fallo en la conexion a la base de datos: %s\n", $a->connect_error);
    exit();
}

// Consulta en SQL
$query = "SELECT * FROM producto";

if ($result = $a->query($query)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc())
	{
	//Imprimiendo los datos
	
		printf ("%s (%s)\n", $row["id_producto"], $row["nom_producto"]);
		echo "<br>";
		printf ("%s (%s)\n", $row["cod_producto"], $row["vlr_uni_producto"]);
		echo "<br>";
			
	}

    // Dejar libre la conexión
    $result->free();
}

// cerrar la conexión
$a->close();

?>