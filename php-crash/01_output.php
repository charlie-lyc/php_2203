<?php
// echo 'Hello'
?>


<?php
echo '<br>';

// echo 'World' // Parse error

echo 'World';
echo '<br>';

// Single-line comment
/* 
    Multi-line comment
*/

/**
 * echo: output strings, numbers, html, etc
 */
echo 123, '<h1>Hi</h1>';

/**
 * print: work like echo, but only take in a single argument and a bit slower
 */
print 456;
echo '<br>';

/**
 * print_r(): print single values and arrays and give a bit more info
 *         
 */
// print_r([7, 8, 9]);
// echo '<br>';

print_r(7);
echo '<br>';

// print_r(7, 8, 9); // Fatal error

/**
 * var_dump: return more info like data type and length
 */
var_dump(123);
echo '<br>';

var_dump('hi');
echo '<br>';

var_dump(true);
echo '<br>';

var_dump([7, 8, 9]);
echo '<br>';

/**
 * var_export(): similar to var_dump()
 *               output a string representation of a variable
 */
var_export(123);
echo '<br>';

var_export('hi');
echo '<br>';

var_export(true);
echo '<br>';

var_export([7, 8, 9]);
echo '<br>';

/**
 * Escaping characters with a backslash
 */
echo 'Is your name O\'reilly?';
