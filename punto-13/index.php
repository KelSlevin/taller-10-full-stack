<?php
//datos de entrada
$numberArray = array(3, 5, 9, 8, 4);
$sum = 0;

//proceso
foreach($numberArray as $num) {
  $sum += $sum + $num;
}

echo "La suma total de este arreglo es: \n" . $sum;

//Punto finalizado ok

?>