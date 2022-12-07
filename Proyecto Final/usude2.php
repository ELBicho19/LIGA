<?php include("db.php"); ?>
<?php include("include/header.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-3">
        <br>
                <br>
                <br>
                <br>
        <h1 class="h2">AHORA REGISTRA A TU EQUIPO</h1>
<br>
<br>
            <P class="p1 color3">Escriba por favor el nombre de su equipo, tome a consideración que la categoría se inscribe usando la siguiente guía </P>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-4">
            <table>
    <thead>
    <thead>
            <br>
            <br>
						<tr class="h5">
				
							<th>Masculina  </th>
							<th>Femenina  </th>
							<th>Infantil</th>
						</tr>
                      
    </thead>
    <tbody class="p">
        <tr>
                            <td>100000</td>
                            <td>100001</td>
                            <td>100002</td>
                        </tbody>
                        </tr>
                        </table>
            </div>
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
            <div class="card card-body hcard5">
				<h1 class="h5">
					Nuevo Equipo
				</h1>
				<br>
				<br>
                <form action="savee2.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombre_e" class="form-control" placeholder="Nombre" autofocus>
                    </div>
                  	<br>
					<div class="form-group">
                        <input type="text" name="cate" class="form-control" placeholder="Categoria" autofocus>
                    </div>
					<br>
					
                    <input type="submit" class="btn btn-success btn-block" name="save" value="Guardar">
            </div>
            </div>
        </div>
    </div>
			
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/brands.min.css" integrity="sha512-OivR4OdSsE1onDm/i3J3Hpsm5GmOVvr9r49K3jJ0dnsxVzZgaOJ5MfxEAxCyGrzWozL9uJGKz6un3A7L+redIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/v4-shims.min.js" integrity="sha512-jV9c9TgJKs4VzfA+DtPAXJqOMs0gsEmfhKEgtT4TqE7SPjwXiDmtDKsh1FXIPX/gDFcckXaVB7xNKD+LIS5GmA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<?php include("include/footer.php");?>