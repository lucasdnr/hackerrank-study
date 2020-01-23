<?php

/*
 * Complete the 'pickingNumbers' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY a as parameter.
 */

function pickingNumbers($a)
{
    $j          = count($a);
    $map        = array();
    $max        = 0;
    $max_number = 0;

    for ($i = 0; $i < $j; $i++) {
        if (isset($map[$a[$i]]))
            $map[$a[$i]]++;
        else
            $map[$a[$i]] = 1;

        if ($max_number < $a[$i]) $max_number = $a[$i];
    }

    $j      = count($map);
    if ($j == 1) {
        $max = $map[$max_number];
    } else {
        for ($i = 1; $i < $max_number; $i++) {
            if((!isset($map[$i - 1])) && isset($map[$i])){
                if ($map[$i] > $max)
                    $max = $map[$i];
            }else{
                if (isset($map[$i]) && isset($map[$i - 1])) {
                    if ($map[$i] + $map[$i - 1] > $max)
                        $max = $map[$i] + $map[$i - 1];
                }
            }
        }
    }

    return $max;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$a_temp = rtrim(fgets(STDIN));

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = pickingNumbers($a);

fwrite($fptr, $result . "\n");

fclose($fptr);