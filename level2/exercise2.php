<?php
declare(strict_types = 1);

function chocolate(int $numChocolate):int{
    $cost=1;

    return $numChocolate*$cost;

}

function gum(int $numGum):int{
    $cost=0.5;

    return $numGum*$cost;
}

function candy(int $numCandy):int{
    $cost=1.5;

    return $numCandy*$cost;
}

echo "The total cost is : " . chocolate(2) + gum(1) + candy(1);

?>