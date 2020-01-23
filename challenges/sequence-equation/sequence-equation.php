<?php

// Complete the permutationEquation function below.
function permutationEquation($p)
{

    $j      = count($p);
    $arr    = array();
    $result = array();

    for ($i = 0; $i < $j; $i++) {
        $arr[$p[$i]] = $i + 1;
    }

    asort($p);
    foreach ($p as $key => $value) {
        $result[] = $arr[$key + 1];
    }

    return $result;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $p_temp);

$p = array_map('intval', preg_split('/ /', $p_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = permutationEquation($p);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($stdin);
fclose($fptr);


// int main() {
//     #ifdef LOCAL
//     assert(freopen("test.in", "r", stdin));
//     #endif
//     int n;
//     cin >> n;
//     int p[100];
//     for (int i = 1; i <= n; ++i)
//         cin >> p[i];
//     int ans[100];
//     for (int i = 1; i <= n; ++i)
//         ans[p[p[i]]] = i;
//     for (int i = 1; i <= n; ++i)
//         cout << ans[i] << '\n';
// }