<?php
$usu=$_POST['usu'];
$contra=$_POST['contra'];
$SESSION['usu']=$usu;
session_start();
$conexion=mysqli_connect("localhost", "root","", "liga2");

$consulta="SELECT*FROM usuario where usu='$usu' and contra='$contra'";
$resultado=mysqli_query($conexion, $consulta);
$filas=mysqli_fetch_array($resultado);

if($filas['cargo']==987654321){
    header("location:Admin.html");
}
else{
    if($filas['cargo']==987654322){
        header("location:Directivo.php");
    }
    ?>
    <?php
    include("Sesion.php");
    ?>
    <h1  class="bad danger h5"> Datos incorrectos, intenta nuevamente.   </h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
