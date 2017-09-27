<?php

use App\Fibonacci;

class NumbersApiTest extends TestCase {

    public function testFibonacciSuccess() {
        $this->get('/api/v1/fibonacci?count=4')
            ->seeJsonEquals([0, 1, 1, 2]);
    }

    public function testFibonacciFailure() {

        $badData = ['-123', 'abcdef', '#!%(!@#";'];

        foreach ($badData as $bd) {
            $this->get('/api/v1/fibonacci?count=' . $bd)
                ->seeStatusCode(422);
        }
    }
}
