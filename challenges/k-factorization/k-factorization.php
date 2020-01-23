<?php

function getFactor($n, $A)
{
    global $steps;
    if ($n == 1){
        return 1;
    }elseif (empty($A)) {
        $steps = array(1);
        return -1;
    }

    $d = array_pop($A);
    if ($n % $d == 0) {
        $steps[] = $n;
        $n = $n / $d;
        array_push($A, $d);
    }
    return getFactor($n, $A);
}

// Complete the kFactorization function below.
function kFactorization($n, $A)
{
    global $steps;
    sort($A);
    do {
        $factor = getFactor($n, $A);
        break;
        if ($factor == -1) {
            array_pop($A);
            $steps == array(1);
        }
        if ($factor == 1)
            break;
    } while (sizeof($A) > 0);

    if (sizeof($steps) == 1)
        return array(-1);
    else {
        sort($steps);
        return $steps; //echo implode(" ", $steps) . "\n";
    }
}
$steps = array(1);

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $nk_temp);
$nk = explode(' ', $nk_temp);

$n = intval($nk[0]);

$k = intval($nk[1]);

fscanf($stdin, "%[^\n]", $A_temp);

$A = array_map('intval', preg_split('/ /', $A_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = kFactorization($n, $A);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($stdin);
fclose($fptr);
