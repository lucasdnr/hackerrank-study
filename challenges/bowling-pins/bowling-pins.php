<?php
function calculateMex($arr)
{
    $mex = 0;
    while (isset($arr[$mex])) {
        $mex++;
    }
    return $mex;
}

function calculateGrundy($n)
{
    global $nim;

    if ($n == 0) {
        $nim[0] = 0;
        return 0;
    }
    if ($n == 1) {
        $nim[1] = 1;
        return (1);
    }
    if ($n == 2) {
        $nim[2] = 2;
        return (2);
    }
    if ($n == 3) {
        $nim[3] = 3;
        return (3);
    }
    for ($i = 1, $j = 0, $k = 0; $i <= $n; $i++) {
        if ($i <= $n / 2) {
            $x = calculateGrundy($j);
            $y = calculateGrundy($n - $j - 2);
            $j++;
        } else {
            $x = calculateGrundy($k);
            $y = calculateGrundy($n - $k - 1);
            $k++;
        }
        $list[] = $x ^ $y;
    }
    $nim[$n] = calculateMex($list);
    return $nim[$n];
}
function isWinning($n, $config)
{
    $count  = 0;
    $result = 0;
    $arr    = str_split($config);
    $j      = count($arr);

    for ($i = 0; $i < $j; $i++) {
        if ($arr[$i] == 'I') {
            $count++;
        } else {
            if ($count != 0) {
                $list[] = $count;
            }
            $count = 0;
        }
    }
    if ($count > 0) {
        $list[] = $count;
    }

    $j      = count($list);
    for ($i = 0; $i < $j; $i++) {
        $result ^= calculateGrundy($list[$i]);
    }

    if ($result <= 0) {
        return 'LOSE';
    } else {
        return 'WIN';
    }
}


$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $t);

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    fscanf($stdin, "%d\n", $n);

    fscanf($stdin, "%[^\n]", $config);

    $result = isWinning($n, $config);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);





// 10
// 10
// IIXXIIIIII
// 5
// IXIXI
// 6
// XXIXXI
// 5
// IIXII
// 6
// XIIIII
// 8
// XIXIIXII
// 6
// IIXIII
// 5
// IXXXX
// 7
// IXIXIII
// 10
// XIIIXIXXIX




// WIN

// WIN

// LOSE

// LOSE

// WIN

// WIN

// WIN

// WIN

// WIN

// WIN

