<?php

/*
 * Complete the timeConversion function below.
 */
function timeConversion($s)
{
    $period = substr($s, -2, 2);
    $hour   = substr($s, 0, 2);
    $rest   = substr($s, 2, -2);

    if ($period == 'PM' && (int) $hour < 12) {
        return (int) $hour + 12 . $rest;
    } else if ($period == 'AM' && (int) $hour == 12) {
        return '00' . $rest;
    } else {
        return $hour . $rest;
    }
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%[^\n]", $s);

$result = timeConversion($s);

fwrite($fptr, $result . "\n");

fclose($__fp);
fclose($fptr);
