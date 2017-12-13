<?php
// Recibe los datos enviados desde html
$a=$_POST["no_fatura"];
$b=$_POST["fecha_factura"];
$c=$_POST["id_cliente"];
$d=$_POST["id_producto"];
$e=$_POST["cant_producto"];
$f=$_POST["vlr-uni-producto"];
$g=$_POST["vlr-total-producto"];
$h=$_POST["iva- producto"];


echo $a."<br>";
echo $b."<br>";
echo $c."<br>";
echo $d."<br>";
echo $e."<br>";
echo $f."<br>";
echo $g."<br>";
echo $h."<br>";


//CONEXIÓN A LA BASE DE DATOS
//Datos de conexión
$hostname_db = "localhost";
$database_db = "siadi";
$username_db = "root";
$password_db = "";
// Creación del Objeto y entregando los datos a los atributos
// Se crea el objeto a de la clase mysql
$z = new mysqli($hostname_db, $username_db, $password_db, $database_db);
// Se verifica si hay algún erro en la conexion

if ($z->connect_errno) {
    printf("Fallo en la conexion a la base de datos: %s\n", $a->connect_error);
    exit();
}
// Consulta en SQL
$query = "INSERT INTO `factura` (`no_fatura`, `fecha_factura`,`id_cliente`,`id_producto`,`cant_producto`,`vlr-uni-producto`,`vlr-total-producto`,`iva- producto`) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h')";
$z->query($query);

?>