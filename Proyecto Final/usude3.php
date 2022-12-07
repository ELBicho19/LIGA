<?php include("db.php");?>
<?php include("include/header.php");?>
	<!-- termina barra -->
	<div class="container">
		<div class="row">
		<br>
		<br>
		
		</div>
        <div class="container">
    <div class="row">
        <div class="col-md-6 offset-3">
        <br>
                <br>
                <br>
                <br>
        <h1 class="h2">Ya casi termina!!!</h1>
<br>
<br>
            <P class="p1 color3">Escriba por favor sus datos apóyandose de sus códigos generados </P>
        </div>
    </div>
	</div>
    <div class="container">
		<div class="row">
			<div class="col-md-10 offset-1">
				<table class="table table-bordered">
					<thead>
						<tr class="h5">
							<br>
							<br>
							<br>
							<br>
							<th>Código de usuario</th>
                           
						</tr>
					</thead>
					<tbody class="p">
						<?php
						$query = "SELECT * FROM usuario  order by idu desc limit 1";
                        $resultcrud = mysqli_query($conexion, $query);
						while($row = mysqli_fetch_array($resultcrud)) {?>
						<tr>
							<td><?php echo $row['idu']?></td>
						</tr>
                        
						<?php }
						?> 
                       
					</tbody>

				</table>
                <?php
                        $query2 = "SELECT * FROM equipo order by ide desc limit 1";
                        $resultcrud2 = mysqli_query($conexion, $query2);
                        while($row = mysqli_fetch_array($resultcrud2)) {?>
						<h5 class="color">Código de equipo :</h5>
							<p class="color"><?php echo $row['ide']?></p>
						
                        <?php }?>
			</div>
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
					Nuevo Dt
				</h1>
				<br>
				<br>
                <form action="saved2.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombre_d" class="form-control" placeholder="Nombre" autofocus>
                    </div>
					<br>
                    <div class="form-group">
                        <input type="text" name="ap_paterno_d" class="form-control" placeholder="A. Paterno" autofocus>
                    </div>
					<br>
					<div class="form-group">
                        <input type="text" name="ap_materno_d" class="form-control" placeholder="A. Materno" autofocus>
                    </div>
					<br>
					<div class="form-group">
                        <input type="text" name="tele_d" class="form-control" placeholder="No. de teléfono" autofocus>
                    </div>
					<br>
					<div class="form-group">
                        <input type="text" name="email_d" class="form-control" placeholder="Correo" autofocus>
                    </div>
					<br>
					<div class="form-group">
                        <input type="date" name="naci_d" values="" min="1960-01-01" max="2000-01-01" class="form-control" placeholder="A. Materno" autofocus>
                    </div>
					<br>
					<div class="form-group">
                        <input type="text" name="idu_d" class="form-control" placeholder="Código Usuario" autofocus>
                    </div>
					<br>
					<div class="form-group">
                        <input type="text" name="ide_d" class="form-control" placeholder="Código Equipo" autofocus>
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