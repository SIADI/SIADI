<?php
//CONEXIÓN A LA BASE DE DATOS
//Datos de conexión
$zz=$_POST["no_pedido"];

$hostname_db = "localhost";
$database_db = "siadi";
$username_db = "root";
$password_db = "";

// Creación del Objeto y entregando los datos a los atributos
$z = new mysqli($hostname_db, $username_db, $password_db,$database_db);
$sql = "select * from pedidos where no_pedido='$zz'";
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

<form name="form1" method="post" action="2actualizar_pedidos.php?tipo=registrar">
  <p>Formulario de Actualizaci&oacute;n  </p>
  <table width="200" border="1">
   
      <td>Numero Pedido: </td>
      <td><input type="text" name="no_pedido" id="no_pedido" value="<?php echo $res['no_pedido'];?>"></td>
    </tr>
    <tr>
      <td><label for="">Fecha Pedido: </label></td>
      <td><input type="text" name="fecha_pedido" id="fecha_pedido" value="<?php echo $res['fecha_pedido'];?>"></td>
    </tr>
    
    <tr>
      <td><label for="id_cliente">Direccion Proveedor: </label></td>
      <td><input type="text" name="id_cliente" id="id_cliente" value="<?php echo $res['id_cliente'];  ?>" ></td>
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
<p><a href="menu.html">Volver menu principal</a></p>

