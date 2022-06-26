<?php
/* ------------ Operators ----------- */
/*
    <   Less than
    >   Greater than
    <=  Less than or equal to
    >=  Greater than or equal to
    ==  Equal to
    === Identical to
    !=  Not equal to
    !== Not identical to
*/

/* ---------- If Statement --------- */
/*
    if (condition) {
        // code to be executed if condition is true
    }
*/

$age = 20;
// $age = 17;

if ($age >= 18) {
    echo 'You are old enough to vote';
} else {
    echo 'You are NOT old enough to vote';
}
echo '<br>';


date_default_timezone_set("Asia/Seoul");

$t = date('F j');
echo $t;
echo '<br>';

$t = date('H');
echo $t;
echo '<br>';

if ($t < 12) {
    echo 'Good Morning';
} elseif ($t < 18) {
    echo 'Good Afternoon';
} else {
    echo 'Good Evening';
}
echo '<br>';


$posts = ['First Post'];
// $posts = [];

if (!empty($posts)) {
    echo $posts[0];
} else {
    echo 'No Posts';
}
echo '<br>';

echo !empty($posts) ? $posts[0] : 'No Posts';
echo '<br>';

$first_post = !empty($posts) ? $posts[0] : 'No Posts';
echo $first_post;
echo '<br>';

$first_post = !empty($posts) ? $posts[0] : null;
echo $first_post;
echo '<br>';

$first_post = $posts[0] ?? null;
echo $first_post;
echo '<br>';


$favcolor = 'red';
// $favcolor = 'green';
// $favcolor = 'blue';
// $favcolor = 'yellow';

switch($favcolor) {
    case 'red':
        echo 'Your favorite color is red.';
        break;
    case 'green':
        echo 'Your favorite color is green.';
        break;
    case 'blue':
        echo 'Your favorite color is blue.';
        break;
    default:
        echo 'Your favorite color is NOT red, green, or blue.';
}