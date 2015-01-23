<?php 
$I = new FunctionalGirl($scenario);
$I->wantToTest('FizzBuzz');

$I->amGoingTo("FizzBuzzを実行する");
$I->runShellCommand('php src/index.php');

$I->expect("100までのFizzBuzzがコンソールに出力されていること");
$I->seeInShellOutput("1\n2\nFizz\n4");
$I->seeInShellOutput("97\n98\nFizz\nBuzz");
