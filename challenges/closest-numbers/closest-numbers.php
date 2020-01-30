<?php

// Complete the closestNumbers function below.
function closestNumbers($arr)
{
    $j          = count($arr);
    $diff       = 0;
    $minDiff    = 0;
    $out        = array();

    sort($arr);

    for ($i = 0; $i < $j; $i++) {
        if ($i < $j - 1) {
            $diff = abs($arr[$i] - $arr[$i + 1]);
            //first time
            if ($i == 0) {
                $minDiff = $diff;
            }
            if ($diff < $minDiff) {
                unset($out);
                $out[] = $arr[$i];
                $out[] = $arr[$i + 1];
                $minDiff = $diff;
            } elseif ($diff == $minDiff) {
                $out[] = $arr[$i];
                $out[] = $arr[$i + 1];
            }
        }
    }
    return $out;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = closestNumbers($arr);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($stdin);
fclose($fptr);
