<?php
/* --------- PHP Data Types --------- */
/*
- String: series of characters surrounded by quotes\
- Integer: whole numbers
- Float: decimal numbers
- Boolean: true or false
- Array: special variable, which can hold more than one value
- Object: a class
- NULL: empty variable
- Resource: special variable that holds a resource
 */

 /* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = 'Charlie'; // string
$age = 45; // int
$cash_on_hand = 20.75; // float, double, real
$has_kids = false; // bool

var_dump($name, $age, $cash_on_hand, $has_kids);
echo '<br>';

// echo $name + ' is ' + (string)$age + ' years old.'; // Fatal Error

echo $name . ' is ' . $age . ' years old.';
echo '<br>';

echo "$name is $age years old.";
echo '<br>';

echo "${name} is ${age} years old.";
echo '<br>';

echo '5' + '5'; // 10
echo '<br>';

$x = '5' + '5';
var_dump($x); // int(10)
echo '<br>';

echo 5 + 5;
echo '<br>';

echo 10 - 5;
echo '<br>';

echo 10 * 5;
echo '<br>';

echo 10 / 5;
echo '<br>';

/**
 * Constants: cannot be changed
 */
define('HOST', 'localhost');
define('DB_NAME', 'dev_db');

echo HOST;
echo '<br>';
echo DB_NAME;