<?php

// Complete the fairRations function below.
function fairRations($B)
{
    $count  = 0;
    $sum    = 0;
    $j      = count($B);
    $A      = $B;

    for ($i = 0; $i < $j; $i++) {
        $sum += $A[$i];
        if ($B[$i] % 2 != 0) {
            $B[$i] += 1;
            if (isset($B[$i + 1])) {
                $B[$i + 1] += 1;
                $count += 2;
            } else {
                $count += 1;
            }
        }
    }

    if ($sum % 2 == 1) $count = 'NO';

    return $count;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $N);

fscanf($stdin, "%[^\n]", $B_temp);

$B = array_map('intval', preg_split('/ /', $B_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = fairRations($B);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
