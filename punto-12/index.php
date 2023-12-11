<?php
//Datos de entrada
$numberOne = 0;

//Proceso
echo "Escriba el número que quiere multiplicar: ";
$numberOne = readline();

for($i = 0; $i <= 30; $i++) {
  $result = $numberOne * $i;
  echo "$numberOne * $i = $result \n";
}

//Punto finalizado ok :)
?>