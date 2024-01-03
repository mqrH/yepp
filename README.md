<?php

function fibonacci($n) {
    $fib_sequence = [0, 1];

    for ($i = 2; $i < $n; $i++) {
        $fib_sequence[] = $fib_sequence[$i - 1] + $fib_sequence[$i - 2];
    }

    return $fib_sequence;
}

$number = 10;
$fibonacci_sequence = fibonacci($number);

echo "послідовність з $number чисел - ";
echo implode(", ", $fibonacci_sequence) . "\n";

function sumnumbers() {
    $fibonacci = [0, 1];

    for ($i = 2; $i < 10; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    return array_sum($fibonacci);
}

$result = sumnumbers();
echo "Сума перших 10 чисел Фібоначчі: $result";
