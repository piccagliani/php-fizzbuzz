<?php

namespace FizzBuzz;

class FizzBuzzTest extends \Codeception\TestCase\Test
{
    use \Codeception\Specify;

    /**
     * @var \UnitGirl
     */
    protected $girl;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testFizzbuzz()
    {
        $fizzbuzz = new FizzBuzz();

        $this->specify('3の倍数を与えるとFizzを返す', function () use ($fizzbuzz) {
            $this->assertEquals('Fizz', $fizzbuzz->fizzbuzz(3));
            $this->assertEquals('Fizz', $fizzbuzz->fizzbuzz(3));
            $this->assertEquals('Fizz', $fizzbuzz->fizzbuzz(3));
        });

        $this->specify('5の倍数を与えるとBuzzを返す', function () use ($fizzbuzz) {
            $this->assertEquals('Buzz', $fizzbuzz->fizzbuzz(5));
            $this->assertEquals('Buzz', $fizzbuzz->fizzbuzz(10));
            $this->assertEquals('Buzz', $fizzbuzz->fizzbuzz(20));
        });

        $this->specify('15の倍数を与えるとBuzzを返す', function () use ($fizzbuzz) {
            $this->assertEquals('FizzBuzz', $fizzbuzz->fizzbuzz(15));
            $this->assertEquals('FizzBuzz', $fizzbuzz->fizzbuzz(30));
            $this->assertEquals('FizzBuzz', $fizzbuzz->fizzbuzz(45));
        });

        $this->specify('3の倍数でも5の倍数でもない数を与えるとその数を返す', function () use ($fizzbuzz) {
            $this->assertEquals(1, $fizzbuzz->fizzbuzz(1));
            $this->assertEquals(4, $fizzbuzz->fizzbuzz(4));
            $this->assertEquals(8, $fizzbuzz->fizzbuzz(8));
        });
    }

}