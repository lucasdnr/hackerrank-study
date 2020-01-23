<?php

// Complete the stones function below.
function stones($n, $a, $b)
{
    // - The first line contains , the number of non-zero stones found.
    // - The second line contains , one possible difference
    // - The third line contains , the other possible difference. 

    $stones = array();
    for ($i = 0; $i < $n; $i++) {
        $temp = ($a * $i) + $b * ($n - 1 - $i);
        if (!in_array($temp, $stones)) {
            $stones[] = $temp;
        }
    }
    sort($stones);
    return $stones;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $T);

for ($T_itr = 0; $T_itr < $T; $T_itr++) {
    fscanf($stdin, "%d\n", $n);

    fscanf($stdin, "%d\n", $a);

    fscanf($stdin, "%d\n", $b);

    $result = stones($n, $a, $b);

    fwrite($fptr, implode(" ", $result) . "\n");
}

fclose($stdin);
fclose($fptr);
