<?php
declare(strict_types = 1);

function counter($num=10,$increase=1) {
    $countStart=0;

    if ($increase<=$num) {
    for($i=0;$i<$num;$i+=$increase){
       
        $countStart+=$increase;
        if($countStart>$num){
            return "Ops, the increase value should be an exact divisor to continue.";
        }
        echo $countStart . "<br>";
    }
} else { 
    echo "Value uncorrect.";
}
}

echo counter(15,4);

?>

