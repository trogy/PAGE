<?php
  require('Common/file.php');
  $count = count($array);
  foreach (array_reverse($array) as $value){
    if(isset($_GET['Station'])){
      if(strposa($value, $CSArray)){
        if(strpos($value, " Unit:")){
        }
        elseif(strpos($value, "GREEN")){
          $callsign = substr($value, strpos($value, "1200 ") + strlen("1200 "), 6);
          $Address = substr($value, strpos($value, "GREEN") + 11);
          if(strpos($value, "Response #")){
          }
          else{
              echo $callsign . " GREEN " . $Address . "<br> - <br>";

          }
      }
    }
  }
else{
    if(strpos($value, " Unit:")){
    }
    elseif(strpos($value, "GREEN")){
      $callsign = substr($value, strpos($value, "1200 ") + strlen("1200 "), 6);
      $Address = substr($value, strpos($value, "GREEN") + 11);
      if(strpos($value, "Response #")){
      }
      else{
          echo $callsign . " GREEN " . $Address . "<br> - <br>";
      }
    }
    }
}


?>
