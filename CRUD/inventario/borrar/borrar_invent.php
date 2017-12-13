<?php
// Recibe los datos enviados desde html
$a=$_POST["cantidad_inc_producto"];


echo $a."<br>";

//CONEXIÓN A LA BASE DE DATOS
//Datos de conexión
$hostname_db = "localhost";
$database_db = "siadi";
$username_db = "root";
$password_db = "";
// Creación del Objeto y entregando los datos a los atributos
// Se crea el objeto a de la clase mysql
$z = new mysqli($hostname_db, $username_db, $password_db,$database_db);
// Se verifica si hay algún erro en la conexion

if ($z->connect_errno) {
    printf("Fallo en la conexion a la base de datos: %s\n", $a->connect_error);
    exit();
}
// Consulta en SQL
$query = "delete from producto where cantidad_inc_producto='$a'";
$z->query($query);

echo "Registro borrado";

?>
<p><a href="../../../../../Users/SOPORTE/Downloads/crud.html">Volver menu principal</a></p> 