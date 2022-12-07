<?php
include("db.php");
    if(isset($_POST['save'])){
        $nombre_a_a=$_POST['nombre_a_a'];
        $ap_paterno_a_a=$_POST['ap_paterno_a_a'];
        $idu_a_a=$_POST['idu_a_a'];
       



        $query = "INSERT INTO aministrador(nombre_a_a, ap_paterno_a_a, idu_a_a) VALUES ('$nombre_a_a', '$ap_paterno_a_a', '$idu_a_a')";
        $result = mysqli_query($conexion, $query);
        if(!$result){
            die("Query Failed");
        }
    $_SESSION['message']='Usuario nuevo registrado con éxito';
    $_SESSION['message_type']='success';


    header("location: gestion.php");

    }
?>