<?php

// Complete the workbook function below.
function workbook($n, $k, $arr)
{

    // n: an integer that denotes the number of chapters
    // k: an integer that denotes the maximum number of problems per page
    // arr: an array of integers that denote the number of problems in each chapter
    $page       = 1;
    $result     = 0;
    $problem    = 1;
    $j          = count($arr);

    for ($i = 0; $i < $j; $i++) {
        for ($problem = 1; $problem <= $arr[$i]; $problem++) {
            if ($problem == $page) {
                $result++;
            }
            if (($problem % $k == 0) || ($problem == $arr[$i])) {
                $page++;
            }
        }
    }
    return $result;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $nk_temp);
$nk = explode(' ', $nk_temp);

$n = intval($nk[0]);

$k = intval($nk[1]);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = workbook($n, $k, $arr);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);