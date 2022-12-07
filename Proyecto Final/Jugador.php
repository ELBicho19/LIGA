<?php include("db.php");?>
<?php include("include/header.php");?>
	<!-- termina barra -->
	<div class="container">
		<div class="row">
		<br>
		<br>
		
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
							<th>Nombre</th>
							<th>Apellido P</th>
							<th>Apellido M</th>
							<th>Edad</th>
							<th>Inscrito</th>
							<th>Equipo</th>
							<th>********</th>
						</tr>
					</thead>
					<tbody class="p">
						<?php
						$query = "SELECT jugador.*, (equipo.nombre_e) as ide_j FROM jugador, equipo WHERE jugador.ide_j=equipo.ide";
						$resultcrud = mysqli_query($conexion, $query);
						while($row = mysqli_fetch_array($resultcrud)) {?>
						<tr>
							<td><?php echo $row['nombre_j']?></td>
							<td><?php echo $row['ap_paterno_j']?></td>
							<td><?php echo $row['ap_materno_j']?></td>
                            <td><?php echo $row['naci_j']?></td>
							<td><?php echo $row['inscrito_j']?></td>
							<td><?php echo $row['ide_j']?></td>
							<td>
								<a href="edit.php?idj=<?php echo $row['idj']?>" class="btn btn-secondary">
								<i class="fa-solid fa-pencil"></i>
									
								<a href="delete.php?idj=<?php echo $row['idj']?>" class="btn btn-danger">
								<i class="fa-solid fa-delete-left"></i>						
							</td>
						</tr>
						<?php }
						?> 
					</tbody>

				</table>
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
					Nuevo Jugador
				</h1>
				<br>
				<br>
                <form action="save.php" method="POST">
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
                        <input type="text" name="inscrito_j" class="form-control" placeholder="Estado" autofocus>
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