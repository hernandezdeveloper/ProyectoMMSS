 <!DOCTYPE html>
  <html>
  <head>
   
  	<title>Nuevo Legajo</title>
  <meta charset="utf-8">
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="../librerias/bootstrap/js/jquery.min.js"></script>
      <script type="text/javascript" src="../librerias/bootstrap/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="control_usuario.js"></script>   
 <body style="background-color: gray">
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
        <ul class="nav nav-tabs"   id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link " id="home-tab" data-toggle="tab" href="requirente.php" role="tab" aria-controls="home" aria-selected="true">Requirente</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link"  href="requerido.php" role="tab" aria-controls="profile" aria-selected="false">Requerido</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link active" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"> <h4>Legajos</h4></a>
          </li>
          <li class="nav-item" role="presentation">
        <a class="nav-link " id="home-tab" data-toggle="tab" href="buscarpagos.php" role="tab" aria-controls="home" aria-selected="true">Pagos</a>
      </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
 
 <div class="card">
      <div class="card-body">
<?php 
       $id_legajo=$_REQUEST['id_legajo'];
       include ("conexion2.php");
        $query= "SELECT le.*,  re.*, ro.*   
           
 FROM legajo le INNER JOIN requirente re on re.id=le.id_requirente
             INNER JOIN requerido ro  on ro.id=le.id_requerido
 
 where le.id_legajo='$id_legajo'";
         $resultado= $conexion->query($query);
         $row=$resultado->fetch_assoc();
    ?>     
      <div class="row">
          <div class="col-sm-4"> <p></p>
           <div class="card"> 
            <div class="card-header">REQUIRENTE</div>
                
</div>
<form id="frmRequirente" action="" method="post" >
      <label>Apellido/s y Nombres</label>
      <input type="text" class="form-control input-sm" id="apellidoynomre" name="apellidoynomre"  value="<?php echo $row ['apellidoynomre'];?>"/readonly="readonly">
      <label>D.N.I. Nº</label>
      <input type="text" class="form-control input-sm" id="dnire" name="dnire" value="<?php echo $row ['dnire'];?>"/readonly="readonly">
      <label>Edad</label>
      <input type="text" class="form-control input-sm" id="edadre" name="edadre" value="<?php echo   $row ['edadre'];?>"/readonly="readonly">
      <label>Telefono</label>
      <input type="text" class="form-control input-sm" id="telefonore" name="telefonore" value="<?php echo $row ['telefonore'];?>"/readonly="readonly">
      <label>Nº de WhatsApp (Video Llamada)</label>
      <input type="text" class="form-control input-sm" id="Whatsappre" name="Whatsappre" value="<?php echo $row ['Whatsappre'];?>"/readonly="readonly">
      <label>Domicilio</label>
      <input type="text" class="form-control input-sm" id="domiciliore" name="domiciliore" value="<?php echo   $row ['domiciliore'];?>"/readonly="readonly">
      <label>Referencia de Domicilio</label>
      <input type="text" class="form-control input-sm" id="referenciare" name="referenciare" value="<?php echo $row ['referenciare'];?>"/readonly="readonly">
      <label>Email</label>
      <input type="text" class="form-control input-sm" id="emailre" name="emailre" value="<?php echo   $row ['emailre'];?>"/readonly="readonly">
      <label>Ocupacion</label>
      <input type="text" class="form-control input-sm" id="ocupacionre" name="ocupacionre" value="<?php echo  $row ['ocupacionre'];?>"/readonly="readonly">
      <label>Ingresos</label>
      <input type="text" class="form-control input-sm" id="ingresosre" name="ingresosre" value="<?php echo  $row ['ingresosre'];?>"/readonly="readonly">
      <label>Estado Civil</label>
      <input type="text" class="form-control input-sm" id="estadocivilre" name="estadocivilre" value="<?php echo  $row ['estadocivilre'];?>"/readonly="readonly">
      <label>Medida de Restriccion</label>
      <input type="text" class="form-control input-sm" id="restriccionre" name="restriccionre" value="<?php echo  $row ['restriccionre'];?>"/readonly="readonly">
      <p></p>
        
      </div>

      <div class="col-sm-4">
       <p></p>
          <div class="card">
         <div class="card-header">
                REQUERIDO
         </div>
             </div>
     
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
        </div>
<div class="col-sm-4" align="center">
  <p></p>
 <img src="imagenes\logocircular.jpg" width="30%" >
   <br><br>

     <div class="row">

         <label for="fecha">Fecha de Ingreso:</label>
        <input type="text" class="form-control input-sm" id="fecha" name="fecha" value="<?php echo  $row ['fecha'];?>"/readonly="readonly">
     </div>
        <div class="row"> 
            <div class="col">
                 <label  for="numero">Nº Legajo</label>
                  <input type="text" class="form-control input-sm" id="numero" name="numero" value="<?php echo  $row ['numero'];?>"/readonly="readonly">
            </div>
            <div class="col">
              <label  for="letra">Letra</label>
              <input type="text" class="form-control input-sm" id="letra" name="letra" value="<?php echo  $row ['letra'];?>"/readonly="readonly">
            </div>
            <div class="col">
              <label  for="anio">Año</label>
             <input type="text" class="form-control input-sm" id="anio" name="anio" value="<?php echo  $row ['anio'];?>"/readonly="readonly">
            </div>
        </div>
     <label for="abogado">Abogado</label>
     <input type="text" class="form-control input-sm" id="abogado" name="abogado" value="<?php echo  $row ['abogado'];?>"/readonly="readonly">
    <div class="form-group">
    <label for="caratula">Caratula</label>
      <textarea class="form-control" name="caratula" rows="4" /readonly="readonly"> <?php echo  $row ['caratula'];?>
        
      </textarea>
</div>
 <p></p>
 <div align="center">
   <input class="btn btn-primary" type="submit" value="Guardar">
   <a class="btn btn-secondary " href="legajo.php" role="button">Cancelar</a>
   </div>
      </div>
     </div>
</div>

  </div>  
          

     
 </div></div>   
      </form>
 </div>
</div>

     </div>
  </div>  </div>
 
  <footer ><div class="alert alert-primary" role="alert" align="center">
  Ministerio Publico de la Defensa La Rioja @ Direccion de Informatica y Tecnologia 2020
</div></footer>
  </body>

  </html>