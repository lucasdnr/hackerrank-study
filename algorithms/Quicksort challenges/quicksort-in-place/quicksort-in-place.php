<?php
function partition(&$arr, $low, $high)
{
    $pivot  = $arr[$high];
    $i      = $low;
    $temp   = 0;

    for ($j = $low; $j <= $high; $j++) {
        if ($arr[$j] < $pivot) {
            $temp       = $arr[$i];
            $arr[$i]    = $arr[$j];
            $arr[$j]    = $temp;
            $i++;
        }
    }

    $temp           = $arr[$i];
    $arr[$i]        = $arr[$high];
    $arr[$high]     = $temp;

    echo implode(' ', $arr), PHP_EOL;
    return $i;
}
// Complete the quickSort function below.
function quickSort(&$arr, $low, $high)
{
    if ($low < $high) {
        $p = partition($arr, $low, $high);
        quicksort($arr, $low, $p - 1);
        quicksort($arr, $p + 1, $high);
    }
    return $arr;
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$j = count($arr);

quickSort($arr, 0, $j - 1);

fclose($stdin);
