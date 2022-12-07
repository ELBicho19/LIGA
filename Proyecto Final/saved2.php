<?php
include("db.php");
    if(isset($_POST['save'])){
        $nombre_d=$_POST['nombre_d'];
        $ap_paterno_d=$_POST['ap_paterno_d'];
        $ap_materno_d=$_POST['ap_materno_d'];
        $tele_d=$_POST['tele_d'];
        $email_d=$_POST['email_d'];
        $naci_d=$_POST['naci_d'];
        $inscrito_d=$_POST['inscrito_d'];
        $idu_d=$_POST['idu_d'];
        $ide_d=$_POST['ide_d'];

        $query = "INSERT INTO directivo(nombre_d, ap_paterno_d, ap_materno_d, tele_d, email_d, naci_d, inscrito_d, idu_d, ide_d) VALUES ('$nombre_d', '$ap_paterno_d', '$ap_materno_d', '$tele_d', '$email_d', '$naci_d', '$inscrito_d', '$idu_d', '$ide_d')";
        $result = mysqli_query($conexion, $query);
        if(!$result){
            die("Query Failed");
        }
    $_SESSION['message']='Directivo nuevo registrado con éxito';
    $_SESSION['message_type']='success';


    header("location: final.php");

    }
?>