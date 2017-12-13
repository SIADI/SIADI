<?php
// Recibe los datos enviados desde html
$a=$_POST["fecha_venta"];
$b=$_POST["no_factura"];


//$e=$_POST["FechaNacimiento"];

echo $a."<br>";
echo $b."<br>";



//echo $e."<br>";

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
$query = "UPDATE `ventas` set `no_factura`='$b'  where fecha_venta='$a'";
$z->query($query);
//echo $z;
echo "Datos de Proveedores actualizado";
?>
<p><a href="menu.html">Volver menu principal</a></p>