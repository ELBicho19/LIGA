<?php include("db.php");?>
<?php include("include/header.php");?>
	<!-- termina barra -->
    <div class="container">
		<div class="row">
		

		<h1 class="h5">
        <br>
		<br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <br>
        <br>
        <br>
        Ingrese los datos del jugador y los códigos obetenidos en su registro previo.
				</h1>
		</div>
	</div>

    
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
            <div class="card card-body hcard5">
				<h1 class="h5">
					Nuevo Jugador
				</h1>
				<br>
				<br>
                <form action="save2.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombre_j" class="form-control" placeholder="Nombre" autofocus>
                    </div>
					<br>
                    <div class="form-group">
                        <input type="text" name="ap_paterno_j" class="form-control" placeholder="A. Paterno" autofocus>
                    </div>
					<br>
					<div class="form-group">
                        <input type="text" name="ap_materno_j" class="form-control" placeholder="A. Materno" autofocus>
                    </div>
					<br>
					<div class="form-group">
                        <input type="date" name="naci_j" values="" min="1960-01-01" max="2010-01-01" class="form-control" placeholder="A. Materno" autofocus>
                    </div>
					<br>
					<div class="form-group">
                        <input type="text" name="ide_j" class="form-control" placeholder="Código Equipo" autofocus>
                    </div>
					<br>
					<div class="form-group">
                        <input type="text" name="idd_j" class="form-control" placeholder="Directivo" autofocus>
                    </div>
					<br>					
                    <input type="submit" class="btn btn-dark btn-block" name="save" value="Guardar">
            </div>
            </div>
        </div>
    </div>
			
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/brands.min.css" integrity="sha512-OivR4OdSsE1onDm/i3J3Hpsm5GmOVvr9r49K3jJ0dnsxVzZgaOJ5MfxEAxCyGrzWozL9uJGKz6un3A7L+redIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/v4-shims.min.js" integrity="sha512-jV9c9TgJKs4VzfA+DtPAXJqOMs0gsEmfhKEgtT4TqE7SPjwXiDmtDKsh1FXIPX/gDFcckXaVB7xNKD+LIS5GmA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<?php include("include/footer.php");?>