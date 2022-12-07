<?php
include("db.php");
    if(isset($_POST['save'])){
        $nombre_a=$_POST['nombre_a'];
        $ap_paterno_a=$_POST['ap_paterno_a'];
        $ap_materno_a=$_POST['ap_materno_a'];
        $tele_a=$_POST['tele_a'];
        $email_a=$_POST['email_a'];
        $naci_a=$_POST['naci_a'];
        $inscrito_a=$_POST['inscrito_a'];

        $query = "INSERT INTO arbitro(nombre_a, ap_paterno_a, ap_materno_a, tele_a, email_a, naci_a, inscrito_a) VALUES ('$nombre_a', '$ap_paterno_a', '$ap_materno_a', '$tele_a', '$email_a', '$naci_a', '$inscrito_a')";
        $result = mysqli_query($conexion, $query);
        if(!$result){
            die("Query Failed");
        }
    $_SESSION['message']='';
    $_SESSION['message_type']='success';


    header("location: ultimo2.php");

    }
?>