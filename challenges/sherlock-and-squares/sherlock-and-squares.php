<?php

// Complete the squares function below.
function squares($a, $b)
{
    return (floor(sqrt($b)) - ceil(sqrt($a))+1);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $q);

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    fscanf($stdin, "%[^\n]", $ab_temp);
    $ab = explode(' ', $ab_temp);

    $a = intval($ab[0]);

    $b = intval($ab[1]);

    $result = squares($a, $b);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);

/*
For our case, look at the graph of y = x2. For each point y of the graph, there is an x, square of which will give the graph value (y). This x can be found with inverse function, sqrt(x).

For the interval [a,b] for y, all x which give the y point in [a,b] lay in the [sqrt(a), sqrt(b)] interval. This follows from the definitions of function and inverse function.

So, to count all whole y from [a,b], we need just to count all whole x from [ceil(sqrt(a)), floor(sqrt(b))]. (ceil(x) gives closest high integer for x, floor(x) gives closest lower integer for x - see Topics tab). For interval [m, n] (m,n are whole, including endpoints m, n), the number of integers in it is (n - m) + 1. This gives us the solution.

We can generalise this: all whole numbers of f(x) in [a,b] can be counted as:
floor(f-1(b)) - ceil(f-1(a)) + 1
*/
