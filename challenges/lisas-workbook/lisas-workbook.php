<?php

// Complete the workbook function below.
function workbook($n, $k, $arr)
{

    // n: an integer that denotes the number of chapters
    // k: an integer that denotes the maximum number of problems per page
    // arr: an array of integers that denote the number of problems in each chapter
    $page       = 1;
    $result     = 0;
    $problem    = 1;
    $j          = count($arr);

    for ($i = 0; $i < $j; $i++) {
        for ($problem = 1; $problem <= $arr[$i]; $problem++) {
            if ($problem == $page) {
                $result++;
            }
            if (($problem % $k == 0) || ($problem == $arr[$i])) {
                $page++;
            }
        }
    }
    return $result;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $nk_temp);
$nk = explode(' ', $nk_temp);

$n = intval($nk[0]);

$k = intval($nk[1]);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = workbook($n, $k, $arr);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);


// 25 10

// 1 29 94 15 87 100 20 55 100 45 82 80 100 100 3 53 100 2 100 100 100 100 100 100 1

//11


#include<bits/stdc++.h>
using namespace std;
int main() {
    int n, k;
    scanf("%d%d", &n, &k);
    int answer = 0;
    int page = 1;
    for(int chapter = 1; chapter <= n; ++chapter) {
        int problems;
        scanf("%d", &problems);
        for(int index = 1; index <= problems; ++index) {
            if(index == page)
                answer++;
            if(index == problems || index % k == 0)
                ++page;
        }
    }
    printf("%d\n", answer);
    return 0;
}