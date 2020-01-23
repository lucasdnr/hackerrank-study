<?php

// Complete the designerPdfViewer function below.
function designerPdfViewer($h, $word)
{
    $alpha_map = array(
        'a' => 0,
        'b' => 1,
        'c' => 2,
        'd' => 3,
        'e' => 4,
        'f' => 5,
        'g' => 6,
        'h' => 7,
        'i' => 8,
        'j' => 9,
        'k' => 10,
        'l' => 11,
        'm' => 12,
        'n' => 13,
        'o' => 14,
        'p' => 15,
        'q' => 16,
        'r' => 17,
        's' => 18,
        't' => 19,
        'u' => 20,
        'v' => 21,
        'w' => 22,
        'x' => 23,
        'y' => 24,
        'z' => 25
    );

    $len    = 0;
    $pos    = 0;
    $max    = 0;
    $arr    = str_split($word);
    $j      = count($arr);

    for ($i = 0; $i < $j; $i++) {
        $pos = $alpha_map[$arr[$i]];
        $len =  $h[$pos];
        if ($len > $max) {
            $max = $len;
        }
    }

    return $max * $j;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $h_temp);

$h = array_map('intval', preg_split('/ /', $h_temp, -1, PREG_SPLIT_NO_EMPTY));

$word = '';
fscanf($stdin, "%[^\n]", $word);

$result = designerPdfViewer($h, $word);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
