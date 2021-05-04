<?php
include_once 'conexion.php';
$objeto = new Conexion(); 
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM requirente ";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$requirentes=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Depositos </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
</head>
<body style="background-color: gray">
	<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
		
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="requirente.php">INICIO</a>
				</li>
				<li class="nav-item">

				<li class="nav-item active">
					<a class="nav-link" href="requirente.php">REQUIRENTE<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="requerido.php">REQUERIDO</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="formularioselect.php">LEGAJOS</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="buscarpagos.php">PAGOS</a>
				</li>
			</ul>
			
				<div class="d-flex justify-content-end">
				 <img src="imagenes\logocompleto.png" width="40%" align="left">
			</div>
		
		</div>
	</nav>
	
	
	<div class="container">

<div class="card">
	<div class="card-header" align="center" style="background-color: #3F77DA">
		<h3>Ministerio Publico de la Defensa - Seccion Depositos</h3>
		<p></p>
	</div>
	<div class="card-body">
		<ul class="nav nav-tabs" id="myTab" role="tablist">
			<li class="nav-item" role="presentation">
				<a class="nav-link active" id="home-tab" data-toggle="tab" href="requirente.php" role="tab" aria-controls="home" aria-selected="true"><h4>Requirente</h4></a>
			</li>
			<li class="nav-item" role="presentation">
				<a class="nav-link"  href="requerido.php" role="tab" aria-controls="profile" aria-selected="false">Requerido</a>
			</li>
			<li class="nav-item" role="presentation">
				<a class="nav-link"  href="legajo.php" role="tab" aria-controls="contact" aria-selected="false">Legajos</a>
			</li>
			<li class="nav-item" role="presentation">
				<a class="nav-link " id="home-tab" data-toggle="tab" href="buscarpagos.php" role="tab" aria-controls="home" aria-selected="true">Pagos</a>
			</li>
		</ul>
	<div class="tab-content" id="myTabContent">
	<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
	<div class="card">
		<div class="card-body">
			<div class="row">
			<div class="col-sm-4">
		<form id="frmRequirente" action="guardarRequirente.php" method="post">
			<label>Apellido/s y Nombres</label>
			<input type="text" class="form-control input-sm" id="apellidoynomre" name="apellidoynomre" required="">
			<label>D.N.I. Nº</label>
			<input type="text" class="form-control input-sm" id="dnirere" name="dnire" required="">
			<label>Edad</label>
			<input type="text" class="form-control input-sm" id="edadre" name="edadre" required="">
			<label>Telefono</label>
			<input type="text" class="form-control input-sm" id="telefonore" name="telefonore">
			<label>Nº de WhatsApp (Video Llamada)</label>
			<input type="text" class="form-control input-sm" id="Whatsappre" name="Whatsappre">
			<label>Domicilio</label>
			<input type="text" class="form-control input-sm" id="domiciliore" name="domiciliore">
			<label>Referencia de Domicilio</label>
			<input type="text" class="form-control input-sm" id="referenciare" name="referenciare">
			<label>Email</label>
			<input type="text" class="form-control input-sm" id="emailre" name="emailre">
			<label>Ocupacion</label>
			<input type="text" class="form-control input-sm" id="ocupacionre" name="ocupacionre">
			<label>Ingresos</label>
			<input type="text" class="form-control input-sm" id="ingresosre" name="ingresosre">
			<label>Estado Civil</label>
			<input type="text" class="form-control input-sm" id="estadocivilre" name="estadocivilre">
			<label>Medida de Restriccion</label>
			<input type="text" class="form-control input-sm" id="restriccionre" name="restriccionre">
			<p></p>
			<div class="text-center">
			<button type="submit" class="btn btn-success btn-sm"><i class="far fa-save" style="font-size:1.5em; color: white"></i> Guardar</button>
			

			</div>
		</form>
		</div>
		<div class="col-sm-8">
			<p></p>
			<div class="card">
				<div class="card-body">							
		<table class="table table-sm" id="example" >
			<thead class="thead-dark">
				<tr>
					<th>D.N.I. </th>
					<th>Apellido y Nombres</th>
					<th>Telefono</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
			<?php
				foreach($requirentes as $requirente){
			?>

					<tr>	
						<td><?php echo $requirente['dnire']; ?> </td>
						<td><?php echo $requirente['apellidoynomre']; ?> </td>
						<td><?php echo $requirente['telefonore']; ?> </td>
				
					<td>
						<div class="text-center">
							<div class="btn-group">
								<a class="btn btn-primary btn-sm" href="verRequirente.php?id=<?php echo $requirente['id']; ?>" role="button">Ver</a>
								<a class="btn btn-success btn-sm" href="editarRequirente.php?id=<?php echo $requirente['id']; ?>" role="button">Editar</a>
								<a href="pdf\index1_requirente.php?id=<?php echo $requirente['id']; ?>" title="Imprimir" target="_blank">  <i class="far fa-file-pdf" style="font-size:2.1em; color: #D92034" ></i></a>  

							</div>
						</div>
					</td>
					</tr>
	       <?php
		    	}	
		   ?>
		 	</tbody>
			</table>
			</div></div></div></div></div></div></div></div></div></div>
<footer ><div class="alert alert-primary" role="alert" align="center">
  Ministerio Publico de la Defensa La Rioja @ Direccion de  Informatica y  Tecnologia 2020
</div></footer>
	</body>
	 
</div>

	
</html>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
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