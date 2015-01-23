<?php
require_once __DIR__ . "/../vendor/autoload.php";

$fizzbuzz = new \FizzBuzz\FizzBuzz();
$result   = $fizzbuzz->generate(100);
foreach ($result as $r) {
    echo $r . "\n";
}