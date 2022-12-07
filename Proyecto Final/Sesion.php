<?php include("db.php"); ?>
<?php include("include/header.php"); ?>
	<div class="container col-md-8 offset-4" >
		<div class="row">
			<div class="col-md-6">
			<form action= "validar.php" method="post">
		<h1 class="h2">
			<br>
			<br>
			HOLA DE NUEVO
		</h1>
		<br>
		<br>
		<br>


		<div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" name="usu" placeholder="name@example.com">
  <label for="floatingInput">Nombre Usuario</label>
</div>
<div class="form-floating">
  <input type="password" class="form-control" id="floatingPassword" name="contra" placeholder="Password">
  <label for="floatingPassword">Contraseña</label>
</div>
<br>
<br>
<button type="submit" class="btn btn-success">Ingresar</button>


	</div>
	</div>
<?php include("include/footer.php"); ?>


