<?php
//Datos de entrada
$membershipType = "";
$personNumber = 0;
const TICKET_PRICE = 25000;

//Proceso
echo "Escriba el tipo de afiliación \n";
$membershipType = strtoupper (readline());

echo "Escriba el número de personas \n";
$personNumber = readline();

$totalPay = $personNumber * TICKET_PRICE;

switch($membershipType) {
  case "A":
    $totalPay *= 0.7;
    break;
  case "B":
  $totalPay *= 0.75;
    break;
  case "C":
  $totalPay *= 0.9;
  case "D":
  $totalPay *= 0.95;
    break;
  default:
    echo "Ud no tiene descuento \n";
}

echo "El total a pagar es: $" . number_format ($totalPay);


// Punto finalizado ok :)
?>