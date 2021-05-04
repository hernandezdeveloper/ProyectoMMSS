<!doctype html>
<html>
    <head>
        <link rel="shortcut icon" href="requirente.php" /> 
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>MPD - INICIO</title>

        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="estilos.css">
               
    </head>
    
    <body>
     <div id="login">   
        <p></p>
         <h1 class="text-center text-white display-5">MINISTERIO PUBLICO DE LA DEFENSA - SECCION DEPOSITOS</h1>         
         <div class="container">
             <div id="login-row" class="row justify-content-center align-items-center">
                 <div id="login-column" class="col-md-6">
                     
                     <div id="login-box" class="col-md-12 bg-light text-dark">
                         <form id="formLogin" class="form" action="validar.php" method="post">
                             <h3 class="text-center text-dark">Iniciar Sesión</h3>
                             <div class="form-group">
                                 <label for="usuario" class="text-dark">Usuario</label>
                                 <input type="text" name="usuario" id="usuario" class="form-control">
                             </div>
                             <div class="form-group">
                                 <label for="password" class="text-dark">Password</label>
                                 <input type="password" name="password" id="password" class="form-control">
                             </div>
                             
                             <div class="form-gropu text-center">
                                 <input type="submit" name="submit" class="btn btn-dark btn-lg btn-block" value="Conectar">
                             </div>
                         </form>
                     </div>
                     
                 </div>
             </div>
         </div>         
     </div>        
         
     <script src="jquery/jquery-3.3.1.min.js"></script>    
     <script src="bootstrap/js/bootstrap.min.js"></script>    
     
   
    </body>
</html>