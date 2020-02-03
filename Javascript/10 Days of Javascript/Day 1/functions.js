'use strict';

process.stdin.resume();
process.stdin.setEncoding('utf-8');

let inputString = '';
let currentLine = 0;

process.stdin.on('data', inputStdin => {
    inputString += inputStdin;
});

process.stdin.on('end', _ => {
    inputString = inputString.trim().split('\n').map(string => {
        return string.trim();
    });

    main();
});

function readLine() {
    return inputString[currentLine++];
}
/*
 * Create the function factorial here
 */
function factorial(n) {
    // Recursive Case
    if (n > 1) {
        return n * factorial(n - 1);
    }
    // Base Case n = 1
    else {
        return n;
    }
}

function main() {
    const n = +(readLine());

    console.log(factorial(n));
}