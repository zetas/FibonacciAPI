<?php

class NumbersApiTest extends TestCase {

    private $_badData = ['-123', 'abcdef', '!%(!@#";'];

    public function testFibonacciSuccess() {
        $this->get('/api/v1/fibonacci/sequence?count=4')
            ->seeJsonEquals([0, 1, 1, 2]);

        $this->get('/api/v1/fibonacci/5')
            ->seeJson([3]);
    }

    public function testFibonacciFailure() {
        foreach ($this->_badData as $bd) {
            $this->get('/api/v1/fibonacci/sequence?count=' . $bd)
                ->seeStatusCode(422);
            $this->get('/api/v1/fibonacci/' . $bd)
                ->seeStatusCode(422);
        }
    }
}
