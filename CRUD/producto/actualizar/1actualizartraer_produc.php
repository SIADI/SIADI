<?php
//CONEXIÓN A LA BASE DE DATOS
//Datos de conexión
$zz=$_POST["id_producto"];

$hostname_db = "localhost";
$database_db = "siadi";
$username_db = "root";
$password_db = "";

// Creación del Objeto y entregando los datos a los atributos
$z = new mysqli($hostname_db, $username_db, $password_db,$database_db);
$sql = "select * from producto where id_producto
='$zz'";
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

<form name="form1" method="post" action="2actualizar_produc.php?tipo=registrar">
  <p>Formulario de Actualizaci&oacute;n  </p>
  <table width="200" border="1">
   
      <td>ID Producto: </td>
      <td><input type="text" name="id_producto" id="id_producto" value="<?php echo $res['id_producto'];?>"></td>
    </tr>
    <tr>
      <td><label for="">Nombre Producto: </label></td>
      <td><input type="text" name="nom_producto" id="nom_producto" value="<?php echo $res['nom_producto'];?>"></td>
    </tr>
    
    <td>Codigo Producto: </td>
      <td><input type="text" name="cod_producto" id="cod_producto" value="<?php echo $res['cod_producto'];  ?>"></td>
    </tr>
	
	<td>Valor Unitario Producto: </td>
      <td><input type="text" name="vlr_uni_producto" id="vlr_uni_producto" value="<?php echo $res['vlr_uni_producto']; } }  ?>"></td>
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

