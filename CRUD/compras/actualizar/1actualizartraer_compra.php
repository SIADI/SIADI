<?php
//CONEXIÓN A LA BASE DE DATOS
//Datos de conexión
$zz=$_POST["no_compra"];

$hostname_db = "localhost";
$database_db = "siadi";
$username_db = "root";
$password_db = "";

// Creación del Objeto y entregando los datos a los atributos
$z = new mysqli($hostname_db, $username_db, $password_db,$database_db);
$sql = "select * from compras where no_compra='$zz'";
$query=$z->query($sql);

if ($z->connect_errno) {
    printf("Fallo en la conexion a la base de datos: %s\n", $a->connect_error);
    exit();
}
// Consulta en SQL
	if($query->num_rows>0)
	{
		while($res=$query->fetch_array())
		{
			 
?>

<form name="form1" method="post" action="2actualizar_provee.php?tipo=registrar">
  <p>Formulario de Actualizaci&oacute;n  </p>
  <table width="200" border="1">
   
      <td>Numero de Compra: </td>
      <td><input type="text" name="no_compra" id="no_compra" value="<?php echo $res['no_compra'];?>"></td>
    </tr>
    <tr>
      <td><label for="">Fecha de compra: </label></td>
      <td><input type="text" name="fecha_compra" id="fecha_compra" value="<?php echo $res['fecha_compra'];?>"></td>
    </tr>
    
   	<td>Numero Compra Factura: </td>
      <td><input type="text" name="no_factura_compra" id="no_factura_compra" value="<?php echo $res['no_factura_compra']; } }  ?>"></td>
    </tr>
	
    
      <td><input type="submit" name="Guardar" id="Guardar" value="Actualizar"></td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>
    <label for="Nombre"></label>
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
                     
                      
  
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  
</form>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  
<p><a href="http://localhost/CRUD/compras/registro/TablaDeRegistro_compra.php"><button type="button" class="btn btn-primary btn-block">volver a Tabla</button></p></a>
</body>
</html>