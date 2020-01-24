<?php

// Complete the introTutorial function below.
function introTutorial($V, $arr)
{
    $j      = count($arr);
    $value  = 0;
    for ($i = 0; $i < $j; $i++) {
        if ($arr[$i] == $V) {
            $value = $i;
            break;
        }
    }

    return $value;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $V);

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = introTutorial($V, $arr);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);


// url: https://www.hackerrank.com/challenges/tutorial-intro/problem
