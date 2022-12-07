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
							<th>Gol F</th>
							<th>Gol C</th>
							<th>Juegos J</th>
							<th>Juegos G</th>
							<th>Juegos E</th>
							<th>Juegos P</th>
							<th>Estado</th>
							<th>Cate</th>
							<th>********</th>
						</tr>
					</thead>
					<tbody class="p">
						<?php
						$query = "SELECT equipo.*, (categoria.nombre_c) as cate from equipo, categoria WHERE equipo.cate=categoria.idc";
						$resultcrud = mysqli_query($conexion, $query);
						while($row = mysqli_fetch_array($resultcrud)) {?>
						<tr>
							<td><?php echo $row['nombre_e']?></td>
							<td><?php echo $row['gol_f']?></td>
							<td><?php echo $row['gol_c']?></td>
                            <td><?php echo $row['jj']?></td>
                            <td><?php echo $row['jg']?></td>
							<td><?php echo $row['je']?></td>
							<td><?php echo $row['jp']?></td>
							<td><?php echo $row['inscrito_e']?></td>
							<td><?php echo $row['cate']?></td>
							<td>
								<a href="edite.php?ide=<?php echo $row['ide']?>" class="btn btn-secondary">
								<i class="fa-solid fa-pencil"></i>
									
								<a href="deletee.php?ide=<?php echo $row['ide']?>" class="btn btn-danger">
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
					Nuevo Equipo
				</h1>
				<br>
				<br>
                <form action="savee.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombre_e" class="form-control" placeholder="Nombre" autofocus>
                    </div>
					<br>
					<br>
					<div class="form-group">
                        <input type="text" name="inscrito_e" class="form-control" placeholder="Estado" autofocus>
                    </div>
					<br>
					<div class="form-group">
                        <input type="text" name="cate" class="form-control" placeholder="Categoria" autofocus>
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