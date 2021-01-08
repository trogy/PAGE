<?php
if(!isset($_GET['k'])){
  echo 'Invalid API Key';
  exit();
}
elseif($_GET['k'] = $_COOKIE['DC_SESSION']){

}
$UID = $_COOKIE['DC_SESSION'];
echo "DC_SESSION - " . $UID . "<br>";
echo "Common/Cookie Loaded <br>";
echo "App Init Load Time " . $_GET['iset'] . "<br>";

?>
