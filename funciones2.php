<?php
function convertirMinusculas($texto){
  return strtolower($texto);
}

function limpiarNombre($nombre){
  $nombre = trim($nombre);
  $nombre = convertirMinusculas($nombre);
  $nombre = str_replace(" ", "", $nombre);
  return $nombre;
}

function obtenerInstitucion($inst){
  $inst = trim($inst);
  $dos = substr($inst, 0, 2);
  return strtolower($dos);
}

function obtenerAnio($anio){
  $anio = trim($anio);
  return substr($anio, strlen($anio)-2, 2);
}

function generarUsuario($nombre, $inst, $anio){
  return limpiarNombre($nombre) . obtenerInstitucion($inst) . obtenerAnio($anio);
}
?>