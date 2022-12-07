<?php
include("db.php");
    if(isset($_POST['save'])){
        $nombre_j=$_POST['nombre_j'];
        $ap_paterno_j=$_POST['ap_paterno_j'];
        $ap_materno_j=$_POST['ap_materno_j'];
        $naci_j=$_POST['naci_j'];
        $inscrito_j=$_POST['inscrito_j'];
        $ide_j=$_POST['ide_j'];
        $idd_j=$_POST['idd_j'];



        $query = "INSERT INTO jugador(nombre_j, ap_paterno_j, ap_materno_j, naci_j, inscrito_j, ide_j, idd_j) VALUES ('$nombre_j', '$ap_paterno_j', '$ap_materno_j', '$naci_j', '$inscrito_j', '$ide_j', '$idd_j')";
        $result = mysqli_query($conexion, $query);
        if(!$result){
            die("Query Failed");
        }
    $_SESSION['message']='Jugador nuevo registrado con éxito';
    $_SESSION['message_type']='success';


    header("location: Jugador.php");

    }
?>