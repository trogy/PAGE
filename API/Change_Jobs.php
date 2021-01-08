<?php
require('Common/Cookie.php');
$contents = file_get_contents('http://127.0.0.1/PAGE/API/Station.php');
$hash     = file_get_contents('Hash/Station.hash.' . $UID); // the text file where the hash is stored
if ($hash == ($pageHash = md5($contents))) {
  echo $hash;
  echo "  <script>
    document.getElementById('JB_Title').innerHTML = 'Complete Jobs';
    </script>";
} else {
  echo $hash;
echo  "
  <script>
    document.getElementById('JB_Title').innerHTML = 'Complete Jobs <span class=\'dot blinking\'></span>';
  </script>";
  // the page has been updated, do whatever you need to do
  // and store the new hash in the file
  $fp = fopen('Hash/Station.hash.' . $UID, 'w');
  fwrite($fp, $pageHash);
  fclose($fp);
}
?>
