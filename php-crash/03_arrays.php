<?php
/**
 * Simple array
 */
$numbers = [ 1, 22, 333 ];
$fruits = array('apple', 'orange', 'pear');

var_dump($numbers);
echo '<br>';

var_dump($fruits);
echo '<br>';

echo $fruits[0];
echo '<br>';

echo $fruits[1];
echo '<br>';

echo $fruits[2];
echo '<br>';

// echo $fruits[3]; // Warning

/**
 * Associative array
 */
$colors = [
    1 => 'red',
    4 => 'green',
    6 => 'blue'
];
echo $colors[1];
echo '<br>';

echo $colors[4];
echo '<br>';

echo $colors[6];
echo '<br>';

// echo $colors[0]; // Warning

$hex = [
    'red' => '#f00',
    'green' => '#0f0',
    'blue' => '#00f',
];

echo $hex['red'];
echo '<br>';

echo $hex['green'];
echo '<br>';

echo $hex['blue'];
echo '<br>';

$person = [
    'first_name' => 'Charlie',
    'last_name' => 'Lee'
];

echo $person['first_name'];
echo '<br>';

echo $person['last_name'];
echo '<br>';

$people = [
    [
        'first_name' => 'Charlie',
        'last_name' => 'Lee',
        'email' => 'charlie@gmail.com'
    ],
    [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => 'john@gmail.com'
    ],
    [
        'first_name' => 'Pete',
        'last_name' => 'Mitchell',
        'email' => 'pete@gmail.com'
    ]
];

echo $people[1]['first_name'];
echo '<br>';

echo $people[1]['last_name'];
echo '<br>';

echo $people[1]['email'];
echo '<br>';
echo '<br>';

var_dump($people);
echo '<br>';
echo '<br>';

echo json_encode($people);
echo '<br>';
echo '<br>';

var_dump(json_encode($people));