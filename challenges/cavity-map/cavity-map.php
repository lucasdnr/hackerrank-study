<?php

// Complete the cavityMap function below.
function cavityMap($grid)
{
    $size = count($grid);

    for ($i = 1; $i < $size - 1; $i++) { //ignore first and last item
        for ($j = 1; $j < $size - 1; $j++) {
            if (
                $grid[$i][$j] > $grid[$i][$j + 1] &&
                $grid[$i][$j] > $grid[$i][$j - 1] &&
                $grid[$i][$j] > $grid[$i + 1][$j] &&
                $grid[$i][$j] > $grid[$i - 1][$j]
            ) {
                $grid[$i][$j] = 'X';
            }
        }
    }
    return $grid;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

$grid = array();

for ($i = 0; $i < $n; $i++) {
    $grid_item = '';
    fscanf($stdin, "%[^\n]", $grid_item);
    $grid[] = $grid_item;
}

$result = cavityMap($grid);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($stdin);
fclose($fptr);
