<?php
include "./passCheck.php";

//datos de entrada
$user = "";
$pass = "";

//process
echo "Escriba el usuario: \n";
$user = readline();

echo "Escriba la contraseña: \n";
$pass = readline();

if (hasSecLong($pass)) {
  if (hasUpperLetter($pass)) {
    if (hasNum($pass)) {
      echo "Felicidades, ha escrito una contraseña seguro, su usuario ha sido registrado";
  } else {
    echo "Su contraseña no cumple con un número \n";
  }  
} else {
  echo "Su contraseña no tiene una letra mayúscula \n";
  }
} else {
  echo "Su contraseña no tiene una longitud segura \n";
}
?>
