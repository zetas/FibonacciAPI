<?php

namespace App;

class Fibonacci {

    /**
     * Output Fibonacci number array up to given count.
     *
     * @param int $count
     * @return array
     */
    public static function sequence($count) {

        self::_validate($count);

        // Found this algorithm on stack. I don't think it's smart to re-invent the wheel.
        $fib = [0, 1];

        for ($i = 1; $i < $count-1; $i++) {
            $fib[] = $fib[$i] + $fib[$i - 1];
        }

        return $fib;
    }

    public static function atNumber($number) {

        self::_validate($number);

        // Another existing algorithm thanks to slack.
        return (int) round(((5 ** .5 + 1) / 2) ** ($number-1) / 5 ** .5);
    }

    private static function _validate($number) {
        if (!is_numeric($number) || $number <= 0) {
            throw new \InvalidArgumentException('Invalid Fibonacci Argument');
        }
    }
}
