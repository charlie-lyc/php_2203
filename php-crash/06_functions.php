<?php

$x = 12;
function greet() {
    // echo $x, '<br>'; // Warning: Undefined variable $x
    $y = 10;
    echo 'Hello', '<br>';
}
echo $x, '<br>';
// echo $y, '<br>'; // Warning: Undefined variable $y
greet();


function registerUser($email) {
    echo $email . ' registered.' . '<br>';
}
// registerUser(); // Fatal error
registerUser('charlie@gmail.com');


function sum($n1, $n2) {
    return $n1 + $n2;
}
$number = sum(10, 5);
echo $number, '<br>';


function add($n1 = 5, $n2 = 3) {
    return $n1 + $n2;
}
echo add(), '<br>';


$subtract = function ($n1, $n2) {
    return $n1 - $n2;
};
echo $subtract(10, 5), '<br>';


$multiply = fn ($n1, $n2) => $n1 * $n2;
echo $multiply(10, 5), '<br>';