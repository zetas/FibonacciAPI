<?php

use App\Fibonacci;

class NumbersTest extends TestCase {

    public function testFibonacciSuccess() {
        $fib = Fibonacci::output(4);

        $this->assertEquals([0, 1, 1, 2], $fib);
    }

    public function testFibonacciFailure() {
        $this->expectException('\InvalidArgumentException');

        Fibonacci::output('abc');
    }
}
