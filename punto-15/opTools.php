<?php 
function getNum() {
  echo "Ingrese un número: \n";
  return readline();
}
function showMenu() {
  echo "Digite la opción de operación, siendo: \n";
  echo "1. Suma \n";
  ecHo "2. Resta \n";
  echo "3. Multiplicación \n";
  echo "4. División \n";
  return readline();
}
//Función que hace la operación correcta
function operate($a, $b, $option) {
  switch ($option) {
    case 1:
      return sum($a, $b);
    case 2:
      return sub($a, $b);
    case 3:
      return mult($a, $b);
    case 4:
      return div($a, $b);
    default:
    echo "Opción no válida";
    return 0;
  }  
}
//Operadores por cada función
function sum($a, $b) {
  return $a + $b;
}
function sub($a, $b) {
  return $a - $b;
}
function mult($a, $b) {
  return $a * $b;
}
function div($a, $b) {
  return $a / $b;
}
?>