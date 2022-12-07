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
							<th>Teléfono</th>
							<th>Correo</th>
                            <th>Edad</th>
							<th>Inscrito</th>
							<th>********</th>
						</tr>
					</thead>
					<tbody class="p">
						<?php
						$query = "SELECT *, (2022-(year(naci_a))) as naci_a FROM arbitro";
						$resultcrud = mysqli_query($conexion, $query);
						while($row = mysqli_fetch_array($resultcrud)) {?>
						<tr>
							<td><?php echo $row['nombre_a']?></td>
							<td><?php echo $row['ap_paterno_a']?></td>
							<td><?php echo $row['ap_materno_a']?></td>
                            <td><?php echo $row['tele_a']?></td>
                            <td><?php echo $row['email_a']?></td>
                            <td><?php echo $row['naci_a']?></td>
							<td><?php echo $row['inscrito_a']?></td>
							<td>
								<a href="edita.php?ida=<?php echo $row['ida']?>" class="btn btn-secondary">
								<i class="fa-solid fa-pencil"></i>
									
								<a href="deletea.php?ida=<?php echo $row['ida']?>" class="btn btn-danger">
								<i class="fa-solid fa-delete-left"></i>						
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
					Nuevo Silbante
				</h1>
				<br>
				<br>
                <form action="savea.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombre_a" class="form-control" placeholder="Nombre" autofocus>
                    </div>
					<br>
                    <div class="form-group">
                        <input type="text" name="ap_paterno_a" class="form-control" placeholder="A. Paterno" autofocus>
                    </div>
					<br>
					<div class="form-group">
                        <input type="text" name="ap_materno_a" class="form-control" placeholder="A. Materno" autofocus>
                    </div>
					<br>
					<div class="form-group">
                        <input type="text" name="tele_a" class="form-control" placeholder="No. de teléfono" autofocus>
                    </div>
					<br>
					<div class="form-group">
                        <input type="text" name="email_a" class="form-control" placeholder="Correo" autofocus>
                    </div>
					<br>
					<div class="form-group">
                        <input type="date" name="naci_a" values="" min="1960-01-01" max="2000-01-01" class="form-control" placeholder="A. Materno" autofocus>
                    </div>
					<br>
					<div class="form-group">
                        <input type="text" name="inscrito_a" class="form-control" placeholder="Estado" autofocus>
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