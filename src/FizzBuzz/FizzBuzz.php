<?php
namespace FizzBuzz;

class FizzBuzz
{
    public function generate($max)
    {
        $result = [];
        for ($i = 1; $i <= $max; $i++) {
            $result[] = $this->fizzbuzz($i);
        }
        return $result;
    }

    public function fizzbuzz($n)
    {
        if (($n % 3 === 0) && ($n % 5 === 0)) {
            return 'FizzBuzz';
        } else if ($n % 3 === 0) {
            return 'Fizz';
        } else if ($n % 5 === 0) {
            return 'Buzz';
        } else {
            return $n;
        }
    }
}