<?php
// Recibe los datos enviados desde html
$a=$_POST["id_proveedor"];
$b=$_POST["nom_proveedor"];
$c=$_POST["dir_proveedor"];
$d=$_POST["clu_proveedor"];
$e=$_POST["tel_provedor"];

//$e=$_POST["FechaNacimiento"];

echo $a."<br>";
echo $b."<br>";
echo $c."<br>";
echo $d."<br>";
echo $e."<br>";


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
$query = "UPDATE `proveedores` set `nom_proveedor`='$b',`dir_proveedor`='$c', `clu_proveedor`='$d', `tel_provedor`='$e'  where id_proveedor='$a'";
$z->query($query);
//echo $z;
echo "Datos de Proveedores actualizado";
?>
<p><a href="menu.html">Volver menu principal</a></p>