<?php
declare(strict_types = 1);

 function totalImport($minute) {
    $callCost=10;
    $addMinute=5;

    if ($minute<=3) {
       return $callCost;
    } else {
       $minuteLeft= $minute-3;
       $totalCost=$minuteLeft*$addMinute+$callCost;
       return $totalCost;
    }
 }

 echo "Your call cost is: " . totalImport(30) . " cent."; 

?>