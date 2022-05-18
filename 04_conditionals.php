<?php

//If Statements

// $age = 20;

// if($age >= 18) {
//     echo 'You are old enough to vote!';
// } else{
//     echo 'Sorry, you are not old enough to vote!';
// }

// $t = date('H');

// if($t < 12){
//     echo 'Good morning';
// }elseif($t < 17){
//     echo 'Good afternoon';
// } else{
//     echo 'Good evening';
// }

//Check if array is empty
$posts = ['First Post'];

// if(!empty($posts)){
//     echo $posts[0];
// } else {
//     echo 'No Posts';
// }

//Ternary operator
// echo !empty($posts) ? $posts[0] : 'No Posts';

//coalescing operator
// echo $posts[0] ?? 'No Posts';


//Switch 

$favecolor = 'yellow';

switch($favecolor){
    case 'red':
        echo 'Your favorite color is red';
        break;
    case 'blue':
        echo 'Your favorite color is blue';
        break;
    case 'green':
        echo 'Your favorite color is green';
        break;
    default:
    echo 'Your favorite color is not red, green or blue';
}   

?>