<?php
 require_once "scripts.php"; 
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM requirente";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$requirentes=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Depositos </title>

	<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="librerias/bootstrap/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="librerias/datatable/bootstrap.css">
<link rel="stylesheet" type="text/css" href="librerias/datatable/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="librerias/alertify/css/alertify.css">
<link rel="stylesheet" type="text/css" href="librerias/alertify/css/themes/bootstrap.css">
<link rel="stylesheet" type="text/css" href="librerias/fontawesome/css/font-awesome.css">

<script src="librerias/jquery.min.js"></script>
<script src="librerias/bootstrap/popper.min.js"></script>
<script src="librerias/bootstrap/bootstrap.min.js"></script>
<script src="librerias/datatable/jquery.dataTables.min.js"></script>
<script src="librerias/datatable/dataTables.bootstrap4.min.js"></script>
<script src="librerias/alertify/alertify.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css"/>
 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body style="background-color: gray">
	<nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
		<a class="navbar-brand" href="#">Navbar</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Link</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Dropdown
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>
	<br>
	
	<div class="container">

		<div class="card">
			<div class="card-header" align="center">
				Ministerio Publico de la Defensa - Seccion Depositos
			</div>
			<div class="card-body">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item" role="presentation">
						<a class="nav-link active" id="home-tab" data-toggle="tab" href="index.php" role="tab" aria-controls="home" aria-selected="true">Requirente</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link"  href="requerido.php" role="tab" aria-controls="profile" aria-selected="false">Requerido</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link"  href="legajo.php" role="tab" aria-controls="contact" aria-selected="false">Legajos</a>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-sm-4">
										<form id="frmnuevo" method="post">
											<label>Apellido y Nombres</label>
											<input type="text" class="form-control input-sm" id="apellidoynom" name="apellidoynom">
											<label>D.N.I. Nº</label>
											<input type="text" class="form-control input-sm" id="dni" name="dni">
											<label>Telefono</label>
											<input type="text" class="form-control input-sm" id="telefono" name="telefono">
											<label>Domicilio</label>
											<input type="text" class="form-control input-sm" id="domicilio" name="domicilio">
											
											<label>Email</label>
											<input type="text" class="form-control input-sm" id="email" name="email">
											<p></p>
											<div class="text-center">
												<button type="button" id="btnAgregarnuevo" class="btn btn-primary">Agregar nuevo</button>
											</div>
										</form>
									</div>
<div class="col-sm-8">
	<p></p>
	<div class="card">
		<div class="card-body">							
			<table class="table" id="example" >
				<thead class="thead-light">
					<tr>
						<th>D.N.I. Nº</th>
						<th>Apellido y Nombre</th>
						<th scope="col">Telefono</th>
						<th scope="col">Acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach($requirentes as $requirente){
						?>

						<tr>	
							<td><?php echo $requirente['dni']; ?> </td>
							<td><?php echo $requirente['apellidoynom']; ?> </td>
							<td><?php echo $requirente['telefono']; ?> </td>
					
						<td>
							<div class="text-center">
								<div class="btn-group">
									<button  class="btn btn-primary btn-sm btnEditar">Editar</button>
									<button class="btn btn-danger btn-sm btnBorrar">Eliminar</button>
								</div>

							</div>
						</td>
					</tr>
<?php
			}	
			?>
				</tbody>
			
		</table>
	</div>
</body>
</html>


									<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
									<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
									<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>


									<script type="text/javascript" src="jquery.dataTables.js"></script>
									<script type="text/javascript">
										$(document).ready(function() {
											$('#example').dataTable( {
												"language": {
													"url": "https:////cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
												}
											} );
										} );
									</script>
									<script type="text/javascript">
	$(document).ready(function(){
		$('#btnAgregarnuevo').click(function(){
			 var datos=$('#frmnuevo').serialize();

			$.ajax({
				type:"POST",
				data:datos,
				url:"procesos/agregar.php",
				success:function(r){
					if(r==1){
						
						alertify.success("agregado con exito :D");
					}else{
						alertify.error("Fallo al agregar :(");
					}
				}
			});
		});
