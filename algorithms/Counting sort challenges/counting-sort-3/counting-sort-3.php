<?php

// Complete the countingSort function below.
function countingSort($fp)
{
    $result = array();
    $out    = array();
    $arr    = array();
    $sum    = 0;

    while ($arr = trim(fgets($fp))) {
        list($a, $t) = explode(' ', $arr);
        if (!isset($result[(int) $a]))
            $result[(int) $a] = 1;
        else
            $result[(int) $a]++;
    }

    for ($i = 0; $i < 100; $i++) {
        if (isset($result[$i]))
            $sum += $result[$i];
        $out[$i] = $sum;
    }

    return $out;
}

$fp = fopen("php://stdin", "r");

$n = intval(trim(fgets($fp)));

$result = countingSort($fp);

echo implode(' ', $result);
