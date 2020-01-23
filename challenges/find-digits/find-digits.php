<?php

// Complete the findDigits function below.
function findDigits($n)
{
    $arr    = str_split($n);
    $j      = count($arr);
    $count  = 0;

    for ($i = 0; $i < $j; $i++) {
        if ($arr[$i] != 0) {
            if ((int) $n % (int) $arr[$i] == 0) {
                $count++;
            }
        }
    }

    return $count;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $t);

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    fscanf($stdin, "%d\n", $n);

    $result = findDigits($n);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);
