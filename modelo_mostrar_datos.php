<?php 


$id = $_POST['id'];

            require 'conexion2.php');
             $query= "SELECT * FROM requirente WHERE id ='$id'";
            $resultado= $conexion->query($query);
           while($row = $resultado->fetch_array(MYSQLI_ASSOC)){


$id_requirente = $row['id'];
$apellidoynomre = $row['apellidoynomre'];
$emailre = $row['emailre'];
$telefonore = $row['telefonore'];
$edadre = $row['edadre'];
$Whatsappre = $row['Whatsappre'];
$domiciliore = $row['domiciliore'];
$referenciare = $row['referenciare'];
$ocupacionre = $row['ocupacionre'];
$ingresosre = $row['ingresosre'];
$estadocivilre = $row['estadocivilre'];
$restriccionre = $row['restriccionre'];
}
?>

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
 <label>Domicilio</label>
     <input type="text" class="form-control input-sm" name="domicilio" value="<?php echo $domiciliore;?>"/readonly="readonly">
 <label>Referencia de Domicilio</label>
     <input type="text" class="form-control input-sm"  name="referencia" value="<?php echo $referenciare;?>"/readonly="readonly">
 <label>Ocupacion</label>
     <input type="text" class="form-control input-sm"  name="ocupacion" value="<?php echo $ocupacionre;?>"/readonly="readonly">
 <label>Ingresos</label>
     <input type="text" class="form-control input-sm"  name="ingresos" value="<?php echo $ingresosre;?>"/readonly="readonly">
 <label>Estado Civil</label>
      <input type="text" class="form-control input-sm"  name="estadocivil" value="<?php echo $estadocivilre;?>"/readonly="readonly">
 <label>Medida de Restriccion</label>
      <input type="text" class="form-control input-sm"  name="restriccion" value="<?php echo $restriccionre;?>"/readonly="readonly">
      <p></p>
</div>
<?php

?>
