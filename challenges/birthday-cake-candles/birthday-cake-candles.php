<?php

// Complete the birthdayCakeCandles function below.
function birthdayCakeCandles($ar)
{
    $j          = count($ar);
    $max        = 0;
    $counter    = [];

    for ($i = 0; $i < $j; $i++) {
        if (isset($counter[$ar[$i]])) {
            $counter[$ar[$i]]++;
        } else {
            $counter[$ar[$i]] = 1;
        }

        //get the max value
        if ($max < $ar[$i]) {
            $max = $ar[$i];
        }
    }

    return $counter[$max];
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $ar_count);

fscanf($stdin, "%[^\n]", $ar_temp);

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = birthdayCakeCandles($ar);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
