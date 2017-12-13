	<?php
 
$host="localhost";
$usuario="root";
$password="";
$db="siadi";

$conexion = new mysqli($host,$usuario,$password,$db);
$sql = "select * from factura";
$query=$conexion->query($sql);
 

	
	
			
	$tbHtml="";
	
	if($query->num_rows>0){
		
	        echo "<table border='1px'>
             <header>
                <tr>
                  <th>no_fatura</th>
                  <th>fecha_factura</th>
                  <th>id_cliente</th>
				  <th>id_producto</th>
                  <th>cant_producto</th>
				  <th>vlr-uni-producto</th>
				  <th>vlr-total-producto</th>
				  <th>iva- producto</th>
              
                  </tr>
            </header>";
		while($res=$query->fetch_array())
		{
         echo '<tr>
		<td>'.$res['no_fatura'].'</td>
		<td>'.$res['fecha_factura'].'</td>
		<td>'.$res['id_cliente'].'</td>
		<td>'.$res['id_producto'].'</td>
		<td>'.$res['cant_producto'].'</td>
		<td>'.$res['vlr-uni-producto'].'</td>
		<td>'.$res['vlr-total-producto'].'</td>
		<td>'.$res['iva- producto'].'</td>
		
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
    <a href="http://localhost/CRUD/factura/actualizar/3actualizar_factura.html" class="btn btn-primary">Actualizar</a>
    <a href="http://localhost/CRUD/factura/borrar/borrar_factura.html" class="btn btn-primary">Borrar</a>
    <a href="http://localhost/CRUD/factura/insertar/insertar_factura.html" class="btn btn-primary">Insertar</a>
  </div>
</div>

</body>
</html>
