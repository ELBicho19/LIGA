<?php
include("db.php");
if (isset($_GET['ida'])){
    $ida = $_GET['ida'];
    $query="DELETE FROM arbitro WHERE ida = $ida";
    $result= mysqli_query($conexion, $query);
    if(!$result){
        die("Falló la eliminación");
    }
    $_SESSION['message'] = "Arbitro eliminado correctamente";
    $_SESSION['message_type'] = "danger";
    header("Location: Arbitro.php");

}
?>