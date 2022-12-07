<?php
include("db.php");
if(isset($_GET['idj'])){
    $idj=$_GET['idj'];
    $query="SELECT*FROM jugador WHERE idj=$idj";
    $result=mysqli_query($conexion, $query);
    if(mysqli_num_rows($result)==1){
        $row=  mysqli_fetch_array($result);
        $inscrito_j=$row['inscrito_j'];

}}
if(isset($_POST['update'])){
    $inscrito_j=$_POST['inscrito_j'];
    $query="UPDATE jugador set inscrito_j='$inscrito_j' WHERE idj=$idj";
    mysqli_query($conexion, $query);
    $_SESSION['message']='Actualización completa';
    $_SESSION['message_type']='warning';
    header("Location: Jugador.php");
}
?>

<?php
    include("include/header.php")
?>

<div class="container">
    <div class="row">
        <div class="col-md-4 offset-6">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <h1 class="h5">
                Estado de Inscripción

            </h1>
        <div class="card card-body hcard img2">
                <form action="edit.php?idj=<?php echo $_GET['idj'];?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="inscrito_j" value="<?php echo $inscrito_j; ?>" class="form-control" placeholder="Nombre">
                    </div>

                    <input type="submit" class="btn btn-dark btn-block" name="update" value="Actualizar">
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include("include/footer.php"); ?>