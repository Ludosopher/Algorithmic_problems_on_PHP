<?php

/*
 Простые делители числа 13195 - это 5, 7, 13 и 29. Каков самый большой делитель числа, являющийся простым числом?
 * */

primeNumDivisor_present(600851475143);


function primeNumDivisor_basic($number, $i = 3) // Поиск простого числа, являющегося наибольшим делителем заявленного числа.
{
    while (true) {

        if ($i >= sqrt($number) && $number % 2 !== 0) {
            echo "{$number} является самым большим простым числом делителем заявленного числа!";
            exit;
        }
        if ($i >= sqrt($number) && $number % 2 == 0 && $number % $i == 0) {
            echo "{$i} является самым большим простым числом делителем заявленного числа!";
            exit;
        }

        if ($i >= sqrt($number) && $number % 2 == 0 && $number % $i !== 0) {
            echo "1 является единственным простым числом делителем заявленного числа!";
            exit;
        }

        if ($number % $i == 0) {
            primeNumDivisor_basic($number/$i, $i + 2);
        }

        $i+=2;
    }

    if ($number == 1 || $number == 2) {
        echo "{$number} является самым большим простым числом делителем заявленного числа!";
    }
}

function primeNumDivisor_present($number)
{
   echo "Заявляемое число - {$number}. <br>";
   primeNumDivisor_basic($number);
}