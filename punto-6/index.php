<?php
//Datos de entrada

$name = "";
$fullAge = 0;

//Proceso

echo "Escriba su nombre, por favor ";
$name = strtoupper (readline());

echo "Ahora, digite su edad actual ";
$fullAge = readline();

if ($fullAge >= 18) {
  echo "Hola " . $name . " de acuerdo con la información digitada Ud Sí es mayor de edad";
} else {
  echo "Hola " . $name . " de acuerdo a sus datos Ud no es mayor de edad";  
}

//Punto finalizado ok :)
?>