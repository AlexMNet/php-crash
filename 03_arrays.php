<?php
//Simple Array
$numbers = [1, 2, 3, 4];

$fruits = array('apple', 'orange', 'pear');

// echo $fruits[1];

//Associative Array
$colors = [
    1 => 'red',
    4 => 'blue',
    6 => 'green'
];

// echo $colors[4];

$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
];

// echo $hex['blue'];

$person = [
    'first_name' => 'Brad',
    'last_name' => 'Traversy',
    'email' => 'brad@gmail.com'
];

// echo $person['first_name'];

//Multidimensional Arrays

$people = [
    [
    'first_name' => 'Brad',
    'last_name' => 'Traversy',
    'email' => 'brad@gmail.com'
    ],
    [
    'first_name' => 'Jane',
    'last_name' => 'Smith',
    'email' => 'jane@gmail.com'
    ]   
];

    // echo $people[1]['email'];

    //Turn object into JSON
    var_dump(json_encode($people));

    //Turn JSON into associative array
    // json_decode()
?>