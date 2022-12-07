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
			<div class="col-md-4">
				<table class="table table-bordered">
					<thead>
						<tr class="h5">
							<br>
							<br>
							<br>
							<br>
							<th>Nombre</th>
							<th>Apellido P</th>
							<th>Usuario</th>
                            <th>Contraseña</th>
							<th>Rol</th>
						</tr>
					</thead>
					<tbody class="p">
						<?php
						$query = "SELECT usuario.*, (directivo.nombre_d) as nombre_d, (directivo.ap_paterno_d) as ap_paterno_d, (cargo.nombre_c_c) as cargo from usuario, directivo, cargo where directivo.idu_d=usuario.idu and usuario.cargo=cargo.idc_c;";
						$resultcrud = mysqli_query($conexion, $query);
						while($row = mysqli_fetch_array($resultcrud)) {?>
						<tr>
							<td><?php echo $row['nombre_d']?></td>
							<td><?php echo $row['ap_paterno_d']?></td>
							<td><?php echo $row['usu']?></td>
                            <td><?php echo $row['contra']?></td>
							<td><?php echo $row['cargo']?></td>
						</tr>
						<?php }
						?> 
					</tbody>
                    <div class="col-md-5">
				<table class="table table-bordered">
					<thead>
						<tr class="h5">
							<br>
							<br>
							<br>
							<br>
							<th>Nombre</th>
							<th>Apellido P</th>
							<th>Usuario</th>
                            <th>Contraseña</th>
							<th>Rol</th>
						</tr>
					</thead>
					<tbody class="p">
						<?php
						$query = "SELECT usuario.*, (aministrador.nombre_a_a) as nombre_d, (aministrador.ap_paterno_a_a) as ap_paterno_d, (cargo.nombre_c_c) as cargo from usuario, aministrador, cargo where aministrador.idu_a_a=usuario.idu and usuario.cargo=cargo.idc_c;";
						$resultcrud = mysqli_query($conexion, $query);
						while($row = mysqli_fetch_array($resultcrud)) {?>
						<tr>
							<td><?php echo $row['nombre_d']?></td>
							<td><?php echo $row['ap_paterno_d']?></td>
							<td><?php echo $row['usu']?></td>
                            <td><?php echo $row['contra']?></td>
							<td><?php echo $row['cargo']?></td>
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
            <div class="col-md-4">
				<?php if(isset($_SESSION['message'])){ ?>

				<div class="alert alert-dark d-flex align-items-center" role="alert">
					<?= $_SESSION['message']?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	
					</button>
				</div>

				<?php session_unset(); }?>
            		<div class="card card-body hcard5">
						<h1 class="h5">
						Nuevo Usuario
						</h1>
					<br>
					<br>
                <form action="saveu.php" method="POST">
                    	<div class="form-group">
                   	    	<input type="text" name="usu" class="form-control" placeholder="Nombre de usuario" autofocus>
                    	</div>
					<br>
                    <div class="form-group">
                        <input type="text" name="contra" class="form-control" placeholder="Contraseña" autofocus>
                    </div>
					<br>
					<div class="form-group">
                        <input type="text" name="cargo" class="form-control" placeholder="Id de cargo" autofocus>
                    </div>	
                    <input type="submit" class="btn btn-dark btn-block" name="save" value="Guardar">
                </form>
            </div>
        </div>
		<div class="row">
		<div class="col-md-4 offset-6">
<?php if(isset($_SESSION['message'])){ ?>

	<div class="alert alert-dark d-flex align-items-center" role="alert">
		<?= $_SESSION['message']?>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	
</button>
</div>

<?php session_unset(); }?>
            <div class="card card-body hcard5">
				<h1 class="h5">
					Nuevo Admin
				</h1>
				<br>
				<br>
                <form action="savea_a.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombre_a_a" class="form-control" placeholder="Nombre" autofocus>
                    </div>
					<br>
                    <div class="form-group">
                        <input type="text" name="ap_paterno_a_a" class="form-control" placeholder="A. Paterno" autofocus>
                    </div>
					<br>
					<div class="form-group">
                        <input type="text" name="idu_a_a" class="form-control" placeholder="Id_usuario" autofocus>
                    </div>
						
                    <input type="submit" class="btn btn-dark btn-block" name="save" value="Guardar">
            </div>
            </div>
		</div>
    </div>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/brands.min.css" integrity="sha512-OivR4OdSsE1onDm/i3J3Hpsm5GmOVvr9r49K3jJ0dnsxVzZgaOJ5MfxEAxCyGrzWozL9uJGKz6un3A7L+redIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/v4-shims.min.js" integrity="sha512-jV9c9TgJKs4VzfA+DtPAXJqOMs0gsEmfhKEgtT4TqE7SPjwXiDmtDKsh1FXIPX/gDFcckXaVB7xNKD+LIS5GmA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<?php include("include/footer.php");?>