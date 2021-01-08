<?php
require('Common/Cookie.php');
$contents = file_get_contents('http://127.0.0.1/PAGE/API/Purple.php');
$hash     = file_get_contents('Hash/Purple.hash.' . $UID); // the text file where the hash is stored
if ($hash == ($pageHash = md5($contents))) {
  echo $hash;
  echo "  <script>
    document.getElementById('PU_Title').innerHTML = 'Purple Jobs';
    </script>";

} else {
  echo $hash;
  echo  "
    <script>
      document.getElementById('PU_Title').innerHTML = 'Purple Jobs <span class=\'dot blinking\'></span>';
      document.getElementById('Popup').innerHTML = '<div class=\'Popup\'> <div style=\'width: 70%; height 100%; margin:auto; margin-top:30px; padding:20px; background-color:white;\'> <h1 style=\'text-align:center; color:purple;\' class=\'blinking\'> New Job <hr> </h1> <div id=\'PU_Detail\' style=\'color:black;\'></div> </div> </div>';
      $(document).ready(function(){
      $(\"#PU_Detail\").load(\"API/Purple_Special.php\");
      });
      setTimeout(function () {
  document.getElementById('Popup').innerHTML = '';
}, 30000);
    </script>

      " ;
  // the page has been updated, do whatever you need to do
  // and store the new hash in the file
  $fp = fopen('Hash/Purple.hash.' . $UID, 'w');
  fwrite($fp, $pageHash);
  fclose($fp);
}
?>
