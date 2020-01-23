<?php

// Complete the jumpingOnClouds function below.
function jumpingOnClouds($c)
{
    $j      = count($c);
    $jumps  = 0;
    $i      = 0;

    while(true){
        if($i + 2 < $j && $c[$i + 2] == 0) {
            $i += 2;
        } else if($i + 1 < $j && $c[$i + 1] == 0) {
            $i++;
        } else {
            break;
        }
        $jumps++;
    }

    return $jumps;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $c_temp);

$c = array_map('intval', preg_split('/ /', $c_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = jumpingOnClouds($c);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
