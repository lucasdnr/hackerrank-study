<?php

// Complete the insertionSort1 function below.
function printArray($arr)
{
    foreach ($arr as $key => $value) {
        echo $value . " ";
    }
    echo "\n";
}
function insertionSort1($n, $arr)
{

    $next = 0;

    for ($i = 1; $i < $n; $i++) {
        $next = $arr[$i];
        for ($j = $i - 1; $j >= 0; $j--) {
            if ($arr[$j] > $next) {
                $arr[$j + 1] = $arr[$j];
                printArray($arr);
            } else {
                break;
            }
        }
        $arr[$j + 1] = $next;
    }
    printArray($arr);
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

insertionSort1($n, $arr);

fclose($stdin);
