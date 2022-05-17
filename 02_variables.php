<?php
/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = 'Brad'; //string
$age = 30; //int
$has_kids = true; //bool if you echo this it will print 1 for true nothing for false
$cash_on_hand = 20.75; //float

//Concatenation

//With single quotes. 
// echo $name . ' is ' . $age . ' years old'; 

//With double quotes! Easier! with or without curly braces
echo "${name} is ${age} years old";

//Is actually 10. Not like JS
echo '5' + '5';

//Constants 
define('HOST', 'localhost');
define('DB_NAME', 'dev_db');

echo HOST
?>