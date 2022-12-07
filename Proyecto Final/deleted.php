<?php
include("db.php");
if (isset($_GET['idd'])){
    $idd = $_GET['idd'];
    $query="DELETE FROM directivo WHERE idd = $idd";
    $result= mysqli_query($conexion, $query);
    if(!$result){
        die("Falló la eliminación");
    }
    $_SESSION['message'] = "Directivo eliminado correctamente";
    $_SESSION['message_type'] = "danger";
    header("Location: Dt.php");

}
?>