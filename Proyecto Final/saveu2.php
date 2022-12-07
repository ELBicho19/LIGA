<?php
include("db.php");
    if(isset($_POST['save'])){
        $usu=$_POST['usu'];
        $contra=$_POST['contra'];
        $cargo=$_POST['cargo'];
       



        $query = "INSERT INTO usuario(usu, contra, cargo) VALUES ('$usu', '$contra', '987654322')";
        $result = mysqli_query($conexion, $query);
        if(!$result){
            die("Query Failed");
        }
    $_SESSION['message']='Usuario nuevo registrado con éxito';
    $_SESSION['message_type']='success';


    header("location: usude2.php");

    }
?>