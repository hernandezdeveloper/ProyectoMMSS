 <!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Mesa de Entradas</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper" >

    <!-- Sidebar -->
    <div class="bg-dark border-right" id="sidebar-wrapper">

      <div class="sidebar-heading ">
<img src="imagenes\logoGris.jpg" width="100%" >
       </div>
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-dark active">INICIO</a>
        <a href="#" class="list-group-item list-group-item-action bg-dark active">REQUIRENTE</a>
        <a href="#" class="list-group-item list-group-item-action bg-dark active">REQUERIDO</a>
        <a href="#" class="list-group-item list-group-item-action bg-dark active">EXPEDIENTES</a>
        <a href="#" class="list-group-item list-group-item-action bg-dark active">REPORTES</a>
        <a href="#" class="list-group-item list-group-item-action bg-dark active">ADMINISTRAR</a>

      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">
        <button class="btn btn-dark active" id="menu-toggle">Mostrar Menu</button>
    
      </nav>
<?php
include_once 'conexion.php';
$objeto = new Conexion(); 
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM requirente ";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$requirentes=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>

  
  
  <div class="container">

<div class="card">
 
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
     
      </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
