<?php

  require('Common/file.php');
  $CSArray = array('SHOR1', 'SHOR2', 'MNKU2', 'MART1', 'PKOH1');
  $count = count($array);
  foreach (array_reverse($array) as $value){
    if(strpos($value, " Unit:")){
    }
    elseif(strpos($value, "RED")){
      $callsign = substr($value, strpos($value, "1200 ") + strlen("1200 "), 6);
      $Address = substr($value, strpos($value, "RED") + 11);
      if(strpos($value, "Response #")){
      }
      else{
          echo $callsign . " RED " . $Address . "<br> - <br>";
      }
    }
}


?>
