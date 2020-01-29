<?php
function partition(&$arr, $low, $high, &$count)
{
    $pivot  = $arr[$high];
    $i      = $low;
    $temp   = 0;

    for ($j = $low; $j <= $high; $j++) {
        if ($arr[$j] < $pivot) {
            $temp       = $arr[$i];
            $arr[$i]    = $arr[$j];
            $arr[$j]    = $temp;
            $i++;
            $count++;
        }
    }

    $temp           = $arr[$i];
    $arr[$i]        = $arr[$high];
    $arr[$high]     = $temp;
    $count++;

    return $i;
}
// Complete the quickSort function below.
function quickSortInPlace(&$arr, $low, $high, &$count)
{

    if ($low < $high) {
        $p = partition($arr, $low, $high, $count);
        quickSortInPlace($arr, $low, $p - 1, $count);
        quickSortInPlace($arr, $p + 1, $high, $count);
    }
    return $arr;
}

// Complete the insertionSort function below.
function insertionSort($arr)
{
    $next   = 0;
    $count  = 0;
    $n      = count($arr);
    for ($i = 1; $i < $n; $i++) {
        $next = $arr[$i];
        for ($j = $i - 1; $j >= 0; $j--) {
            if ($arr[$j] > $next) {
                $arr[$j + 1] = $arr[$j];
                $count++;
            } else {
                break;
            }
        }
        $arr[$j + 1] = $next;
    }

    return $count;
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = $originArr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$j                  = count($arr);
$countInPlace       = 0;
$countInsertion     = 0;

quickSortInPlace($arr, 0, $j - 1, $countInPlace);

$countInsertion = insertionSort($originArr);

echo $countInsertion - $countInPlace;

fclose($stdin);
