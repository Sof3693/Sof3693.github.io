<?php
//datos de conexion
$servername = "localhost";
$username = "root";
$password = "";
$database = "bd startreck";


// Create connection
$conn= mysqli_connect($servername, $username, $password, $database);

//CONTROL DE ERROREES
if (mysqli_connect_errno()){
	die("Fallo:" .mysqli_connect_error());}


//datos de array POST

$Usuario=$_POST['Usuario'];
$Nombre=$_POST['Nombre'];
$Email=$_POST['Email'];
$Contrasena=$_POST['Contrasena'];


$sql="INSERT INTO `usuario`(`Usuario`, `Nombre`, `Email`, `Contrasena`) VALUES('$Usuario','$Nombre','$Email','$Contrasena')";

//control de errores
if(mysqli_query($conn,$sql)){
	
?>
<a href="Index.html">volver</a>
<?php
}
else{
	echo "Ocurrio un error".$sql.mysqli_error($conn);
}
//cerrar conexion
mysqli_close($conn);
?>