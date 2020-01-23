<?php

// Complete the plusMinus function below.
function plusMinus($arr)
{
    $j          = count($arr);
    $positive   = 0;
    $negative   = 0;
    $zero       = 0;

    for ($i = 0; $i < $j; $i++) {
        if ($arr[$i] > 0) {
            $positive++;
        } elseif ($arr[$i] < 0) {
            $negative++;
        } else {
            $zero++;
        }
    }

    if ($j > 0) {
        $positive = $positive / $j;
        $negative = $negative / $j;
        $zero     = $zero / $j;
    }

    echo number_format($positive, 6);
    echo ("\n");
    echo number_format($negative, 6);
    echo ("\n");
    echo number_format($zero, 6);
    echo ("\n");
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);

fclose($stdin);
