<?php
include("db.php");
if (isset($_GET['idj'])){
    $idj = $_GET['idj'];
    $query="DELETE FROM jugador WHERE idj = $idj";
    $result= mysqli_query($conexion, $query);
    if(!$result){
        die("Falló la eliminación");
    }
    $_SESSION['message'] = "Jugador eliminado correctamente";
    $_SESSION['message_type'] = "danger";
    header("Location: Jugador.php");

}
?>