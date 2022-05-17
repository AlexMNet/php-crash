<?php
    //echo - Output strings, numbers, html,etc
    // echo 123, 'Hello', 10.5;

    //print works like echo, but can only take a single argument. Not often used
    print 123;
    


    //print_r() - print single values and arrays
    // print_r([1, 2, 3]);

    //var_dump() - Returns more info like data type and length
    // var_dump(true);
    // var_dump('hello');
 
    //var_export() - Similar to var_dump(). Outputs a string representation of a variable. Prints string with quotes

    // var_export('Hello');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Outputing in html -->
    <h1><?php
    echo 'Hello'
    ?></h1>
    <!-- Shorthand outputing in html. Omit the php and echo -->
    <h1><?=
     'Hello'
    ?></h1>
</body>
</html>