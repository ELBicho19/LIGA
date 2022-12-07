<?php
include("db.php");
if (isset($_GET['ide'])){
    $ide = $_GET['ide'];
    $query="DELETE FROM equipo WHERE ide = $ide";
    $result= mysqli_query($conexion, $query);
    if(!$result){
        die("Falló la eliminación");
    }
    $_SESSION['message'] = "Equipo eliminado correctamente";
    $_SESSION['message_type'] = "danger";
    header("Location: equipo.php");

}
?>