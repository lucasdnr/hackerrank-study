<?php

// Complete the dayOfProgrammer function below.
function dayOfProgrammer($year)
{
    $d          = 0;
    $m          = '09';
    $y          = $year;
    $months     = 215; //total of days (Jan, March, April, May, Jun, Jul, Aug)

    if ($year < 1918) { //julian
        if ($year % 4 == 0) { //leap year
            $months += 29;
        } else {
            $months += 28;
        }
    } elseif ($year == 1918) {
        $d = 26;
    } else { //gregorian
        if ($year % 400 == 0 || ($year % 4 == 0 && $year % 100 != 0)) { //leap year
            $months += 29;
        } else {
            $months += 28;
        }
    }

    if ($d == 0) {
        $d = 256 - $months;
    }

    return $d . '.' . $m . '.' . $y;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$year = intval(trim(fgets(STDIN)));

$result = dayOfProgrammer($year);

fwrite($fptr, $result . "\n");

fclose($fptr);
