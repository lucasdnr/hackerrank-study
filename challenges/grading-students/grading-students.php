<?php

/*
 * Complete the 'gradingStudents' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY grades as parameter.
 */

function gradingStudents($grades)
{
    $result     = array();
    $j          = count($grades);
    $number     = 0;
    $diff       = 0;

    for ($i = 0; $i < $j; $i++) {
        if ($grades[$i] >= 38) {
            $number     = $grades[$i];
            $run        = true;
            while ($run) {
                $number++;
                if ($number % 5 == 0) {
                    $diff = $number - $grades[$i];
                    if ($diff < 3) {
                        $result[] = $number;
                    } else {
                        $result[] = $grades[$i];
                    }
                    $run = false;
                }
            }
        } else {
            $result[] = $grades[$i];
        }
    }

    return $result;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$grades_count = intval(trim(fgets(STDIN)));

$grades = array();

for ($i = 0; $i < $grades_count; $i++) {
    $grades_item = intval(trim(fgets(STDIN)));
    $grades[] = $grades_item;
}

$result = gradingStudents($grades);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($fptr);
