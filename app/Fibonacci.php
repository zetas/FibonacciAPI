<?php

namespace App;

class Fibonacci {

    /**
     * Output Fibonacci number array up to given count.
     *
     * @param int $count
     * @return array
     */
    public static function output($count) {

        if (!is_numeric($count) || $count <= 0) {
            throw new \InvalidArgumentException('Invalid Fibonacci Count');
        }

        // Found this algorithm on stack. I don't think it's smart to re-invent the wheel.
        $fib = [0, 1];

        for ($i = 1; $i < $count-1; $i++) {
            $fib[] = $fib[$i] + $fib[$i - 1];
        }

        return $fib;
    }
}
