<?php
include("db.php");
if(isset($_GET['ida'])){
    $ida=$_GET['ida'];
    $query="SELECT*FROM arbitro WHERE ida=$ida";
    $result=mysqli_query($conexion, $query);
    if(mysqli_num_rows($result)==1){
        $row=  mysqli_fetch_array($result);
        $inscrito_a=$row['inscrito_a'];

}}
if(isset($_POST['update'])){
    $inscrito_a=$_POST['inscrito_a'];
    $query="UPDATE arbitro set inscrito_a='$inscrito_a' WHERE ida=$ida";
    mysqli_query($conexion, $query);
    $_SESSION['message']='Actualización completa';
    $_SESSION['message_type']='warning';
    header("Location: Arbitro.php");
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
                <form action="edita.php?ida=<?php echo $_GET['ida'];?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="inscrito_a" value="<?php echo $inscrito_a; ?>" class="form-control" placeholder="Nombre" autofocus>
                    </div>

                    <input type="submit" class="btn btn-dark btn-block" name="update" value="Actualizar">
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include("include/footer.php"); ?>