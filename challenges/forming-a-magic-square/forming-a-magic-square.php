<?php

// Complete the formingMagicSquare function below.
function formingMagicSquare($s)
{
    $all = array(
        [8, 1, 6, 3, 5, 7, 4, 9, 2],
        [6, 1, 8, 7, 5, 3, 2, 9, 4],
        [4, 9, 2, 3, 5, 7, 8, 1, 6],
        [2, 9, 4, 7, 5, 3, 6, 1, 8],
        [8, 3, 4, 1, 5, 9, 6, 7, 2],
        [4, 3, 8, 9, 5, 1, 2, 7, 6],
        [6, 7, 2, 1, 5, 9, 8, 3, 4],
        [2, 7, 6, 9, 5, 1, 4, 3, 8]
    );

    $cost       = 0;
    $min_cost   = 0;
    $c_all      = count($all);

    for ($i = 0; $i < $c_all; $i++) {
        foreach ($all[$i] as $key => $value) {
            $cost += abs($value - $s[$key]);
        }

        if ($i == 0) {
            $min_cost = $cost;
        } else {
            if ($min_cost > $cost) {
                $min_cost = $cost;
            }
        }
        $cost = 0;
    }

    return $min_cost;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

$s      = array();
$arr    = array();

for ($i = 0; $i < 3; $i++) {
    fscanf($stdin, "%[^\n]", $s_temp);
    // $s[] = array_map('intval', preg_split('/ /', $s_temp, -1, PREG_SPLIT_NO_EMPTY));
    $s = array_map('intval', preg_split('/ /', $s_temp, -1, PREG_SPLIT_NO_EMPTY));
    $arr = array_merge($arr, $s);
}

$result = formingMagicSquare($arr);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
