<?php

//Printing out global variables 
// $global_variable = 22;
// function registerUser(){
//     global $global_variable;
//     echo $global_variable;
// }

// registerUser();

//Arguments

function registerUser($email){
    echo $email . ' registered';
}

// registerUser('alex@gmail.com');

function sum($n1, $n2){
    return $n1 + $n2;
}

// $number = sum(5, 5);
// echo $number;
// echo sum(5, 5);

//Default values
function product($n1 = 4, $n2 = 5){
    return $n1 * $n2;
} 

// echo product();

//Anonymous functions set to variables
$subtract = function($n1, $n2){
    return $n1 - $n2;
};

// echo $subtract(10, 5);

//Arrow functions
$add = fn ($a, $b) => $a + $b;

echo $add(4, 5);

?>