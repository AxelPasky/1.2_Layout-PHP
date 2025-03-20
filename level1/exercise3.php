<?php
declare(strict_types = 1);

$X=5;
$Y=10;
$N=1.76;
$M=3.14;

echo "X = $X <br>";
echo "Y = $Y <br>";
echo "The sum is " . ($X + $Y) . "<br>";
echo "The subtraction is " . ($X - $Y) . " (X-Y) or " . ($Y - $X) . " (Y-X)<br>";
echo "The multiplication is " . ($X * $Y) . "<br>";
echo "The module is " . ($X % $Y) . " (X%Y) or " . ($Y % $X) . " (Y%X)<br><br>";

echo "N = $N <br>";
echo "M = $M <br>";
echo "The sum is " . ($N + $M) . "<br>";
echo "The subtraction is " . ($N - $M) . " (N-M) or " . ($M - $N) . " (M-N)<br>";
echo "The product is " . ($N * $M) . "<br>";
echo "The module is " . fmod($N, $M) . " (N%M) or " . fmod($M, $N) . " (M%N)<br>";

function doubleNum($num) {
    $tot = $num*2;
    return $tot;
} 

echo  "Double Numbers: " . doubleNum($X) . " " . doubleNum($Y) . " " . doubleNum($N) . " " . doubleNum($M);
echo "<br>";
echo "The sum of all variables is :" . $X+$Y+$N+$M . "<br>"; 
echo "The product of all variables is :" . $X*$Y*$N*$M . "<br>";

function calculator($num1,$num2,$operator){

    if ($operator== "+"){
        $total= $num1 + $num2;
    }  elseif ($operator== "-") {
        $total= $num1 - $num2;
    } elseif ($operator== "*") {
        $total= $num1 * $num2;
    } elseif ($operator== "/") {
        $total= $num1/$num2;
    } else {
        $total= "This value is not correct. Use + , - , * , / .";
    }
    return $total;
}

echo calculator(55,4,"*");

?>


