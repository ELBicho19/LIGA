<?php
include("db.php");
if(isset($_GET['ide'])){
    $ide=$_GET['ide'];
    $query="SELECT*FROM equipo WHERE ide=$ide";
    $result=mysqli_query($conexion, $query);
    if(mysqli_num_rows($result)==1){
        $row=  mysqli_fetch_array($result);
        $jj=$row['jj'];
        $jg=$row['jg'];
        $je=$row['je'];
        $jp=$row['jp'];
        $gol_f=$row['gol_f'];
        $gol_c=$row['gol_c'];
        $inscrito_e=$row['inscrito_e'];

       
}}
if(isset($_POST['update'])){
    $gol_f=$_POST['gol_f'];
    $gol_c=$_POST['gol_c'];
    $jj=$_POST['jj'];
    $jg=$_POST['jg'];
    $je=$_POST['je'];
    $jp=$_POST['jp'];
    $inscrito_e=$_POST['inscrito_e'];

    
    $query="UPDATE equipo set gol_f='$gol_f', gol_c='$gol_c', jj='$jj', jg='$jg', je='$je', jp='$jp', inscrito_e='$inscrito_e' WHERE ide=$ide";
   

    mysqli_query($conexion, $query);
    $_SESSION['message']='Actualización completa';
    $_SESSION['message_type']='warning';
    header("Location: equipo.php");
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
                Estado de Inscripción y tendencia

            </h1>
        <div class="card card-body hcard img2">
                <form action="edite.php?ide=<?php echo $_GET['ide']; ?>" method="POST">
                    <div class="form-group">
                        <p> Goles a favor</p>
                        <input type="text" name="gol_f" value="<?php echo $gol_f; ?>" class="form-control" placeholder="Update gol_f">
                    </div>
                    <div class="form-group">
                        <p> Goles en contra</p>
                        <input type="text" name="gol_c" rows="2" class="form-control" placeholder="Update gol_c" value="<?php echo $gol_c; ?>">
                    </div>
                    <div class="form-group">
                        <p> J Jugadas</p>
                        <input type="text" name="jj" rows="3" class="form-control" placeholder="Update jj" value="<?php echo $jj; ?>">
                    </div>
                    <div class="form-group">
                        <p> Victorias</p>
                        <input type="text" name="jg" rows="4" class="form-control" placeholder="Update jg" value="<?php echo $jg; ?>">
                    </div>
                    <div class="form-group">
                        <p> Empates</p>
                        <input type="text" name="je" rows="5" class="form-control" placeholder="Update je" value="<?php echo $je; ?>">
                    </div>
                    <div class="form-group">
                        <p> Derrotas</p>
                        <input type="text" name="jp" rows="6" class="form-control" placeholder="Update jp" value="<?php echo $jp; ?>">
                    </div>
                    <div class="form-group">
                        <p> Inscrito</p>
                        <input type="text" name="inscrito_e" rows="7" class="form-control" placeholder="Update inscrito_e" value="<?php echo $inscrito_e; ?>">
                    </div>
                    <input type="submit" class="btn btn-dark btn-block" name="update" value="Actualizar">
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include("include/footer.php"); ?>