<?php
include("db.php");
    if(isset($_POST['save'])){
        $nombre_e=$_POST['nombre_e'];
        $gol_f=$_POST['gol_f'];
        $gol_c=$_POST['gol_c'];
        $jj=$_POST['jj'];
        $jj=$_POST['jg'];
        $jj=$_POST['je'];
        $jj=$_POST['jp'];
        $inscrito_e=$_POST['inscrito_e'];
        $cate=$_POST['cate'];

        $query = "INSERT INTO equipo(nombre_e, gol_f, gol_c, jj, jg, je, jp, inscrito_e, cate) VALUES ('$nombre_e', '$gol_f', '$gol_c', '$jj', '$jg', '$je', '$jp', '$inscrito_e', '$cate')";
        $result = mysqli_query($conexion, $query);
        if(!$result){
            die("Query Failed");
        }
    $_SESSION['message']='Equipo nuevo registrado con éxito';
    $_SESSION['message_type']='success';


    header("location: usude3.php");

    }
?>