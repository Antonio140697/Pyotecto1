<?php
include('bd.php');
$txtusuario=$_POST['txtNomusuario'];
$txtcontra=$_POST['txtcontra'];
session_start();
$_SESSION['txtNomusuario']=$txtusuario;

$conexion=mysqli_connect("localhost","root","","hoteldiegob_bd");
$consulta="SELECT*FROM  clientesreg where txtNomusuario='$txtusuario' and txtcontra='$txtcontra'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:login.php");

}else{
    ?>
    <?php
    include("index.php");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);