<?php

// Complete the cutTheSticks function below.
function cutTheSticks($arr)
{
    $result     = array();
    $min        = 0;
    sort($arr);
    while (!(empty($arr))) {
        $j      = count($arr);
        $min    = $arr[0];
        $result[] = $j;

        for ($i = 0; $i < $j; $i++) {
            $arr[$i] -= $min;
            if ($arr[$i] <= 0) {
                array_shift($arr);
                $i--;
                $j--;
            }
        }
    }

    return $result;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = cutTheSticks($arr);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($stdin);
fclose($fptr);
