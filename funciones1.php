<?php
function obtenerIniciales($nombre){
  $nombre = trim($nombre);
  $tres = substr($nombre, 0, 3);
  return strtoupper($tres);
}

function obtenerAnio($fecha){
  return substr($fecha, 2, 2);
}

function obtenerMesDia($fecha){
  $mes = substr($fecha, 5, 2);
  $dia = substr($fecha, 8, 2);
  return $mes . $dia;
}

function generarClave($nombre, $fecha){
  return obtenerIniciales($nombre) . obtenerAnio($fecha) . obtenerMesDia($fecha);
}
?>