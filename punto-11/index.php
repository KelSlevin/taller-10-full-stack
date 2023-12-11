<?php
//GENERAR UN PROGRAMA QUE MUESTRE LOS NÚMEROS IMPARES DEL 0 AL 100 Y HAGA SUMA DE ELLOS CON (FOR)

//DATOS INICIALES
$suma = 0;

for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
        $suma += $i;
    }
}   
echo "\n La suma de todos los números impares es: \n" . $suma;

//Punto finalizado ok
?>