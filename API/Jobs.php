<?php
require('Common/file.php');
$count = count($array);
foreach (array_reverse($array) as $value){
if(strpos($value, "Priority Changed to")){
}
else{
if(strpos($value, "Assigned to Station")){

}
else{
if(strpos($value, " Unit:")){
  $callsign = substr($value, strpos($value, "Unit:") + strlen("Unit:"), 6);
  if(strpos($value, "Job #")){
    $JobNo = substr($value, strpos($value, "Job #") + strlen("Job #"), 11);
  }
  elseif(strpos($value, "Job#")){
    $JobNo = substr($value, strpos($value, "Job#") + strlen("Job#"), 11);
  }
  else{
    $JobNo = "UNKWN";
  }
    echo $callsign . " Job Complete | Job Number: " . $JobNo . "<br> - <br>";
  }
}
}
}
?>
