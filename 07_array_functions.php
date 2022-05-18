<?php
$fruits = ['apple', 'orange', 'pear'];

//Get length
// echo count($fruits);

//Search array
// var_dump(in_array('Apple', $fruits));

//Add to array
$fruits[] = 'grape';
array_push($fruits, 'blueberry', 'strawberry');
array_unshift($fruits, 'mango');

// print_r($fruits)

//Remove from array
array_pop($fruits);

array_shift($fruits);

//Remove specific item
// unset($fruits[2]);

//Array chunking
$chunked_array = array_chunk($fruits, 2);
// print_r($chunked_array);

// print_r($fruits)

//concatenate arrays
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];

$arr3 = array_merge($arr1, $arr2);
//Spread operator
// $arr4 = [...$arr1, ...$arr2];
// print_r($arr3);

$numbers = [4,5];
$scores = [1,2,3, ...$numbers];

// print_r($scores);

//Combine arrays into key value pairs
$a = ['green', 'red', 'yellow']; //keys
$b = ['avocado', 'apple', 'banana']; //values

$c = array_combine($a, $b);

// print_r($c);

//Get keys only
$keys = array_keys($c);
// print_r($keys);

//Switch keys to values and vice versa 
$flipped = array_flip($c);

// print_r($flipped);

//Create a range of numbers
$numbers = range(1, 20);

// print_r($numbers);

//Map function

$new_numbers = array_map(function($number){
    return "Number ${number}";
}, $numbers);

// print_r($new_numbers);

//Filter array
$less_than_10 = array_filter($numbers, fn($number) => $number <= 10);

// print_r($less_than_10);

//Reduce
$sum = array_reduce($numbers, fn($prev, $curr)=> $prev + $curr);

var_dump($sum);

?>