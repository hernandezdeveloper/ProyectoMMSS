<!DOCTYPE html>
  <html>
  <head>
   
  	<title>Nuevo Legajo</title>
  <meta charset="utf-8">
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

     
    </head>

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
</body>
 <div class="row">
 <div class="col-4">
           </div>
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

     <div class="card" style="width: 25rem;">
     <div class="card-header" style="background-color: #3ED1EB">
    <h4 align="center">Agregar Pagos</h4>
  </div>
    <div class="card-body">
<div class="col-sm-12" align="center">
    <p></p>
<form name="formselect"  action="guardarPagos.php" method="POST">  
   <div class="row">
      <div class="col" align="left">
         <label for="caratula">Caratula</label>
         <textarea class="form-control" name="caratula" rows="4" /readonly="readonly"> <?php echo  $row ['caratula'];?>
         </textarea>

 <label for="id_legajo" hidden="true">Idlegajo</label>
     <input type="text" hidden="true" class="form-control input-sm" id="id_legajo" name="id_legajo" value="<?php echo  $row ['id_legajo'];?>"/readonly="readonly">

</div>
</div>
  <div class="row">
 <div class="col" align="left">
         <label for="fecha" >Fecha de Ingreso:</label>
        <input type="text" class="form-control input-sm" id="fecha" name="fecha" value="<?php echo  $row ['fecha'];?>"/readonly="readonly">
      </div>
 </div>
        <div class="row"> 
            <div class="col" align="left">
                 <label  for="numero">Nº Legajo</label>
                  <input type="text" class="form-control input-sm" id="numero" name="numero" value="<?php echo  $row ['numero'];?>"/readonly="readonly">
            </div>
            <div class="col" align="left">
              <label  for="letra">Letra</label>
              <input type="text" class="form-control input-sm" id="letra" name="letra" value="<?php echo  $row ['letra'];?>"/readonly="readonly">
            </div>
            <div class="col" align="left">
              <label  for="anio">Año</label>
             <input type="text" class="form-control input-sm" id="anio" name="anio" value="<?php echo  $row ['anio'];?>"/readonly="readonly">
            </div>
        </div>
<div class="form-group" align="left">    
     <label for="abogado">Abogado</label>
     <input type="text" class="form-control input-sm" id="abogado" name="abogado" value="<?php echo  $row ['abogado'];?>"/readonly="readonly">
   </div>
    

<label for="fechaPago">Fecha de Pago</label>
<input type="date" class="form-control input-sm" id="fechaPago" name="fechaPago">

<label for="importe">Importe</label>
<input type="text" class="form-control input-sm" id="importe" name="importe" >

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
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="../librerias/bootstrap/js/jquery.min.js"></script>
      <script type="text/javascript" src="../librerias/bootstrap/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="control_usuario.js"></script>   
  </body>

  </html>