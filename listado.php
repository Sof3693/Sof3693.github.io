<!DOCTYPE html>
<html lang="en">
<head>
  <title>Listado</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>
<body>
<?php
//datos de conexion
$servername = "localhost";
$username = "root";
$password = "";
$database = "bd startreck";


// Create connection
$conn= mysqli_connect($servername, $username, $password, $database);

?>

<table class="table table-striped">
<a href="paginaweb.html" type="button" class="btn btn-primary">VOLVER A LA PAGINA PRINCIPAL</a>
  	
		<thead>
		<tr>
			<th>Usuario</th>
			<th>Nombre</th>
			<th>Email</th>
			<th>Contraseña</th>
			<th>Accion</td>
		</tr>
		</thead>
<?php foreach ($conn->query('SELECT * from usuario') as $fila){ // aca puedes hacer la consulta e iterarla con each. ?> 
<tr>
	<td><?php echo $fila['Usuario'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?></td>
    <td><?php echo $fila['Nombre'] ?></td>
    <td><?php echo $fila['Email'] ?></td>
	 <td><?php echo $fila['Contrasena'] ?></td>
	  <td><a href="eliminar.php?id=<?php echo $fila['id'] ?>" class="btn btn-danger">Eliminar</a>
	 
			
 </tr>
 
<?php
	}
?>
</table>
</body>
</html>