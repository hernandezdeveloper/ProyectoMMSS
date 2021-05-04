<?php 


$id = $_POST['id'];

include ("conexion2.php");
             $query= "SELECT * FROM requerido WHERE id ='$id'";
            $resultado= $conexion->query($query);
        while($row = $resultado->fetch_array(MYSQLI_ASSOC)){


$id_requerido = $row['id'];
$apellidoynom = $row['apellidoynom'];
$email = $row['email'];
$telefono = $row['telefono'];
$edad = $row['edad'];
$Whatsapp = $row['Whatsapp'];
$domicilio = $row['domicilio'];
$referencia = $row['referencia'];
$ocupacion = $row['ocupacion'];
$ingresos = $row['ingresos'];
$estadocivil = $row['estadocivil'];
$restriccion = $row['restriccion'];
}
?>

<div class="col-12">
<input type="text" class="form-control" hidden="" id="id_requerido" name="id_requerido" value="<?php echo $id_requerido; ?>"/readonly="readonly">
<label for="nombre"> Apellido y Nombres </label>
	<input type="text" class="form-control" name="apellidoynom"  value="<?php echo $apellidoynom; ?>"/readonly="readonly">
<label for="nombre"> Email </label>
	<input type="text" class="form-control" name="email" value="<?php echo $email; ?>"/readonly="readonly">
<label for="nombre"> Telefono </label>
	<input type="text" class="form-control" name="telefono" value="<?php echo $telefono; ?>"/readonly="readonly">
<label>Edad</label>
	 <input type="text" class="form-control input-sm"  name="edad" value="<?php echo $edad;?>"/readonly="readonly">
<label>Telefono</label>
     <input type="text" class="form-control input-sm"  name="telefono" value="<?php echo $telefono;?>"/readonly="readonly">
 <label>Nº de WhatsApp (Video Llamada)</label>
     <input type="text" class="form-control input-sm" name="Whatsapp" value="<?php echo $Whatsapp;?>"/readonly="readonly">
 <label>Domicilio</label>
     <input type="text" class="form-control input-sm" name="domicilio" value="<?php echo $domicilio;?>"/readonly="readonly">
 <label>Referencia de Domicilio</label>
     <input type="text" class="form-control input-sm"  name="referencia" value="<?php echo $referencia;?>"/readonly="readonly">
 <label>Ocupacion</label>
     <input type="text" class="form-control input-sm"  name="ocupacion" value="<?php echo $ocupacion;?>"/readonly="readonly">
 <label>Ingresos</label>
     <input type="text" class="form-control input-sm"  name="ingresos" value="<?php echo $ingresos;?>"/readonly="readonly">
 <label>Estado Civil</label>
      <input type="text" class="form-control input-sm"  name="estadocivil" value="<?php echo $estadocivil;?>"/readonly="readonly">
 <label>Medida de Restriccion</label>
      <input type="text" class="form-control input-sm"  name="restriccion" value="<?php echo $restriccion;?>"/readonly="readonly">
      <p></p>
</div>

<?php

?>
