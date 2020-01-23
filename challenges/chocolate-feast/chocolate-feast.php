<?php

// Complete the chocolateFeast function below.
function chocolateFeast($n, $c, $m)
{

    // n: an integer representing Bobby's initial amount of money
    // c: an integer representing the cost of a chocolate bar
    // m: an integer representing the number of wrappers he can turn in for a free bar

    $chocolate  = (int)($n / $c);
    $count      = $chocolate;

    while ($chocolate >= $m) {
        $chocolate -= $m;
        $count++;
        $chocolate++;
    }

    return $count;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $t);

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    fscanf($stdin, "%[^\n]", $ncm_temp);
    $ncm = explode(' ', $ncm_temp);

    $n = intval($ncm[0]);

    $c = intval($ncm[1]);

    $m = intval($ncm[2]);

    $result = chocolateFeast($n, $c, $m);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);
