<?php

//for loop
// for($i = 0; $i <= 10; $i++){
//     echo $i;
// }

//While loop

// $i = 0;
// while($i < 5){
//     echo 'hello!' . '<br>';
//     $i++;
// }

//Do while loop
// $i = 1;

// do{
//     echo 'Number ' . $i . '<br>';
//     $i++;
// } while($i <= 5);

//For Each 
$posts = ['First Post', 'Second Post', 'Third Post'];

// foreach($posts as $post){
//     echo $post;
// }

//With index
// foreach($posts as $index => $post){
//     echo $index . '-' . $post . '<br>';
// }

// for($i = 0; $i < count($posts); $i++){
//     echo $posts[$i];
// }

//Associative array
$person = [
    'first_name' => 'Brad',
    'last_name' => 'Traversy',
    'email' => 'brad@gmail.com'
];

foreach($person as $key => $value){
    echo "$key = $value<br>";
}


?>