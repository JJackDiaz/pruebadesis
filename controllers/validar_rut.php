<?php

$rut = $_POST["rut"];
echo (validarRut($rut)) ? "true" : "false";

function validarRut($rut) {
    $rut = preg_replace('/[^0-9kK]/', '', $rut); // Eliminar cualquier caracter que no sea número ni K
    if(empty($rut)) {
      return false;
    }
    $rut_sin_dv = substr($rut, 0, -1);
    $dv = strtoupper(substr($rut, -1));
    $m = 0;
    $s = 1;
    for($i = strlen($rut_sin_dv) -1; $i >= 0; $i--) {
      $s = ($s + $rut_sin_dv[$i] * (9 - ($m++ % 6))) % 11;
    }
    $dv_calculado = ($s > 0) ? chr($s + 47) : 'K';
    return ($dv == $dv_calculado);
  }

?>