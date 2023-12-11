<?php
//Datos de entrada - Operaciones matemáticas
$numberOne = 0;
$numberTwo = 0;
$options = 0;
$result = 0 ;

echo "¿Qué operación desea realizar? \n";
echo "+  Suma \n";
echo "-  Resta \n";
echo "*  Multiplicación \n";
echo "/  División \n";

$options = readline();

echo "digite el primer número a operar: ";
$numberOne = readline();

echo "digite, por favor el segundo número: ";
$numberTwo = readline();

switch($options) {
  case "+":
    $result = $numberOne + $numberTwo;
    break;  
  case "-":
  $result = $numberOne - $numberTwo;
  break;  
  case "*":
  $result = $numberOne * $numberTwo;
  break;
  case "/":
  $result = $numberOne / $numberTwo;
  break;  
  default:
  echo "Ha elegido una operación inválida, vuelva al menú principal y elija una opción ";
}
echo "El resultado de su operación es: $result";
// Punto finalizado ok :)

?>