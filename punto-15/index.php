<?php
include "./opTools.php";

//datos de entrada
$numOne = 0;
$numTwo = 0;
$option = "";


$numOne = getNum();
$numTwo = getNum();


$option = showMenu();



$result = operate($numOne, $numTwo, $option);


echo "El resultado es: " . $result;

//Punto finalizado ok :)
?>