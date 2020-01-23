<?php

// Complete the compareTriplets function below.
function compareTriplets($a, $b)
{
    //$a = Alice
    //$b = Bob
    //return array(sum[Alice], sum[Bob])
    $j          = count($a);
    $pts_alice  = 0;
    $pts_bob    = 0;

    for ($i = 0; $i < $j; $i++) {
        if ($a[$i] > $b[$i]) {
            $pts_alice++;
        } elseif ($a[$i] < $b[$i]) {
            $pts_bob++;
        }
    }

    return array($pts_alice, $pts_bob);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$a_temp = rtrim(fgets(STDIN));

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$b_temp = rtrim(fgets(STDIN));

$b = array_map('intval', preg_split('/ /', $b_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = compareTriplets($a, $b);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($fptr);
