<?php
//CONEXIÓN A LA BASE DE DATOS
//Datos de conexión
$zz=$_POST["no_fatura"];

$hostname_db = "localhost";
$database_db = "siadi";
$username_db = "root";
$password_db = "";

// Creación del Objeto y entregando los datos a los atributos
$z = new mysqli($hostname_db, $username_db, $password_db,$database_db);
$sql = "select * from factura where no_fatura='$zz'";
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
   
      <td>Numero Factura: </td>
      <td><input type="text" name="no_fatura" id="no_fatura" value="<?php echo $res['no_fatura'];?>"></td>
    </tr>
    <tr>
      <td><label for="">Fecha Factura: </label></td>
      <td><input type="text" name="fecha_factura" id="fecha_factura" value="<?php echo $res['fecha_factura'];?>"></td>
    </tr>
    
    <tr>
      <td><label for="id_cliente">ID Cliente: </label></td>
      <td><input type="text" name="id_cliente" id="id_cliente" value="<?php echo $res['id_cliente'];  ?>" ></td>
    </tr>
	
    <td>Cantidad Producto: </td>
      <td><input type="text" name="cant_producto" id="cant_producto" value="<?php echo $res['cant_producto'];  ?>"></td>
    </tr>
	
	<td>Valor Unitario Producto: </td>
      <td><input type="text" name="vlr-uni-producto" id="vlr-uni-producto" value="<?php echo $res['vlr-uni-producto'];  ?>"></td>
    </tr>
	<td>Valor Total Producto: </td>
      <td><input type="text" name="vlr-total-producto" id="vlr-total-producto" value="<?php echo $res['vlr-total-producto'];  ?>"></td>
    </tr>

	
	<td>Iva Producto: </td>
      <td><input type="text" name="iva- producto" id="iva- producto" value="<?php echo $res['iva- producto']; } }  ?>"></td>
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

