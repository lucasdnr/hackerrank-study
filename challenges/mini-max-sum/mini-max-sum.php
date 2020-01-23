<?php

// Complete the miniMaxSum function below.
function miniMaxSum($arr)
{
    $max    = 0;
    $min    = 0;
    $j      = count($arr);

    //sort array
    sort($arr);

    for ($i = 0; $i < $j; $i++) {
        if ($i > 0) {
            $max += $arr[$i];
        }
        if ($i <= $j - 2) {
            $min += $arr[$i];
        }

    }

    echo $min . ' ' . $max;
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);

fclose($stdin);
