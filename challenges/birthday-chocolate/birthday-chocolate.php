<?php

// Complete the birthday function below.
function birthday($s, $d, $m)
{
    $j      = count($s);
    $sum    = 0;
    $count  = 0;
 
    for ($i = 0; $i < $j; $i++) {
        $sum = $s[$i];
        if ($i != ($j - 1)) {
            for ($k = 1; $k < $m; $k++) {
                $sum += $s[$i + $k];
            }
        }
        if ($sum == $d) {
            $count++;
        }
    }

    return $count;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$s_temp = rtrim(fgets(STDIN));

$s = array_map('intval', preg_split('/ /', $s_temp, -1, PREG_SPLIT_NO_EMPTY));

$dm = explode(' ', rtrim(fgets(STDIN)));

$d = intval($dm[0]);

$m = intval($dm[1]);

$result = birthday($s, $d, $m);

fwrite($fptr, $result . "\n");

fclose($fptr);
