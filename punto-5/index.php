<?php
//Datos iniciales
const TICKET_PRICE = 25000;
$membershipType = "";
$cantPersons = 0;

//Proceso

echo "Digite su membresía: ";
$membershipType = strtoupper (readline());

echo "¿Cuántas personas van a ingresar? ";
$cantPersons = readline();

$totalPay = $cantPersons * TICKET_PRICE;

if ($membershipType == 'A' || $membershipType == 'B' ) {
  $discounts = $totalPay * 0.3;
  $totalPay = $totalPay - $discounts;
} else {
  echo "Lo siento, su membresía no tiene descuento \n";
  }

echo "El total a pagar es: $" . number_format($totalPay);

//Punto finalizado ok :

?>