<?php

use App\Fibonacci;

class NumbersTest extends TestCase {

    public function testFibonacciSuccess() {
        $fibSeq = Fibonacci::sequence(4);
        $fibAt = Fibonacci::atNumber(4);

        $this->assertEquals([0, 1, 1, 2], $fibSeq);
        $this->assertEquals(2, $fibAt);
    }

    public function testFibonacciSequenceAlphaFailure() {
        $this->expectException('InvalidArgumentException');

        Fibonacci::sequence('abc');
    }

    public function testFibonacciSequenceNegativeFailure() {
        $this->expectException('InvalidArgumentException');

        Fibonacci::sequence(-5);
    }

    public function testFibonacciAtNumberAlphaFailure() {
        $this->expectException('InvalidArgumentException');

        Fibonacci::atNumber('abc');
    }

    public function testFibonacciAtNumberNegativeFailure() {
        $this->expectException('InvalidArgumentException');

        Fibonacci::atNumber(-5);
    }
}
