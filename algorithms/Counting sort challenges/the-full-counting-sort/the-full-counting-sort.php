<?php

// Complete the countSort function below.
function countSort($arr)
{
}

$n = intval(trim(fgets(STDIN)));

$arr == array();

for ($i = 0; $i < $n; $i++) {
    $arr_temp = rtrim(fgets(STDIN));

    $arr[] = preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY);
}

countSort($arr);
