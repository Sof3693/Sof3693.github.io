<?php

//DATOS DE CONEXION
$servername="localhost";
$username="root";
$password="";
$database="bd startreck";


//id que viene del listado. campo indice de la tabla para identificar al registro antes de borrar
$id=$_GET['id'];

//conexion
$conn=mysqli_connect($servername,$username,$password,$database);
$sql="DELETE FROM `usuario` WHERE id='$id'";

$query=mysqli_query($conn,$sql);


    if($query){
        Header("Location: listado.php");
    }
	else{echo"No se pudo eliminar";}
	// aqui cerrar conexion
	
?>