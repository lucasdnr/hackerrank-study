<?php
// Complete the countingSort function below.
function countSort($fp, $n)
{
    $resultSort     = array();
    $out            = array();
    $arr            = array();
    $arrTemp        = array();
    $arrSort        = array();
    $count          = 0;

    while ($arr = trim(fgets($fp))) {
        $count++;
        list($a, $t) = explode(' ', $arr);
        if ($count <= $n / 2) {
            $t = '-';
        }
        $arrTemp[(int) $a][] = $t;
        $arrSort[] = $a;
    }

    //sort array
    for ($i = 0; $i < 100; $i++) {
        if (!isset($resultSort[$i]))
            $resultSort[$i] = 0;
    }

    $j      = count($arrSort);
    for ($i = 0; $i < $j; $i++) {
        if (!isset($resultSort[$arrSort[$i]]))
            $resultSort[$arrSort[$i]] = 1;
        else
            $resultSort[$arrSort[$i]]++;
    }

    $c      = count($resultSort);
    $j      = 0;

    for ($i = 0; $i < $c; $i++) {
        for ($j = 0; $j < $resultSort[$i]; $j++) {
            if (isset($arrTemp[$i][$j]))
                $out[] = $arrTemp[$i][$j];
        }
    }

    return $out;
}

$fp = fopen("php://stdin", "r");

$n = intval(trim(fgets($fp)));

$result = countSort($fp, $n);

echo implode(' ', $result);
