	<?php
 
$host="localhost";
$usuario="root";
$password="";
$db="siadi";

$conexion = new mysqli($host,$usuario,$password,$db);
$sql = "select * from proveedores";
$query=$conexion->query($sql);
 

	
	
			
	$tbHtml="";
	
	if($query->num_rows>0){
		
	        echo "<table border='1px'>
             <header>
                <tr>
                  <th>id_proveedor</th>
                  <th>nom_proveedor</th>
                  <th>dir_proveedor</th>
				  <th>clu_proveedor</th>
                  <th>tel_provedor</th>
              
                  </tr>
            </header>";
		while($res=$query->fetch_array())
		{
         echo '<tr>
		<td>'.$res['id_proveedor'].'</td>
		<td>'.$res['nom_proveedor'].'</td>
		<td>'.$res['dir_proveedor'].'</td>
		<td>'.$res['clu_proveedor'].'</td>
		<td>'.$res['tel_provedor'].'</td>		
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
       <a href="http://localhost/CRUD/proveedores/borrar/borrar_provee.html" class="btn btn-primary">Borrar</a>
    <a href="http://localhost/CRUD/proveedores/insertar/insertar_provee.html" class="btn btn-primary">Insertar</a>
    <a href="http://localhost/CRUD/proveedores/actualizar/3actualizar_provee.html" class="btn btn-primary">Actualizar</a>
  </div>
</div>

</body>
</html>

