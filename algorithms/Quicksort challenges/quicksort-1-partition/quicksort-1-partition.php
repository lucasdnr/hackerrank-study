<?php

// Complete the quickSort function below.
function quickSort($arr)
{
    $c            = count($arr);
    $pivot        = $arr[0];
    $temp         = 0;
    for ($i = 1; $i < $c; $i++) {
        if ($pivot > $arr[$i]) {
            for ($j = $i; $j > 0; $j--) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j - 1];
                $arr[$j - 1] = $temp;
            }
        }
    }
    return $arr;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = quickSort($arr);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($stdin);
fclose($fptr);
