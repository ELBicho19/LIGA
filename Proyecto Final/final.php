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
        <div class="col-md-6 offset-3">
        <br>
                <br>
                <br>
                <br>
        <h1 class="h2">FELICIDADES!!!</h1>
<br>
<br>
            <P class="p1 color3">Gracias por formar parte de esta gran familia, ya puede iniciar sesion, sus datos que ocupará constantemente en el sistema son: </P>
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
							<th>Usuario de acceso</th>
							<th>Contraseña</th>
                            <th>Código directivo</th>
                           
						</tr>
					</thead>
					<tbody class="p">
						<?php
						$query = "SELECT usuario.*, directivo.* FROM usuario, directivo where directivo.idu_d=usuario.idu  order by usuario.idu desc limit 1";
                        $resultcrud = mysqli_query($conexion, $query);
						while($row = mysqli_fetch_array($resultcrud)) {?>
						<tr>
							<td><?php echo $row['idu']?></td>
							<td><?php echo $row['usu']?></td>
                            <td><?php echo $row['contra']?></td>
                            <td><?php echo $row['idd']?></td>
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
	
            
			
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/brands.min.css" integrity="sha512-OivR4OdSsE1onDm/i3J3Hpsm5GmOVvr9r49K3jJ0dnsxVzZgaOJ5MfxEAxCyGrzWozL9uJGKz6un3A7L+redIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/v4-shims.min.js" integrity="sha512-jV9c9TgJKs4VzfA+DtPAXJqOMs0gsEmfhKEgtT4TqE7SPjwXiDmtDKsh1FXIPX/gDFcckXaVB7xNKD+LIS5GmA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<?php include("include/footer.php");?>