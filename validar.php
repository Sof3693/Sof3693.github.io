<?php
include('db.php');
$Usuario=$_POST['Usuario'];
$Contrasena=$_POST['Contrasena'];

session_start();
$_SESSION['Usuario']=$Usuario;


// Create connection
$conexion= mysqli_connect($servername, $username, $password, $database);

$consulta="SELECT*FROM usuario where Usuario='$Usuario' and Contrasena='$Contrasena'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:paginaweb.html");

}else{
    ?>
    <?php
    include("Index.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);