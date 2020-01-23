<?php

// Complete the countApplesAndOranges function below.
function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges)
{

    // s: integer, starting point of Sam's house location.
    // t: integer, ending location of Sam's house location.
    // a: integer, location of the Apple tree.
    // b: integer, location of the Orange tree.
    // apples: integer array, distances at which each apple falls from the tree.
    // oranges: integer array, distances at which each orange falls from the tree.

    $diff           = 0;
    $count_apple    = 0;
    $count_orange   = 0;
    $j              = count($apples);

    //apples
    for ($i = 0; $i < $j; $i++) {
        $diff = $a + $apples[$i];
        if ($s <= $diff && $t >= $diff) {
            $count_apple++;
        }
    }

    //oranges
    $j              = count($oranges);
    for ($i = 0; $i < $j; $i++) {
        $diff = $b + $oranges[$i];
        if ($s <= $diff && $t >= $diff) {
            $count_orange++;
        }
    }
    echo $count_apple;
    echo ("\n");
    echo $count_orange;
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $st_temp);
$st = explode(' ', $st_temp);

$s = intval($st[0]);

$t = intval($st[1]);

fscanf($stdin, "%[^\n]", $ab_temp);
$ab = explode(' ', $ab_temp);

$a = intval($ab[0]);

$b = intval($ab[1]);

fscanf($stdin, "%[^\n]", $mn_temp);
$mn = explode(' ', $mn_temp);

$m = intval($mn[0]);

$n = intval($mn[1]);

fscanf($stdin, "%[^\n]", $apples_temp);

$apples = array_map('intval', preg_split('/ /', $apples_temp, -1, PREG_SPLIT_NO_EMPTY));

fscanf($stdin, "%[^\n]", $oranges_temp);

$oranges = array_map('intval', preg_split('/ /', $oranges_temp, -1, PREG_SPLIT_NO_EMPTY));

countApplesAndOranges($s, $t, $a, $b, $apples, $oranges);

fclose($stdin);
