<?php include("db.php"); ?>
<?php include("include/header.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-3">
        <br>
                <br>
                <br>
                <br>
        <h1 class="h2">PRESONALIZA TU ACCESO</h1>
<br>
<br>
            <P class="p1 color3">Escriba por favor el nombre de usuario con el que quiera accesar y una contraseña segura</P>
        </div>
    </div>
<br>

	<div class="container">
        <div class="row">
            <div class="col-md-4 offset-4">
				<?php if(isset($_SESSION['message'])){ ?>

				<div class="alert alert-dark d-flex align-items-center" role="alert">
					<?= $_SESSION['message']?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	
					</button>
				</div>

				<?php session_unset(); }?>
                <br>
        

            		<div class="card card-body hcard">
						<h1 class="h5">
						Nuevo Usuario
						</h1>
					<br>
					<br>
                <form action="saveu2.php" method="POST">
                    	<div class="form-group">
                   	    	<input type="text" name="usu" class="form-control" placeholder="Nombre de usuario" autofocus>
                    	</div>
					<br>
                    <div class="form-group">
                        <input type="text" name="contra" class="form-control" placeholder="Contraseña" autofocus>
                    </div>
					<br>
                    <input type="submit" class="btn btn-success btn-block" name="save" value="Guardar">
                </form>
            </div>
        </div>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/brands.min.css" integrity="sha512-OivR4OdSsE1onDm/i3J3Hpsm5GmOVvr9r49K3jJ0dnsxVzZgaOJ5MfxEAxCyGrzWozL9uJGKz6un3A7L+redIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/v4-shims.min.js" integrity="sha512-jV9c9TgJKs4VzfA+DtPAXJqOMs0gsEmfhKEgtT4TqE7SPjwXiDmtDKsh1FXIPX/gDFcckXaVB7xNKD+LIS5GmA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<?php include("include/footer.php");?>