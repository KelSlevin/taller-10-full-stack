<?
function hasSecLong($pass) {
  return strlen($pass) >= 8;
}

function hasUpperLetter($pass) {
  $arrayPassw = str_split($pass);
  
  foreach ($arrayPassw as $letter) {
    if ($letter == strtoupper($letter)) {
      return true;
    }
  }
  return false;
}

function hasNum($pass) {
  $arrayPassw = str_split($pass);

    foreach ($arrayPassw as $letter) {
      if(is_numeric($letter)) {
        return true;
      }
    }
    return false;
  }  
?>