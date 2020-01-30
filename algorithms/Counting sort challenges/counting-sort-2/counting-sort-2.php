<?php

// Complete the countingSort function below.
function countingSort($arr, $n)
{
    $result = array();
    $final  = array();
    $j      = count($arr);

    for ($i = 0; $i < 100; $i++) {
        if (!isset($result[$i]))
            $result[$i] = 0;
    }
    for ($i = 0; $i < $j; $i++) {
        if (!isset($result[$arr[$i]]))
            $result[$arr[$i]] = 1;
        else
            $result[$arr[$i]]++;
    }

    $c      = count($result);
    $j      = 0;
    for ($i = 0; $i < $c; $i++) {
        for ($j = 0; $j < $result[$i]; $j++) {
            $final[] = $i;
        }
    }

    return $final;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = countingSort($arr, $n);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($stdin);
fclose($fptr);
