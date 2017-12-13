<?php
//CONEXIÓN A LA BASE DE DATOS
//Datos de conexión
$zz=$_POST["id_proveedor"];

$hostname_db = "localhost";
$database_db = "siadi";
$username_db = "root";
$password_db = "";

// Creación del Objeto y entregando los datos a los atributos
$z = new mysqli($hostname_db, $username_db, $password_db,$database_db);
$sql = "select * from proveedores where id_proveedor='$zz'";
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
   
      <td>ID Proveedor: </td>
      <td><input type="text" name="id_proveedor" id="id_proveedor" value="<?php echo $res['id_proveedor'];?>"></td>
    </tr>
    <tr>
      <td><label for="">Nombre Proveedor: </label></td>
      <td><input type="text" name="nom_proveedor" id="nom_proveedor" value="<?php echo $res['nom_proveedor'];?>"></td>
    </tr>
    
    <tr>
      <td><label for="dir_proveedor">Direccion Proveedor: </label></td>
      <td><input type="text" name="dir_proveedor" id="dir_proveedor" value="<?php echo $res['dir_proveedor'];  ?>" ></td>
    </tr>
	
    <td>Celular Proveedor: </td>
      <td><input type="text" name="clu_proveedor" id="clu_proveedor" value="<?php echo $res['clu_proveedor'];  ?>"></td>
    </tr>
	
	<td>Telefono Proveedor: </td>
      <td><input type="text" name="tel_provedor" id="tel_provedor" value="<?php echo $res['tel_provedor']; } }  ?>"></td>
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

