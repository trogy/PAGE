<?php
require('Common/file.php');
$count = count($array);
$first = true;
foreach (array_reverse($array) as $value){
 if ( $first )
   {
  if(strpos($value, " Unit:")){
  }
  elseif(strpos($value, "PURPLE")){
    $callsign = substr($value, strpos($value, "1200 ") + strlen("1200 "), 6);
    $Address = substr($value, strpos($value, "Flat/Unit:") + 0);
    if(strpos($value, "Response #")){
    }
    else{
        $first = false;
        echo "<h3 style='text-align:center;'>" . $value . "</h3>
        <audio loop autoplay>
        <source src='Siren.mp3' type='audio/mpeg'>
        Your browser does not support the audio element.
        </audio>";
    }
  }
  else {
 }
 }
}
