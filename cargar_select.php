<?php 
require_once 'conexion2';

function getSelect(){

	$mysqli = getConn();
	$query = 'SELECT * FROM `requirente`';
	$result= $mysqli- >query($query); 
	$select = '<option value="0">Elige una Opcion</option>';
 while ($row=$result- > fetch_array(MYSQLI_ASSOC)) {
  $select .= '<option value="$row[id]">$row[apellidoynom]</option>'
 }
 return $select;
}

echo getSelect();