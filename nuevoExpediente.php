
  <!DOCTYPE html>
  <html>
  <head>
   
  	<title>Nuevo EXPEDIENTE</title>
  <meta charset="utf-8">
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       <script type="text/javascript" src="../librerias/bootstrap/js/jquery.min.js"></script>
      <script type="text/javascript" src="../librerias/bootstrap/js/bootstrap.min.js"></script>
     
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
            <div class="card-header">REQUIRENTE</div>
          <select class="form-control" style="width: 100%" id="select_usuario" >
            <option value=""> Seleccione </option>
              <?php
              require 'conexion.php';
             
                 ?>
        </select>
   
      <div class="col-sm-4">
       


 <p></p>
 <div align="center">
   <input class="btn btn-primary" type="submit" value="Guardar">
   <a class="btn btn-secondary " href="legajo.php" role="button">Cancelar</a>
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
    <script type="text/javascript" src="control_usuario.js"></script> 