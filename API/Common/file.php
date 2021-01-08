<?php
//if(isset($_GET['k'] === false)){
//  echo 'Invalid API Key';
//  exit();
//}
//elseif($_GET['k'] = $_COOKIE['DC_SESSION']){

//}
if(isset($_GET['Station'])){
  if($_GET['Station'] = 'Shore'){
    $JobFilter='Shore';
    $CSArray = array('SHOR1', 'SHOR2');
  }
}
function strposa($haystack, $needles=array(), $offset=0) { $chr = array(); foreach($needles as $key => $needle) { $res = strpos($haystack, $needle); if ($res !== false) $chr[] = $needle; } if(count($chr) > 0){ return json_encode($chr); }else{ return false; } }
$line_of_text = 0;
date_default_timezone_set('Pacific/Auckland');
$filename = date("ymd");
$file = fopen("../$filename.flt", "r");
$i = 0;
while (!feof($file)) {
  $line_of_text .= fgets($file);
  }
  $array = explode("\n", $line_of_text);
  fclose($file);
//      echo '<pre>'; print_r($array); echo '</pre>';
echo "<script>console.log('Common/File Loaded');</script>"
?>
