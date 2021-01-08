<?php
require('Common/Cookie.php');
$contents = file_get_contents('http://127.0.0.1/PAGE/API/Red.php');
$hash     = file_get_contents('Hash/Red.hash.' . $UID); // the text file where the hash is stored
if ($hash == ($pageHash = md5($contents))) {
  echo $hash;
  echo "  <script>
    document.getElementById('RD_Title').innerHTML = 'Red Jobs';
    </script>";
} else {
  echo $hash;
echo  "
  <script>
    document.getElementById('RD_Title').innerHTML = 'Red Jobs <span class=\'dot blinking\'></span>';
  </script>" ;
  // the page has been updated, do whatever you need to do
  // and store the new hash in the file
  $fp = fopen('Hash/Red.hash.' . $UID, 'w');
  fwrite($fp, $pageHash);
  fclose($fp);
}
?>
