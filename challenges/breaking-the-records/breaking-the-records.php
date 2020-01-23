<?php
// Complete the breakingRecords function below.
function breakingRecords($scores)
{

    $j          = count($scores);
    $high       = 0;
    $high_count = 0;
    $low        = 0;
    $low_count  = 0;

    for ($i = 0; $i < $j; $i++) {
        if ($scores[$i] > $high) {
            $high = $scores[$i];
            if ($i > 0) $high_count++;
        }

        if ($i == 0) {
            $low = $scores[$i];
        } else {
            if ($scores[$i] < $low) {
                $low = $scores[$i];
                $low_count++;
            }
        }
    }

    return array($high_count, $low_count);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $scores_temp);

$scores = array_map('intval', preg_split('/ /', $scores_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = breakingRecords($scores);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($stdin);
fclose($fptr);
