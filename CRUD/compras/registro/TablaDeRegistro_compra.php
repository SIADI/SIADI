	<?php
 
$host="localhost";
$usuario="root";
$password="";
$db="siadi";

$conexion = new mysqli($host,$usuario,$password,$db);
$sql = "select * from compras";
$query=$conexion->query($sql);
 

	
	
			
	$tbHtml="";
	
	if($query->num_rows>0){
		
	        echo "<table border='1px'>
             <header>
                <tr>
                  <th>no_compra</th>
                  <th>fecha_compra</th>
                  <th>no_factura_compra</th>
				             
                  </tr>
            </header>";
		while($res=$query->fetch_array())
		{
         echo '<tr>
		<td>'.$res['no_compra'].'</td>
		<td>'.$res['fecha_compra'].'</td>
		<td>'.$res['no_factura_compra'].'</td>
	</tr>
	';
		}
		$tbHtml.= "</table>";
	}
	else
	{
	echo "No hay resultados";
	

}
	//cambiar los datos por productos
?>
	

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
 
<div class="btn-group btn-group-justified">
    <a href="http://localhost/CRUD/compras/actualizar/3actualizar_compra.html" class="btn btn-primary">Actualizar</a>
    <a href="http://localhost/CRUD/compras/borrar/borrar_compra.html" class="btn btn-primary">Borrar</a>
    <a href="http://localhost/CRUD/compras/insertar/insertar_compra.html" class="btn btn-primary">Insertar</a>
  </div>
</div>

</body>
</html>
