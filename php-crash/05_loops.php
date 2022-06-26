<?php
/* ------------ For Loop ------------ */
/* 
    for (initialize; condition; increment) {
        // code to be executed
    }
*/
for ($x = 0; $x < 6; $x ++) {
    echo 'Number: ' . $x . '<br>';
}


/* ------------ While Loop ------------ */
/* 
    while (condition) {
        // code to be executed
    }
*/
$x = 6;
while ($x < 11) {
    echo 'Number: ' . $x . '<br>';
    $x ++;
}


/* ---------- Do While Loop --------- */
/*
    do {
        // code to be executed
    } while (condition);
*/
// always execute the block of code once, even if the condition is false
$x = 11;
do {
    echo 'Number: ' . $x . '<br>';
} while ($x < 11);

$x = 12;
do {
    echo 'Number: ' . $x . '<br>';
    $x ++;
} while ($x < 16);


/* ---------- Foreach Loop ---------- */
/*
    foreach ($array as $value) {
        // code to be executed
    }
*/
$posts = ['First Post', 'Second Post', 'Third Post'];

for ($x = 0; $x < count($posts); $x ++) {
    echo $posts[$x], '<br>';
}

foreach ($posts as $post) {
    echo $post, '<br>';
}

foreach ($posts as $index => $post) {
    echo $index . ' : ' . $post . '<br>';
}

$person = [
    'first_name' => 'Charlie',
    'last_name' => 'Lee',
    'email' => 'charlie@gmail.com'
];

foreach($person as $key => $value) {
    echo "$key - $value <br>";
}