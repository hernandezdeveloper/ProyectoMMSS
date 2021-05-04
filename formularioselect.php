
<!DOCTYPE html>
<html>
<head>
 
	<title>Nuevo Legajo</title>
<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  
<body style="background-color: #4A4A4A">
  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="requirente.php">INICIO</a>
      </li>
      <li class="nav-item">

      <li class="nav-item ">
        <a class="nav-link" href="requirente.php">REQUIRENTE<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="requerido.php">REQUERIDO</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="legajo.php">LEGAJOS</a>
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
   <div class="card-header" align="center" style="background-color: #4A4A4A">
  <h3>
    <p style="color:#F7FCF8";>Ministerio Publico de la Defensa - Seccion Depositos</p></h3>
  <p></p>
</div>
    <div class="card-body">
      <ul class="nav nav-tabs"   id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link " id="home-tab" data-toggle="tab" href="requirente.php" role="tab" aria-controls="home" aria-selected="true">Requirente</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link"  href="requerido.php" role="tab" aria-controls="profile" aria-selected="false">Requerido</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link active" id="contact-tab" data-toggle="tab" href="legajo.php" role="tab" aria-controls="contact" aria-selected="false"> <h4>Legajos</h4></a>
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
        <div class="col-sm-4"> <p></p>
         <div class="card"> 
          <div class="card-header text-light bg-dark ">REQUIRENTE</div>
        
        <select class="form-control" style="width: 100%" id="select_usuario" >
          <option value=""> Seleccione </option>
           
             <?php
        include ("conexion2.php");
        $query= "SELECT * FROM requirente";
         $resultado= $conexion->query($query);
     
while($row = $resultado->fetch_array(MYSQLI_ASSOC)){
$id_requirente = $row['id'];
$apellidoynomre = $row['apellidoynomre'];
$emailre = $row['emailre'];
$telefonore = $row['telefonore'];
$edadre = $row['edadre'];
$Whatsappre = $row['Whatsappre'];
$domiciliore = $row['domiciliore'];

         $listas.=   $id = $row['id'];
            $apellidoynomre = $row['apellidoynomre'];
          }
    ?> 
              
                <option value="<?php echo $id; ?>"><?php echo $id; ?> <?php echo $apellidoynomre; ?> </option>

                
                <?php
               
               ?>
      </select>
   <div class="col-12">
<input type="text" class="form-control"  hidden="" name="id_requirente" value="<?php echo $id_requirente; ?>">
<label for="nombre"> Apellido y Nombres </label>
  <input type="text" class="form-control" name="apellidoynom"  value="<?php echo $apellidoynomre; ?>"/readonly="readonly"/readonly="readonly">
<label for="nombre"> Email </label>
  <input type="text" class="form-control" name="email" value="<?php echo $emailre; ?>"/readonly="readonly">
<label for="nombre"> Telefono </label>
  <input type="text" class="form-control" name="telefono" value="<?php echo $telefonore; ?>"/readonly="readonly">
<label>Edad</label>
   <input type="text" class="form-control input-sm"  name="edad" value="<?php echo $edadre;?>"/readonly="readonly">
<label>Telefono</label>
     <input type="text" class="form-control input-sm"  name="telefono" value="<?php echo $telefonore;?>"/readonly="readonly">
 <label>Nº de WhatsApp (Video Llamada)</label>
     <input type="text" class="form-control input-sm" name="Whatsapp" value="<?php echo $Whatsappre;?>"/readonly="readonly">





    </form>
</div>
</div>

   </div>
</div>  </div>

<footer ><div class="alert alert-primary" role="alert" align="center">
Ministerio Publico de la Defensa La Rioja @ Direccion de Informatica y Tecnologia 2020
</div></footer>
</body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="../librerias/bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="../librerias/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="control_usuario.js"></script> 
</html>