<?php

// Complete the runningTime function below.
function runningTime($arr)
{
    $next   = 0;
    $count  = 0;
    $n      = count($arr);
    for ($i = 1; $i < $n; $i++) {
        $next = $arr[$i];
        for ($j = $i - 1; $j >= 0; $j--) {
            if ($arr[$j] > $next) {
                $arr[$j + 1] = $arr[$j];
                $count++;
            } else {
                break;
            }
        }
        $arr[$j + 1] = $next;
    }

    return $count;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = runningTime($arr);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
