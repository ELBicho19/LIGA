<?php
include("db.php");
if(isset($_GET['idd'])){
    $idd=$_GET['idd'];
    $query="SELECT*FROM directivo WHERE idd=$idd";
    $result=mysqli_query($conexion, $query);
    if(mysqli_num_rows($result)==1){
        $row=  mysqli_fetch_array($result);
        $inscrito_d=$row['inscrito_d'];

}}
if(isset($_POST['update'])){
    $inscrito_d=$_POST['inscrito_d'];
    $query="UPDATE directivo set inscrito_d='$inscrito_d' WHERE idd=$idd";
    mysqli_query($conexion, $query);
    $_SESSION['message']='Actualización completa';
    $_SESSION['message_type']='warning';
    header("Location: Dt.php");
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
                <form action="editd.php?idd=<?php echo $_GET['idd'];?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="inscrito_d" value="<?php echo $inscrito_d; ?>" class="form-control" placeholder="Nombre" autofocus>
                    </div>

                    <input type="submit" class="btn btn-dark btn-block" name="update" value="Actualizar">
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include("include/footer.php"); ?>