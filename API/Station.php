    <?php
require('Common/file.php');
      $count = count($array);
      foreach (array_reverse($array) as $value){
        if(strpos($value,"Assigned to Station")){
          $callsign = substr($value, strpos($value, "Unit:") + strlen("Unit: "), 6);
          $Station = substr($value, strpos($value, "Station:") + 0);
          echo $callsign . "At " . $Station . "<br> - <br>" ;
          $count--;
        }
    }


    ?>
