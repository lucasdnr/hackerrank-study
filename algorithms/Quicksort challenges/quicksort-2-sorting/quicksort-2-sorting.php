<?php


function  quickSort($ar)
{
    $loe    = array();
    $gt     = array();
    $return = array();

    if (count($ar) < 2) {
        return $ar;
    }
    $pivot_key = key($ar);
    $pivot = array_shift($ar);
    foreach ($ar as $val) {
        if ($val <= $pivot) {
            $loe[] = $val;
        } elseif ($val > $pivot) {
            $gt[] = $val;
        }
    }

    $return = array_merge(quickSort($loe), array($pivot_key => $pivot), quickSort($gt));
    echo implode(' ', $return), PHP_EOL;
    return $return;
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

quickSort($arr);
