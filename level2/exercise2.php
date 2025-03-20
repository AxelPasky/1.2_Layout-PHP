<?php
declare(strict_types = 1);

function chocolate($numChocolate){
    $cost=1;

    return $numChocolate*$cost;

}

function gum($numGum){
    $cost=0.5;

    return $numGum*$cost;
}

function candy($numCandy){
    $cost=1.5;

    return $numCandy*$cost;
}

echo "The total cost is : " . chocolate(2) + gum(1) + candy(1);

?>