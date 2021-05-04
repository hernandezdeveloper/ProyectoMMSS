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

        <li class="nav-item">
          <a class="nav-link" href="requirente.php">REQUIRENTE<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
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
  </div>

<body>
<p></p>
   <div class="row">
        <div class="col-3">
           </div>

  <div class="card" style="width: 35rem;">
     <div class="card-header" style="background-color: #3ED1EB">
    <h4 align="center">Datos del Requerido</h4>
  </div>
    <div class="card-body">
       <?php 
       $id=$_REQUEST['id'];
       include ("conexion2.php");
        $query= "SELECT * FROM `requerido` WHERE id='$id'";
         $resultado= $conexion->query($query);
         $row=$resultado->fetch_assoc();
    ?>     
      <div class="col-12">
    <form id="frmRequerido" action="" method="post" >
      <label>Apellido/s y Nombres</label>
      <input type="text" class="form-control input-sm" id="apellidoynom" name="apellidoynom"  value="<?php echo utf8_encode( $row ['apellidoynom']);?>"/readonly="readonly">
      <label>D.N.I. Nº</label>
      <input type="text" class="form-control input-sm" id="dni" name="dni" value="<?php echo $row ['dni'];?>"/readonly="readonly">
      <label>Edad</label>
      <input type="text" class="form-control input-sm" id="edad" name="edad" value="<?php echo $row ['edad'];?>"/readonly="readonly">
      <label>Telefono</label>
      <input type="text" class="form-control input-sm" id="telefono" name="telefono" value="<?php echo $row ['telefono'];?>"/readonly="readonly">
      <label>Nº de WhatsApp (Video Llamada)</label>
      <input type="text" class="form-control input-sm" id="Whatsapp" name="Whatsapp" value="<?php echo $row ['Whatsapp'];?>"/readonly="readonly">
      <label>Domicilio</label>
      <input type="text" class="form-control input-sm" id="domicilio" name="domicilio" value="<?php echo  $row ['domicilio'];?>"/readonly="readonly">
      <label>Referencia de Domicilio</label>
      <input type="text" class="form-control input-sm" id="referencia" name="referencia" value="<?php echo $row ['referencia'];?>"/readonly="readonly">
      <label>Email</label>
      <input type="text" class="form-control input-sm" id="email" name="email" value="<?php echo $row ['email'];?>"/readonly="readonly">
      <label>Ocupacion</label>
      <input type="text" class="form-control input-sm" id="ocupacion" name="ocupacion" value="<?php echo  $row ['ocupacion'];?>"/readonly="readonly">
      <label>Ingresos</label>
      <input type="text" class="form-control input-sm" id="ingresos" name="ingresos" value="<?php echo $row ['ingresos'];?>"/readonly="readonly">
      <label>Estado Civil</label>
      <input type="text" class="form-control input-sm" id="estadocivil" name="estadocivil" value="<?php echo $row ['estadocivil'];?>"/readonly="readonly">
      <label>Medida de Restriccion</label>
      <input type="text" class="form-control input-sm" id="restriccion" name="restriccion" value="<?php echo  $row ['restriccion'];?>"/readonly="readonly">
      <p></p>
      <div class="text-center">
             <a class="btn btn-danger " href="pdf\index1_requerido.php?id=<?php echo $row['id']; ?>" role="button" target="_blank"><i class="far fa-file-pdf" style="font-size:1.3em; color: white " ></i> Imprimir</a>
             <a class="btn btn-secondary " href="requerido.php" role="button">Cancelar</a>
      </div>
</form>
    </div>
         <div class="col-3"></div>
  <p></p>
</body></div></div></div></div>
 <footer ><div class="alert alert-primary" role="alert" align="center">
  Ministerio Publico de la Defensa La Rioja @ Direccion de Informatica y Tecnologia 2020
</div></footer>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</html>