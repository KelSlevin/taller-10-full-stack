<?php
//Datos de entrada
$number = 0;
$i = 0;


echo "Escriba el número para multiplicar: \n";
$number = readline();

while($i <= 30) {
  $result = $number * $i;
  echo $number." x ".$i." = ".$result."\n";
  $i++;
}

//Punto finalizado ok :)
?>