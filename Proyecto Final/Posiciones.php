<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/estilos.css">
	<title>Posiciones </title>
</head>

<body class="hcard">
	<!-----------cabecera-->
	<div class="container">
		<div class="row">
				<header class="enca">
					<div class="logos">
						<!----titulo-->
					</div>
					<!---barra-->
					<div class="wrap">
						<!---dentro del encabezado-->
						<nav>
							<!----botones-->
							<a href="Home.html">Inicio</a>
							<!--<a href="mostrar.php">Tabla</a>-->
							<a href="Sesion.php">Iniciar sesión</a>
							<a href="Nosotros.html">Lo que somos</a>
							<a href="Registrate.html">Regístrate</a>
						</nav>
					</div>
				</header>
		</div>
	</div>
	<!-- termina barra -->
	<div class="container">
		<div class="row">
      <h1>	</h1>
      <br>
      <br>
      <br>
      <br>
      <br>
      
			<h1 class="h6">POSICIONES			</h1>
		<br>
    <br>
    <br>
    <br>
		</div>
	</div>
  <?php include("db.php");?>
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
            <br>
            <br>
            <h3>Categoria: Masculina</h3>
						<tr class="h5">
				
							<th>Nombre</th>
							<th>Gol F</th>
							<th>Gol C</th>
							<th>Juegos J</th>
							<th>Juegos G</th>
							<th>Juegos E</th>
							<th>Juegos P</th>
							<th>Estado</th>
							<th>Cate</th>
						</tr>
					</thead>
					<tbody class="p">
						<?php
						$query = "SELECT equipo.*, (categoria.nombre_c) as cate from equipo, categoria  WHERE equipo.cate=categoria.idc and categoria.idc=100000 order by equipo.jg desc limit 100";
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
			<div class="col-md-10 offset-1">
				<table class="table table-bordered">
					<thead>

            <br>
            <br>
            <br>
            <h3>Categoria: Femenina</h3>
						<tr class="h5">
					
							<th>Nombre</th>
							<th>Gol F</th>
							<th>Gol C</th>
							<th>Juegos J</th>
							<th>Juegos G</th>
							<th>Juegos E</th>
							<th>Juegos P</th>
							<th>Estado</th>
							<th>Cate</th>
						</tr>
					</thead>
					<tbody class="p">
						<?php
						$query = "SELECT equipo.*, (categoria.nombre_c) as cate from equipo, categoria WHERE equipo.cate=categoria.idc and categoria.idc=100001 ORDER BY equipo.jg desc limit 100";
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
			<div class="col-md-10 offset-1">
				<table class="table table-bordered">
					<thead>
            <br>
            <br>
          <br>
            <h3>Categoria: Infantil</h3>
						<tr class="h5">
					
							<th>Nombre</th>
							<th>Gol F</th>
							<th>Gol C</th>
							<th>Juegos J</th>
							<th>Juegos G</th>
							<th>Juegos E</th>
							<th>Juegos P</th>
							<th>Estado</th>
							<th>Cate</th>
						</tr>
					</thead>
					<tbody class="p">
						<?php
						$query = "SELECT equipo.*, (categoria.nombre_c) as cate from equipo, categoria WHERE equipo.cate=categoria.idc and categoria.idc=100002 order by equipo.jg desc limit 100";
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
							
						</tr>
						<?php }
						?> 
					</tbody>

				</table>
			</div>
		</div>
	</div>				

  <div class="container">
    <div class="row img2">
      <div class="col-md-6 offset-3 h1">
        <h4>
            <br>
            <br>
            <br>

          Síguenos en nuestras redes!!!
        </h4>
        <a href="https://www.facebook.com/santamariafutbolfc">
          <img src="IMG/FACEBOOK.png" alt="FACEBOOK" height="40" width="40">
        </a>
        <a href="https://www.instagram.com/psg/">
          <img src="IMG/INSTAGRAM.png" alt="INSTAGRAM" height="40" width="40">
        </a>
        <a href="https://www.tiktok.com/@fcbayern">
          <img src="IMG/TIK TOK.jpg" alt="TIK TOK" height="40" width="40">
        </a>
        <a href="https://twitter.com/PSG_espanol">
          <img src="IMG/TWITER.png" alt="TWITER" height="40" width="40">
        </a>
        <a href="https://www.snapchat.com/add/psg">
          <img src="IMG/SNAPCHAT.jpg" alt="SNAPCHAT" height="40" width="40">
        </a>
      </div>
    </div>
  </div>



     </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>